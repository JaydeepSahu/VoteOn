<?php

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <br />
                <h2>Online Voting System</h2>
                </br>
            </div>
            <div class="col-sm-5">
                <br />
                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../notification.php">Notifications</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact Us</a>
                    </li>
            </div>

            <div class="col-sm-1"></div>
            </ul>
        </div>
        <div id="status">
            <div class="side"></div>
            VOTER LOGIN
        </div>
        <br />
        <div id="login">
            <div class="container">
                <div class="container p-3 my-3 bg-primary text-white">
                    <center>
                        <h3>LOGIN TO YOUR ACCOUNT</h3>
                    </center>
                </div>
                <form action="logcode.php" method="post">
                    <span style="font-family:inherit;font-size:20px;color:#2196f3;margin-left:25px;;">Who You
                        Are:-</span>
                    &nbsp;&nbsp;
                    <input type="radio" name="a" value="Voter" />
                    <span style="font-family:arial;font-size:15px;color:red;" required />
                    VOTER
                    </span>
                    &nbsp;&nbsp;
                    <input type="radio" name="a" value="Commitee" />
                    <span style="font-family:arial;font-size:15px;color:red;" required />
                    COMMITEE
                    </span>
                    &nbsp;&nbsp;
                    <input type="radio" name="a" value="Candidate" />
                    <span style="font-family:arial;font-size:15px;color:red;" required />
                    CANDIDATE
                    </span>

                    <div class="form-group">
                        <label for="uname">E-mail:</label>
                        <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                            name="password" required>

                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> Apply Terms &
                            Conditions.

                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>

                </form>
            </div>
            <br />
            Not yet Registered. Create an account FOR &nbsp;&nbsp;
            <a href="regvoter.php" style="font-family:arial;color:blue;">Voter</a>&nbsp;&nbsp;<a
                href="commitee/regcommitee.php" style="font-family:arial;color:blue;">Commitee</a>
            <br />
            <a href="voterforgot.php"><span style="font-family:arial;color:blue;">Forgot Password</span></a>
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