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
$query1="select * from tbl_voter where email='$email'";
$res1=mysql_query($query1);
if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
?>
<html>
<head>
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
<div class="container-fluid bg-light">
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
	<br/>
	<h2>Online Voting System</h2>
	</br>
	</div>
    <div class="col-sm-6">
	<br/>
<ul class="nav justify-content-end">

    <li class="nav-item">
      <a class="nav-link" href="voter.php">Home</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="vabout.php">About</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="vnotification.php">Notifications</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="givevote.php">Vote</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="voterprofile.php">My Account</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="vcontact.php">Contact Us</a>
    </li>
	<li><div id="photo"><img src="upload/photo/<?php echo $row1['photo'];?>" height="70px" width="70px" style=" border:1px solid; border-radius:100px;"/></div></li>
</div>

<div class="col-sm-1"></div>
  </ul>
  </div>

  <div id="status">
  <div class="side"></div>
  CHANGE PASSWORD
  </div>
  <br/>
  <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
<div class="container p-3 my-3 bg-primary text-white">
<center><h3>Change Your Current Password</h3></center>
</div>
<br/>
</div>
<div class="col-sm-3"></div>
</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<form action="voterchangecode.php" method="post">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h5">
Old Password:
</div>
<div class="col-sm-6">
<input type="password" name="op" placeholder="Enter Your Current Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h5">
New Password:
</div>
<div class="col-sm-6">
<input type="password" name="np" placeholder="Enter Your New Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4 h5">
Confirm Password:
</div>
<div class="col-sm-6">

<input type="password" name="cp" placeholder="Re-enter Your New Password" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<input type="submit" value="Change Password"  class="form-control btn btn-danger "/>
<div class="col-sm-1"></div>
</div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
</div>
<br/>
<br/>
</div>
<?php
}
?>
</body>
</html>
