<script>
function xoasanpham(){
	var conf =confirm("Bản có chắc chắn muốn xóa không");
	return conf;
	}
</script>
<?php
	if(isset($_GET['list'])){
		$list =$_GET['list'];
		}
	else{
		$list =1;
		}
	$rowsperpage = 5;
	$perrow =$list*$rowsperpage - $rowsperpage;		
?>
<table border="1" cellpadding="0" cellpadding="0" width="100%">
        </a>
        <tr>
        	<td width="5%">Mã số </td>
            <td width="10%">Tên Sản Phẩm</td>
            <td width="5%">Số Lượng </td>
            <td width="20%">Mô Tả</td>
            <td width="10%">Ảnh Mô tả</td>
            <td width="10%">Giá</td>
            <td width="10%">Loại</td>
             <td colspan="2" width="5%"><a href="quantri.php?page=them" style="float:right;;color:#000;padding:3px;">Thêm Sản Phẩm</a></td>
              
        </tr>
        <?php 
		$query ="SELECT * FROM quanao ORDER BY id_product DESC LIMIT $perrow,$rowsperpage";
		$result =mysql_query($query);
		
		$totalrows =mysql_num_rows(mysql_query("SELECT * FROM quanao"));
		$totallist = ceil($totalrows/$rowsperpage);		
		
		$listpage ='';
		for($i=1;$i<=$totallist;$i++){
			if($list ==$i){
				$listpage .=' <span style="color:red">'.$i.'</span> ';
				}
			else{
				$listpage .=' <a href="quantri.php?list='.$i.'">'.$i.'</a> ';
				}	
			}
		while ($row =mysql_fetch_array($result)){
		?>
        <tr>
        	<td width="5%"><?php echo $row["id_product"]; ?> </td>
            <td width="10%"><?php echo $row["name"]; ?></td>
            <td width="5%"><?php echo $row["soluong"]; ?> </td>
            <td width="20%"><?php echo $row["description"]; ?></td>
            <td width="10%"><img src="img/<?php echo $row["img"]; ?>" width="100" height="100" /></td>
            <td width="10%"><?php echo $row["cost"]; ?></td>
            <td width="10%"><?php echo $row["category"]; ?></td>
             <td width="5%"><a href="quantri.php?page=sua&id_product=<?php echo $row['id_product'];?>">Sửa</a></td>
              <td width="5%"><a onclick="return xoasanpham();" href="xoa.php?id_product=<?php echo $row['id_product']; ?>">Xóa</a></td>
        </tr>
      
        <?php } ?>
          <tr>
        <td colspan="9" style="text-align:right;">Trang : <?php echo $listpage; ?>
        </tr>
        </table>