<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
$pname=$_POST['pname'];
$psecretary=$_POST['psecretary'];
$pmobile=$_POST['pmobile'];
$pemail=$_POST['pemail'];
$padd1=$_POST['paddress1'];
$padd2=$_POST['paddress2'];
$pcity=$_POST['pcity'];
$pstate=$_POST['pstate'];
$pdescription=$_POST['pdescription'];
$plogo=$_FILES['logo']['name'];
//echo $filename."<br/>";
$type=$_FILES['logo']['type'];
//echo $type."<br/>";
$size=$_FILES['logo']['size'];
//echo $size."<br/>";
$path=$_FILES['logo']['tmp_name'];
//echo $path."<br/>";
$location="../commitee/upload/logo/";
move_uploaded_file($path,$location.$plogo);
include("connect.php");
$query="insert into tbl_party(pname,psecretary,pmobile,pemail,paddress1,paddress2,pcity,pstate,pdescription,plogo,time) values ('$pname','$psecretary','$pmobile','$pemail','$padd1','$padd2','$pcity','$pstate','$pdescription','$plogo',now())";
mysql_query($query);
header("location:viewparty.php?msg=1");