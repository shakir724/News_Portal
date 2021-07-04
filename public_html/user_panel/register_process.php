<?php
include 'db.php';
$mobile = $_POST['mobile'];
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$district = $_POST['district'];
$password = $_POST['password'];

//echo $mobile, $first, $middle, $last, $email, $password, $address, $state, $city, $district;
$qy = " INSERT INTO `register`(`first_name`, `middle_name`, `last_name`, `email_id`, `password`, `address`, `mobile`, `state_id`, `city_id`, `district_id`) VALUES ('$first', '$middle', '$last', '$email', '$password', '$address', '$mobile', '$state', '$city', '$district') ";
mysqli_query($con, $qy);
header('location:index.php');  
?>