<?php
session_start();
$_SESSION['voter'];
if ($_SESSION['voter'] == "") {
  session_destroy();
  header("location:oops.php");
}
include("connect.php");
$email = $_SESSION['voter'];
$query = "select * from tbl_voter where email='$email'";
$res = mysql_query($query);
if ($row = mysql_fetch_array($res, MYSQL_BOTH)) {
?>
<html>

<head>
    <style>
    h6 {
        margin-left: 10px;
    }
    </style>
    <link href="css/regvoter.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                <br />
                <h2>Online Voting System</h2>
                </br>
            </div>
            <div class="col-sm-6">
                <br />
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
                    <li>
                        <div id="photo"><img src="upload/photo/<?php echo $row['photo']; ?>" height="70px" width="70px"
                                style=" border:1px solid; border-radius:100px;" /></div>
                    </li>
            </div>

            <div class="col-sm-1"></div>
            </ul>
        </div>

        <div id="status">
            <div class="side"></div>
            ACCOUNT DETAILS
        </div>

        <div id="register" class="">
            <div class="container bg-white">
                <div class="container p-3 my-3 bg-primary text-white">
                    <center>
                        <h3>PERSONAL ACCOUNT DETAILS</h3>
                    </center>
                </div>
                <br />
                <div class="row">
                    <div class="col-sm-3">
                        <h6>NAME :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['name'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>FATHER'S NAME :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['fathername'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>MOTHER'S NAME :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['mothername'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>GENDER :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['gender'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>DOB :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['dob'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>MOBILE :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['mobile'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>E-MAIL :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['email'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>AGE :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo date_diff(date_create($row['dob']), date_create('today'))->y;
              //echo $row['age'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>ADDRESS :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['address'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>PINCODE :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['pincode'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>AADHAR NO. :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['aadhar'];
              ?>
                    </div>
                </div>
                <hr />
                <div class="row ">
                    <div class="col-sm-3">
                        <h6>VOTER ID NO. :</h6>
                    </div>
                    <div class="col-sm-9">
                        <?php
              echo $row['voteridno'];
              ?>
                    </div>
                </div>
                <hr />
                <?php
      }
        ?>
            </div>
            <a href="voterchange.php"><button type="button" class="btn btn-secondary">Change Password</button></a>
            <a href="voterupdate.php"><button type="button" class="btn btn-secondary">Update Profile</button></a>
            <a href="../logout.php"><button type="button" class="btn btn-secondary">Logout</button></a>
        </div>
        <div id="footer">
            <div class="sfooter">
            </div>
            <div class="lfooter">
                <h4>CONTACT INFO</h4>
                <p>
                    <a href="#">&#187;Address:203 Fake St. Mountain View</a><br />
                    <a href="#">&#187;San Francisco, California, USA</a><br />
                    <a href="#">&#187;Mobile:(842)932-3161</a><br />
                    <a href="#">&#187;Phone:240-107</a><br />
                    <a href="#">&#187;Email:kumarsahujaydeep@gmail.com</a><br />
                    <a href="#">&#187;LinkedIn:............</a><br />
                    <a href="#">&#187;Facebook:............</a><br />
                    <a href="#">&#187;Twitter:.............</a><br />
                    <a href="#">&#187;Instagram:...........</a>
                </p>
            </div>
            <div class="cfooter">
            </div>
            <div class="lfooter">
                <h4>PROJECT LINKS</h4>
                <p>
                    <a href="#">&#187;Home</a><br />
                    <a href="#">&#187;Blog</a><br />
                    <a href="#">&#187;News</a><br />
                    <a href="#">&#187;Contact</a><br />
                    <a href="#">&#187;Login</a><br />
                    <a href="#">&#187;Email Us</a>
                </p>
            </div>
            <div class="cfooter">
            </div>
            <div class="lfooter">
                <h4>MODULES</h4>
                <p>
                    <a href="#">&#187;User Module</a><br />
                    <a href="#">&#187;Login Module</a><br />
                    <a href="#">&#187;Forgot Password Module</a><br />
                    <a href="#">&#187;Change Password Module</a><br />
                    <a href="#">&#187;Message API</a><br />
                    <a href="#">&#187;Shift Module</a>
                </p>
            </div>
            <div class="cfooter">
            </div>
            <div class="lfooter">
                <h4>ABOUT PROJECT</h4>
                <p>
                    Election System & Software (ES&S) is an Omaha, Nebraska-based company that manufactures and
                    services.[1] The company's offerings include vote tabulators, direct-recording election (DRE)
                    machines,voter registration andelection management system, ballot-marking devices, electronic poll
                    books, Ballot on Demand printing services, and absentee voting-by-mail services.
                </p>
            </div>
            <div class="sfooter">
            </div>
            <div id="bfooter">
                <div class="fafa">
                    <br />
                    <h6>Copyright&copy; All rights reserved.Developed & Designed By jaydeepsahu</h6>
                </div>
                <div class="fafa"><br />
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

    </div>
</body>

</html>