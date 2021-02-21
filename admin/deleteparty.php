<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$email=$_SESSION['commitee'];
$query="delete from tbl_party where pemail=$row['pemail']";
mysql_query($query);
header(location:'viewparty.php?msg=1');
?>