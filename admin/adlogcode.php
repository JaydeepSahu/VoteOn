<?php
session_start();
$email=$_POST['email'];
$password1=$_POST['password'];
//$password=md5($password1);
//echo $email,$password;
include("connect.php");
$query="select * from tbl_admin where email='$email' and password='$password1'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$email;
	header("location:adpage.php");
}
else
{
	header("location:index.php?msg=1");
}