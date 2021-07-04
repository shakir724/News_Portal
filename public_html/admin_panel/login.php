<?php
$servername = "localhost:3307";
$database = "vapynews_news";
$username = "root";
$password = "";

// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
else{

echo 'Connected successfully';
}
//mysqli_close($con);

?><?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
 // echo $mobile, $password;

$q = "select * from register where mobile = '$user' and password = '$password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num == 1){
 $_SESSION['loggedin'] = true;
 $_SESSION['register_id'] = $row['register_id'];
 header('location:index.php');
}else {
 $qe = "select * from register where email_id = '$user' and password = '$password' ";
 $resulte = mysqli_query($con, $qe);
 $nume = mysqli_num_rows($resulte);
 $rowe = mysqli_fetch_array($resulte);
 if($nume == 1){
 	$_SESSION['loggedin'] = true;
     $_SESSION['register_id'] = $rowe['register_id'];
      header('location:index.php');
 }else {
    header('location:home.php');
 }
}

?>