<?php

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
      <a class="nav-link" href="adpage.php">Home</a>
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
         <a class="dropdown-item" href="viewparty.php">Manage Party</a>
        <a class="dropdown-item" href="viewcandidate.php">Manage Candidate</a>
        <a class="dropdown-item" href="viewnotification.php">Manage Notification</a>
        <a class="dropdown-item" href="viewvotes.php">Manage Votes</a>
        <a class="dropdown-item" href="viewcommitee.php">Manage Commitee Member</a>
        <a class="dropdown-item" href="viewadmin.php">Manage Election Admin</a>
      </div>
    </li>
	
    <li class="nav-item">
      <a class="nav-link" href="contact.php">My Account</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Logout</a>
    </li>
</div>


<div class="col-sm-1"></div>
  </ul>
  </div>

  <div id="status">
  <div class="side"></div>
  COMMITEE MANAGEMENT
  </div>
  <div id="register" class="">
<div class="container bg-white">
<div class="container p-3 my-3 bg-primary text-white">
<center><h3>
ADD NEW PARTY
</h3></center>
</div>
<div class="form-group">
    
<br/>

<form action="addcommiteecode.php" method="post"   enctype="multipart/form-data">
     <label for="name">
MEMBER NAME :
</label>
<input type="text" name="mname" placeholder="Enter Member Name" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="mobile">
MEMBER MOBILE :
</label>
<input type="text" name="mmobile" placeholder="Enter Mobile Number"   maxlength="10" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="email">
MEMBER EMAIL :
</label>
<input type="text" name="memail" placeholder="Enter Member Email" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="email">
MEMBER DOB :
</label>
<input type="date" name="mdob" placeholder="Enter Member DOB" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="address">
MEMBER ADDRESS LINE1 :
</label>
<textarea placeholder="Enter Party Address Line1" style="resize:none" name="maddress1" class="form-control" style="color:black;"></textarea>
</div>
<div class="form-group">
<label for="address">
MEMBER ADDRESS LINE2 :
</label>
<textarea placeholder="Enter Member Address Line1" style="resize:none" name="maddress2" class="form-control" style="color:black;"></textarea>
</div>
<div class="form-group">
<label for="pin">
MEMBER CITY :
</label>
<input type="text" name="mcity" placeholder="Enter Member City" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="aadhar">
MEMBER STATE :
</label>
<input type="text" name="mstate" placeholder="Enter Member State" maxlength="12" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="aadhar">
MEMBER COUNTRY :
</label>
<input type="text" name="mcountry" placeholder="Enter Member Country" maxlength="12" class="form-control" style="color:black;"/>
</div>
<div class="form-group">
<label for="logo">
MEMBER PICTURE :
</label>
<input type="file" name="mphoto" onchange="FileUpload(this)"  class="form-control" style="color:black;"/>
</div>
<button type="submit" class="btn btn-success btn-block">Submit</button>

<br/>
<br/>
</div>
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