<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['admin'];
include("connect.php");
$query="select * from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$admin=$row['admin_id'];
}
$title=$_POST['title'];
$description=$_POST['description'];

$query3="insert into tbl_notification(admin_id,title,description,time) values ('$admin','$title','$description',now())";
mysql_query($query3);
header("location:login.php?msg=1");
?>