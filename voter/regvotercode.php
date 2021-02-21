<?php

$name = $_POST['name'];
//echo $name."<br/>";

$fname = $_POST['fname'];
//echo $fname."<br/>";

$mname = $_POST['mname'];
//echo $mname."<br/>";

$gender = $_POST['a'];
//echo $gender."<br/>";

$dob = $_POST['dob'];
//echo $dob."<br/>";

$email = $_POST['email'];
//echo $email."<br/>";

$password = rand(0, 9) . chr(rand(65, 90)) . chr(rand(65, 90)) . rand(0, 9) . chr(rand(65, 90)) . chr(rand(65, 90));
//$password=md5($password1);
//echo $password."<br/>";

$mobile = $_POST['mobile'];
//echo $mobile."<br/>";

$address = $_POST['address'];
//echo $address."<br/>";

$pin = $_POST['pin'];
//echo $pin."<br/>";

$aadhar = $_POST['aadhar'];
//echo $aadhar."<br/>";

$voterid = $_POST['voterid'];
//echo $voterid."<br/>";

$filename1 = $_FILES['photo']['name'];
//echo $filename1."<br/>";
$type1 = $_FILES['photo']['type'];
//echo $type1."<br/>";
$size1 = $_FILES['photo']['size'];
//echo $size1."<br/>";
$path1 = $_FILES['photo']['tmp_name'];
//echo $path1."<br/>";
include("connect.php");
$location1 = "voter/upload/photo/";
move_uploaded_file($path1, $location1 . $filename1);

$filename2 = $_FILES['aadharup']['name'];
//echo $filename2."<br/>";
$type2 = $_FILES['aadharup']['type'];
//echo $type2."<br/>";
$size2 = $_FILES['aadharup']['size'];
//echo $size2."<br/>";
$path2 = $_FILES['aadharup']['tmp_name'];
//echo $path2."<br/>";
$location2 = "voter/upload/aadharphoto/";
move_uploaded_file($path2, $location2 . $filename2);

$filename3 = $_FILES['voteridup']['name'];
//echo $filename3."<br/>";
$type3 = $_FILES['voteridup']['type'];
//echo $type3."<br/>";
$size3 = $_FILES['voteridup']['size'];
//echo $size3."<br/>";
$path3 = $_FILES['voteridup']['tmp_name'];
//echo $path3."<br/>";
$location3 = "voter/upload/voteridphoto/";
move_uploaded_file($path3, $location3 . $filename3);
include("connect.php");
$query = "insert into tbl_voter(name,fathername,mothername,gender,dob,email,password,address,mobile,pincode,aadhar,voteridno,photo,aadharphoto,voteridphoto,time) values ('$name','$fname','$mname','$gender','$dob','$email','$password','$address','$mobile','$pin','$aadhar','$voterid','$filename1','$filename2','$filename3',now())";
mysql_query($query);
// //****************************API CODE********************
// function PostRequest($url, $referer, $_data) {     // convert variables array to string: 
//     $data = array();    
// 	while(list($n,$v) = each($_data)){         $data[] = "$n=$v";     }      
// 	$data = implode('&', $data);     // format --> test1=a&test2=b etc.   
// 	// parse the given URL    
// 	$url = parse_url($url);    
// 	if ($url['scheme'] != 'http') {       
// 	die('Only HTTP request are supported !');    
// 	}   
// 	// extract host and path:   
// 	$host = $url['host'];   
// 	$path = $url['path'];   
// 	// open a socket connection on port 80    
// 	$fp = fsockopen($host, 80);
// 	// send the request headers:   
// 	fputs($fp, "POST $path HTTP/1.1\r\n");  
// 	fputs($fp, "Host: $host\r\n");   
// 	fputs($fp, "Referer: $referer\r\n");   
// 	fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");  
// 	fputs($fp, "Content-length: ". strlen($data) ."\r\n");   
// 	fputs($fp, "Connection: close\r\n\r\n");   
// 	fputs($fp, $data);     $result = '';    
// 	while(!feof($fp)) {       
// 	// receive the results of the request    
//     $result .= fgets($fp, 128);   
// 	}     // close the socket connection:   
// 	fclose($fp);   
// 	// split the result header from the content   
// 	$result = explode("\r\n\r\n", $result, 2);  
// 	$header = isset($result[0]) ? $result[0] : '';  
// 	$content = isset($result[1]) ? $result[1] : '';  
// 	// return as array:    
// 	return array($header, $content); 
// 	}
// $message="$name ,Your login password is $password1 for Online Voting System.Regards www.voteon.com";
// $data = array(
//  'user' => "rohitsonu",
//  'password' => "326973",
//  'msisdn' => "91".$mobile,
//  'sid' => "WEBSMS",
//  'msg' =>$message,
//  'fl' =>"0"
// );

// list($header, $content) = PostRequest(
// "http://www.smslane.com//vendorsms/pushsms.aspx",
// "http://localhost:70/SI/contact.php?m=1",
// $data);

// //****************************API CODE********************
header("location:..../login.php?msg=1");