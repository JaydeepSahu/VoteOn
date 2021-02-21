<?php
session_start();
$_SESSION['admin'];
if ($_SESSION['admin'] == "") {
  session_destroy();
  header("location:oops.php");
}
include("connect.php");
$query = "select * from tbl_voter";
$res = mysql_query($query);

?>
<html>

<head>

    <link href="css/viewpat.css" rel="stylesheet" type="text/css" />
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <br />
                <h3>Online Voting System</h3>
                </br>
            </div>
            <div class="col-sm-5">
                <br />
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
            VOTER REPORT
        </div>
        <br />
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>S. No.</th>
                        <th>Image</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>Date of Birth</th>
                        <th>AADHAR NO.</th>
                        <th>MOBILE NO.</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
          $sn = 1;
          while ($row = mysql_fetch_array($res, MYSQL_BOTH)) {
          ?>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><img src="../voter/upload/photo/<?php echo $row['photo']; ?>" height="100px" width="70px" />
                        </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['aadhar']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><a href="editvoter.php"><button type="button" class="btn btn-success">
                                    EDIT
                                </button></a>
                            <a href="deletevoter.php"><button type="button" class="btn btn-danger">
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
</body>

</html>