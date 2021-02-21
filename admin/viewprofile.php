<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:oops.php");	
}
//echo "hello";
?>
<html>
<head>
<link href="css/viewprofile.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.0.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidebar">
  <a class="active" href="INDEX.PHP"><img src="images/home.jpg" height="57px" width="57px"/></a>
  <br/>
  <h3><img src="images/man (2).png" height="100px" width="100px"/></h3>
  <h3><b>WELCOME</b></h3>
  <h3><b>TO ADMIN</b></h3>
</div>
<!-- Page content -->
<div class="content">
<div id="welcome"></div>
<div id="outer" style="background-image:url('images/dominik-schroder-FIKD9t5_5zQ-unsplash.jpg');">

<div id="full">
<br/>
<br/>
<a href="viewvoter.php"><div class="block" style="background: linear-gradient(to top left, #66ffff 0%, #ff99cc 100%);"><h2>VIEW VOTERS</h2></div></a>
<a href="viewcandidate.php"><div class="block" style="background: linear-gradient(to top right, #66ffff 0%, #ff99cc 100%);"><h2>VIEW CANDIDATE</h2></div></a>
<a href="viewelection.php"><div class="block" style="background:linear-gradient(to top left, #66ffff 0%, #ff99cc 100%);"><h2>VIEW ELECTIONS</h2></div></a>
 <a href="viewresult.php"><div class="block" style="background:linear-gradient(to top right, #66ffff 0%, #ff99cc 100%);"><h2>VIEW POLL RESULT</h2></div></a>
</div>
<br/>

<center><div id="comment" style="background:rgba(0,255,0,0.5);"><a href="viewnotification.php"><h3 style="margin-top:10px;text-decoration:none;">Notifications</h3></a></div></center>
<br/>


<div id="full">
 <a href="addelection.php"><div class="block" style="background:linear-gradient(to bottom left, #66ffff 0%, #ff99cc 100%);"><h2>Add Elections</h2></div></a>
 <a href="viewapp.php"><div class="block" style="background: linear-gradient(to bottom right, #66ffff 0%, #ff99cc 100%);"><h2>Add Candidate<br/>-MENTS</h2></div></a>
<a href="adchange.php"><div class="block" style="background: linear-gradient(to bottom left, #66ffff 0%, #ff99cc 100%);"><h2>CHANGE PASSWORD</h2></div></a>
<a href="adlogout.php"><div class="block" style="background: linear-gradient(to bottom right, #66ffff 0%, #ff99cc 100%);"><h2 style="margin-top:45px;">LOGOUT</h2></div></a>
</div>
<br/>
</div>
</div>
</body>
</html>