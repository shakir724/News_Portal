<?php
include 'db.php';
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
 // echo $mobile, $password;

$q = "select * from register where mobile = '$user' and password = '$password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num == 1){
 $_SESSION['register_id'] = $row['register_id'];
 header('location:profile.php');
}else {
 $qe = "select * from register where email_id = '$user' and password = '$password' ";
 $resulte = mysqli_query($con, $qe);
 $nume = mysqli_num_rows($resulte);
 $rowe = mysqli_fetch_array($resulte);
 if($nume == 1){
     $_SESSION['register_id'] = $rowe['register_id'];
      header('location:profile.php');
 }else {
    header('location:index.php');
 }
}

?>