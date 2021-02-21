
<?php
session_start();
$_SESSION['voter'];
if($_SESSION['voter']=="")
{
session_destroy();
header("location:oops.php");	
}
$email=$_SESSION['voter'];
include("connect.php");
$query="select * from tbl_voter where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$vid=$row['voterid'];
}
$name=$_POST['name'];


$fname=$_POST['fname'];
$mname=$_POST['mname'];

$gender=$_POST['a'];

$dob=$_POST['dob'];

$pincode=$_POST['pincode'];

$address=$_POST['address'];

$mobile=$_POST['mobile'];
$email=$_POST['email'];


$filename=$_FILES['photo']['name'];

$type=$_FILES['photo']['type'];

$size=$_FILES['photo']['size'];

$path=$_FILES['photo']['tmp_name'];

$location="upload/photo/";
move_uploaded_file($path,$location.$filename);
include("connect.php");
$query2="update tbl_voter set name='$name', fathername='$fname',mothername='$mname', gender='$gender',dob='$dob', email='$email', pincode='$pincode',  address='$address', mobile='$mobile', photo='$filename' where voterid='$vid'";

mysql_query($query2);
header("location:voterprofile.php");
?>