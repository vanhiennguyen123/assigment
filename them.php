<div id="them">
<?php 
 $sqldm ="SELECT * FROM quanao";
 $querydm = mysql_query($sqldm);
 
 if(isset($_POST['submit'])){
	 if($_POST['name'] == ""){
		 $error_name ='<span style="color:red">(*)</span>';
		 }
	 else{
		 $name = $_POST['name'];
		 }
	if($_POST['soluong'] ==""){
		$error_soluong ='<span style="color:red">(*)</span>';
		}
	else{
		$soluong= $_POST['soluong'];
		}
	if($_POST['mota'] == ""){
		$error_mota ='<span style="color:red">(*)</span>';
		}
	else{
		$mota =$_POST['mota'];
		}
	if($_POST['gia' ] == ""){
		$error_gia ='<span style="color:red">(*)</span>';
		}
	else{
		$gia =$_POST['gia'];
		}
		
	if($_FILES['anh']['name'] == ""){
		$error_anh = '<span style="color:red;">(*)<span>';	
	}
	else{
		$anh = $_FILES['anh']['name'];
		$tmp = 	$_FILES['anh']['tmp_name'];
	}
	if($_POST['danhmuc'] == "unselect")	{
		$error_danhmuc ='<span style="color:red;">(*)<span>';	
		}
	else{
		$danhmuc=$_POST['danhmuc'];
		}					 	 
 }
?>
<?php 
//nhap vao CSDL
if(isset($name) && isset($soluong) && isset($mota) && isset($anh) && isset($gia) && isset($danhmuc)){
	move_uploaded_file($tmp, 'img/'.$anh);
	$sql ="INSERT INTO quanao(name,soluong,description,img,cost,category) VALUES('$name','$soluong','$mota','$anh','$gia','$danhmuc')";
	$query =mysql_query($sql);
	header('location:quantri.php?page=danhsach');
	}
?>
<h2>Thêm Sản Phẩm Mới</h2>
<Form method="post" enctype="multipart/form-data">
<table width="100%" >

	<p>Tên Sản Phẩm : <input type="text" name="name" /><?php if(isset($error_name)){echo $error_name;}?> </p><br />
   <p >Số Lượng : <input type="text" name="soluong" /> <?php if(isset($error_soluong)){echo $error_soluong;}?>  </p><br />
    <p >Mô Tả : <textarea cols="60" rows="12" name="mota" /	></textarea><?php if(isset($error_mota)){echo $error_mota;}?>  </p><br />
    <p >Ảnh : <input type="file" name="anh" id="anh" /> <?php if(isset($error_anh)){echo $error_anh;}?></p><br />
    <p > Giá :<input type="gia" name="gia" />đ<?php if(isset($error_gia)){echo $error_gia;}?>  </p><br />
    <p>Loại : <select name="danhmuc">
    	<option value="unselect" selected="selected" >Lựa chọn loại sản phẩm</option>
        <?php while($rowdm =mysql_fetch_array($querydm)){ ?>
        	<option value="<?php echo $rowdm['category']; ?>"><?php echo $rowdm['category']; ?></option>
        <?php }?>
    </select><?php if(isset($error_danhmuc)){echo $error_danhmuc;}?></p>
    <input type="submit" name="submit" id="submit" value="Thêm Sản Phẩm Mới" />
    <input type="reset" name="reset" id="rs" value="Nhập lại" />
    </p>
</table>    
</Form>
</div>