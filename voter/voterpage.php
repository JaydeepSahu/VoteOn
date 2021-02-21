<?php
session_start();
$_SESSION['voter'];
if($_SESSION['voter']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$email=$_SESSION['voter'];
$query="select * from tbl_voter where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/common.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="container-fluid bg-light" >
<div class="row " >
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
	<br/>
	<h2>Online Voting System</h2>
	</br>
	</div>
    <div class="col-sm-5">
	<br/>
<ul class="nav justify-content-end">

    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="givevote.php">Vote</a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link" href="voterprofile.php">My Account</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="voterlogout.php">Logout</a>
    </li>
</div>

<div class="col-sm-1"></div>
  </ul>
  </div>

 <div id="home" style="background-image:url('images/AdobeStock_198703216_Preview.jpeg');
	background-size:100% 100%;
	background-attachment:fixed;">
	 <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  
  <h2>We Make Elections Easy and Affordable</h2>
  <hr width="900px" size="20px" color="white"/>
  <p>VoteOn is a secure online voting platform that makes it easy to run elections at a fraction of <br/>the usual cost. We're the leading provider of ranked choice elections, which help achieve more <br>democratic outcomes by better representing the will of your voters.</p>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
</div>
<div id="welcome">
</br>
<h3>WELCOME TO ONLINE VOTING SYSTEM</h3>
</br>
</div>
<div id="image">
<div class="side"></div>
<div class="middle">
<img src="images/AdobeStock_64318670_Preview.jpeg" height="90%" width="90%" class="mx-auto d-block" />
</div>
<div class="middle">
<img src="images/AdobeStock_64318670_Preview.jpeg" height="90%" width="90%" class="mx-auto d-block" />
</div>
<div class="middle">
<img src="images/AdobeStock_64318670_Preview.jpeg" height="90%" width="90%" class="mx-auto d-block" />
</div>
<div class="side"></div>
</div>
<!-- Page content -->


</div>
</body>
</html>