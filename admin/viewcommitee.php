<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
include("connect.php");
$query="select * from tbl_commitee";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/regvoter.css" rel="stylesheet" type="text/css">
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
    <div class="col-sm-5">
	<br/>
	<h3>Online Voting System</h3>
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
	
	 <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Administration
      </a>
      <div class="dropdown-menu">
<a class="dropdown-item" href="viewvoter.php">Manage Voter</a>
        <a class="dropdown-item" href="viewparty.php">Manage Party</a>
        <a class="dropdown-item" href="viewcandidate.php">Manage Candidate</a>
        <a class="dropdown-item" href="viewnotification.php">Manage Notification</a>
        <a class="dropdown-item" href="viewvotes.php">Manage Votes</a>
        <a class="dropdown-item" href="viewcommitee.php">Manage Commitee Member</a>
        <a class="dropdown-item" href="viewadmin.php">Manage Election Admin</a>
      </div>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="adprofile.php">My Account</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="adcontact.php">Contact Us</a>
    </li>
</div>

<div class="col-sm-1"></div>
  </ul>
  </div>

  <div id="status">
  <div class="side"></div>
  COMMITEE MEMBER REPORT
  </div>
  
<div class="container">

  <table class="table">
<a href="addcommitee.php"><div id="add">
  <h5> Add Commitee Member</h5>
  </div></a>
    <thead class="thead-dark">
	
  
<tr>
<th>S. No.</th>
<th>IMAGE</th>
<th>NAME</th>
<th>MOBILE</th>
<th>E-MAIL</th>
<th>Date Of Birth</th>
<th>ACTION</th>
</tr>
<?php
$sn=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
    </thead>
    <tbody>
      <tr>
<td><?php echo $sn; ?></td>
<td><img src="../photo/<?php echo $row['mphoto'];?>" height="100px" width="70px"/></td>
<td><?php echo $row['mname']; ?></td>
<td><?php echo $row['mmobile']; ?></td>
<td><?php echo $row['memail']; ?></td>
<td><?php echo $row['mdob']; ?></td>
<td><a href="editcommitee.php"><button type="button" class="btn btn-success">
    EDIT
  </button></a>
  <a href="deletecommitee.php"><button type="button" class="btn btn-danger">
    DELETE
  </button></a>
  </td>
</tr>
<?php
$sn++;
}
?>
 </tbody>
 </table>
  </div>
  <div id="footer">
<div class="sfooter">
</div>
<div class="lfooter">
<h3>COTACT INFO</h3>
<p>
<a href="#">&#187;Address:203 Fake St. Mountain View</a><br/>
<a href="#">&#187;San Francisco, California, USA</a><br/>
<a href="#">&#187;Mobile:(842)932-3161</a><br/>
<a href="#">&#187;Phone:240-107</a><br/>
<a href="#">&#187;Email:kumarsahujaydeep@gmail.com</a><br/>
<a href="#">&#187;LinkedIn:............</a><br/>
<a href="#">&#187;Facebook:............</a><br/>
<a href="#">&#187;Twitter:.............</a><br/>
<a href="#">&#187;Instagram:...........</a>
</p>
</div>
<div class="cfooter">
</div>
<div class="lfooter">
<h3>PROJECT LINKS</h3>
<p>
<a href="#">&#187;HOME</a><br/>
<a href="#">&#187;Blog</a><br/>
<a href="#">&#187;News</a><br/>
<a href="#">&#187;Contact</a><br/>
<a href="#">&#187;Login</a><br/>
<a href="#">&#187;Email Us</a>
</p>
</div>
<div class="cfooter">
</div>
<div class="lfooter">
<h3>ABOUT PROJECT</h3>
<p>
Election System & Software (ES&S) is an Omaha, Nebraska-based company that manufactures and services.[1] The company's offerings include vote tabulators, direct-recording election (DRE) machines,voter registration andelection management system, ballot-marking devices, electronic poll books, Ballot on Demand printing services, and absentee voting-by-mail services.
</div>
<div class="sfooter">
</div>
<div id="bfooter">
<div class="fafa">
<br/>
<h6>Copyright&copy; All rights reserved.Developed & Designed By jaydeepsahu</h6>
</div>
<div class="fafa"><br/>
<span class="fab fa-facebook"></span>
<span class="fab fa-whatsapp"></span>
<span class="	fab fa-facebook-messenger"></span>
<span class="fab fa-twitter	"></span>
<span class="	fab fa-linkedin-in"></span>
<span class="fab fa-google	"></span>
<span class="fab fa-youtube	"></span>
</div>
</div>
  </div>
</body>
<html>