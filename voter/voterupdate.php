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
	<li><div id="photo"><img src="upload/photo/<?php echo $row['photo'];?>" height="70px" width="70px" style=" border:1px solid; border-radius:100px;"/></div></li>
</div>

<div class="col-sm-1"></div>
  </ul>
  </div>

  <div id="status">
  <div class="side"></div>
  UPDATE PROFILE
  </div>
  <br/>
  <br/>
   <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
<div class="container p-3 my-3 bg-primary text-white">
<center><h3>UPDATE YOUR PROFILE DETAILS</h3></center>
</div>
<br/>
</div>
<div class="col-sm-3"></div>
</div>
<form action="voterupdatecode.php" method="post"  enctype="multipart/form-data">
<input type="hidden" name="voterid" value="<?php echo $row['voterid'] ?>"/>
<div class="row ">
<div class="col-sm-2"></div>
<div class="col-sm-8 h4">
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
NAME :
</div>
<div class="col-sm-7">
<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['name'];?>" onblur="checkNameField(this)" id="name" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
FATHER'S NAME :
</div>
<div class="col-sm-7">
<input type="text" name="fname" value="<?php echo $row['fathername'];?>" placeholder="Enter Father's Name" id="fname" onblur="checkNameField(this)" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">MOTHER'S NAME :
</div>
<div class="col-sm-7">
<input type="text" name="mname" value="<?php echo $row['mothername'];?>" placeholder="Enter Mother's Name" id="mname" onblur="checkNameField(this)" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
GENDER :
</div>
<div class="col-sm-3 h6">
<input type="radio" name="a" value="Male"   <?php if($row['gender']=='Male'){ ?> checked 	<?php } ?>/>Male
</div>
<div class="col-sm-1"></div>
<div class="col-sm-3 h6">
<input type="radio" name="a" value="Female"  <?php if($row['gender']=='Female'){ ?> checked 	<?php } ?> />Female
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
DOB :
</div>
<div class="col-sm-7">
<input type="text" name="dob" placeholder="Enter Your dob" value="<?php echo $row['dob'];?>" onblur"checkMobileNumber(this)" maxlength="10" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm 3 h5">
MOBILE :
</div>
<div class="col-sm-7">
<input type="text" name="mobile" placeholder="Enter Mobile Number" value="<?php echo $row['mobile'];?>" onblur="checkMobileNumber(this)" maxlength="10" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
Email :
</div>
<div class="col-sm-7">
<input type="text" name="email" placeholder="Enter Mobile Number" value="<?php echo $row['email'];?>" onblur="checkEmail(this)" maxlength="30" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
PINCODE :
</div>
<div class="col-sm-7">
<input type="text" value="<?php echo $row['pincode'];?>" name="pincode" placeholder="Enter Your Pincode" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
ADDRESS :
</div>
<div class="col-sm-7">
<input type="text" name="address" value="<?php echo $row['address'];?>" placeholder="Enter Your Timing" class="form-control"/>
</div>
<div class="col-sm-1"></div>
</div>
<br/>
<div class="row ">
<div class="col-sm-1"></div>
<div class="col-sm-3 h5">
PHOTO :
</div>
<div class="col-sm-7">
<input type="file" name="photo" class="form-control" onchange="FileUpload(this)" value="<?echo $row['photo'];?>" />
<div class="col-sm-1"></div>
</div>
</div>
<br/>
<div class="row">
<div class="col-sm-1"> </div>
<div class="col-sm-10">
<input type="submit" value="UPDATE" class="form-control btn btn-danger"  />
</div>
<div class="col-sm-1"></div>
</div>
</div>
</form>
<?php
}
?>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</div>
</body>
</html>
