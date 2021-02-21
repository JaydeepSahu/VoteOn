<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['phone'];
$address=$_POST['address'];
$msg=$_POST['message'];
include("connect.php");
$query="insert into tbl_contacts(name,email,phone,address,message,time) values ('$name','$email','$mobile','$address','$msg',now());";
mysql_query($query);
header("location:vcontact.php?msg=c");

?>