<?php
session_start();
$_SESSION['voter'];
if ($_SESSION['voter'] == "") {
	session_destroy();
	header("location:oops.php");
}
// $op=md5($_POST['op']);
// $np=md5($_POST['np']);
// $cp=md5($_POST['cp']);
$op = $_POST['op'];
$np = $_POST['np'];
$cp = $_POST['cp'];
$email = $_SESSION['voter'];
include("connect.php");
$query = "select password from tbl_voter where email='$email'";
$res = mysql_query($query);
if ($row = mysql_fetch_array($res, MYSQL_BOTH)) {
	$pp = $row['password'];
}
if ($pp == $op) {
	if ($op == $np) {
		header("location:voterchange.php");
	} else if ($np == $cp) {
		$query2 = "update tbl_voter set password='$np' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("location:../login.php?msg=2");
	} else {
		header("location:voterchange.php");
	}
} else {
	header("location:voterchange.php");
}