<?php 
ob_start();
session_start();
mysql_connect("localhost","root","");
mysql_select_db("ass");
mysql_query("SET NAMES 'utf8'");

if(isset($_SESSION['taikhoan'])){
	header('location:quantri.php');
	}
else{	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập hệ thống</title>
<link href="css/dangnhap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	if(isset($_POST['submit'])){
			if($_POST['taikhoan'] == ""){
				$error ="Xin mời nhập đầy đủ tên tài khoản và mật khẩu";
				}
			else{
				$taikhoan =$_POST['taikhoan'];
				}
			if($_POST['matkhau'] == ""){
				$error ="Xin mời nhập đầy đủ tên tài khoản và mật khẩu";
				}
			else{
				$matkhau =$_POST['matkhau'];
				}	
			if(isset($taikhoan) && isset($matkhau))	{
				$sql ="SELECT * FROM thanhvien WHERE taikhoan='$taikhoan' AND matkhau='$matkhau'";
				$query = mysql_query($sql);
				$row = mysql_num_rows($query);
				if($row <=0){
					$error ="Tài khoản không hợp lệ";
					}
				else{
					$_SESSION['taikhoan'] = $taikhoan;
					$_SESSION['matkhau'] =$matkhau;
					header('location:quantri.php');
					}	
				}		
		}
?>
<form method="POST" >
	<div id="login">
    	<h2><?php if(isset($error)){echo $error;} else {echo "Đăng Nhập hệ thống quản trị";}?></h2>
        <ul>
        	<li><label>Tài Khoản : </label><input type="text" name="taikhoan" /></li>
            <li><label>Mật Khẩu :</label><input type="password" name="matkhau" /></li>
            <li><input type="submit" id="submit" name="submit" value="Đăng Nhập" /><input id="reset" type="reset" value="Làm Mới" name="reset"/></li>
        </ul>
    </div>
</form>    
</body>
</html>
<?php
}
?>