<?php
session_start();
if($_SESSION['taikhoan'] == 'admin' && $_SESSION['matkhau'] =='123456'){
$id_product = $_GET['id_product'];
	mysql_connect("localhost","root","");
	mysql_select_db("huynkshop");
	mysql_query("SET NAMES 'utf8'");
	
	$sql ="DELETE FROM quanao WHERE id_product='$id_product'";
	$query=mysql_query($sql);
	header('location:quantri.php');
}
else{
	header('location:admin.php');
	}
?>