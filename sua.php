<?php
$id_product =$_GET['id_product'];
?>

<div id="them">
<?php 
 $sqldm ="SELECT * FROM quanao";
 $querydm = mysql_query($sqldm);
 
 $sql ="SELECT * FROM quanao WHERE id_product ='$id_product'";
 $query=mysql_query($sql);
 $row =mysql_fetch_array($query);
 
 	if(isset($_POST['submit'])){
		if($_POST['name'] == ""){
			$error_name= "<span style='color:red;'>(*)</span>";
			}
		else{
			$name= $_POST['name'];
			}
		if($_POST['soluong'] ==""){
			$error_soluong ="<span style='color:red;'>(*)</span>";
			}
		else{
			$soluong=$_POST['soluong'];
			}
		if($_POST['mota'] == ""){
			$error_mota ="<span style='color:red;'>(*)</span>";
			}
		else{
			$mota=$_POST['mota'];
			}
		if($_POST['gia'] ==""){
			$error_gia ="<span style='color:red;'>(*)</span>";
			}
		else{
			$gia=$_POST['gia'];
			}
		if($_FILES['anh']['name'] == ""){
			$anh =$_POST['anh'];
			}
		else{
			$anh=$_FILES['anh']['name'];
			$tmp=$_FILES['anh']['tmp_name'];
			}
		$danhmuc =$_POST['danhmuc'];	
		?>
	<?php
	// sua CSDL
	if(isset($name) && isset($soluong) && isset($mota) && isset($gia) ){
		$upload_file = move_uploaded_file($tmp, 'img/'.$anh);
		$sql= "UPDATE quanao SET name='$name',soluong='$soluong',description='$mota',cost='$gia',category = '$danhmuc',img ='$anh' WHERE id_product ='$id_product' " ;
		$query = mysql_query($sql);
		header('location:quantri.php');	
		}										
}
?>
<h2>Sửa sản phẩm</h2>
<Form method="post" enctype="multipart/form-data">
<table width="100%" >

	<p>Tên Sản Phẩm : <input type="text" size="40" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}else{ echo $row['name'];} ?>" /><?php if(isset($error_name)){ echo $error_name;} ?></p><br />
   <p >Số Lượng : <input type="text" name="soluong" value="<?php if(isset($_POST['soluong'])){echo $_POST['soluong'];}else{ echo $row['soluong']; }?>" /><?php if(isset($error_soluong)){ echo $error_soluong;} ?> </p><br />
    <p >Mô Tả : <textarea cols="60" rows="12" name="mota"  	><?php if(isset($_POST['mota'])){echo $_POST['mota'];}else{echo $row["description"];} ?></textarea><?php if(isset($error_mota)){ echo $error_mota;} ?> </p><br />
    <p >Ảnh : <input type="file" name="anh" id="anh" /></p><br /><input type="hidden" name="anh" value="<?php echo $row['img']; ?>" />
    <p>Ảnh Cũ :<img width="200" height="200" src="<?php  echo "img/".$row['img']; ?>" /></p>
    <p > Giá :<input type="gia" name="gia" value="<?php if(isset($_POST['gia'])){echo $_POST['gia'];}else{ echo $row['cost'];} ?>" />đ<?php if(isset($error_gia)){ echo $error_gia;} ?> </p><br />
    <p>Loại : <select name="danhmuc">    	
        <?php while($rowdm =mysql_fetch_array($querydm)){ ?>
        	<option <?php if($row['id_product'] == $rowdm['id_product']){echo "selected='selected'";} ?> value="<?php echo $rowdm['category']; ?>"><?php echo $rowdm['category']; ?></option>
        <?php }?>
    </select></p>
    <input type="submit" name="submit" id="submit" value="Sửa sản phẩm" />
    
    </p>
</table>    
</Form>
</div>