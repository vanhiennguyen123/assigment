<?php
ob_start();
session_start();
mysql_connect("localhost","root","");
mysql_select_db("ass");
mysql_query("SET NAMES 'utf8'");

 if(isset($_SESSION['taikhoan'])=="admin" && $_SESSION['matkhau'] == "123456")
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị WEBSITE</title>
<!--<link href="css/css.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="javascript.js"></script>
</head>

<body onload="run();">
	<div id="menu_bg"><div id="menu">
 
    	<a href ="quantri.php?page=danhsach">Quản lý sản phẩm</a>
        <div id="dangnhap">
        <h2>Xin chào Admin đã đăng nhập hệ thống</h2>
        <a style="float:right" href="dangxuat.php">Đăng Xuất</a></h3>
       </div>
    </div> </div>
 <div id="wrapper">
 
    <div id="content">
    	
        <?php
		
			if(isset($_GET['page'])){
				if ($_GET['page'] == 'danhsach'){
					include_once("danhsach.php");
					}
				else if($_GET['page'] == 'them'){
					include_once("them.php");
					}
				else if($_GET['page'] == 'sua'){
					include_once("sua.php");
					}		
			}
			else{
				include_once('danhsach.php');
			}
		?>
    	
        
    </div>
    <div class="clear"></div>
    <div id="footer">
    	
    </div>
 </div>    
</body>
</html>
 <?php
}
else{
	header('location:index.php');
}
?>  