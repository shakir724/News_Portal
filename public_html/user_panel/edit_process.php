<?php
include 'db.php';
session_start();
$mobile = $_POST['mobile'];
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$email = $_POST['email'];
$state = $_POST['state'];
$city = $_POST['city'];
$district = $_POST['district'];
$regid = $_SESSION['register_id'];
//echo $first, $middle, $last, $mobile, $email, $state, $city, $district, $_SESSION['register_id'];
$sql = "UPDATE register SET first_name = '$first' ,
                            middle_name = '$middle', 
                            last_name = '$last', 
                            email_id = '$email', 
                            mobile = '$mobile', 
                            state_id = '$state', 
                            city_id ='$city', 
                            district_id = '$district'  WHERE register_id = '$regid' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:postnews.php');
  } else {
  	echo "Error updating record: ";
  	$con->error();
  }
?>