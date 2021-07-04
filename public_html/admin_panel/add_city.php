<?php
include 'db.php';
$stateid  = $_POST['state'];
  //echo $state;
$district  = $_POST['district'];
$city  = $_POST['city'];
  //echo $city;
$qy = "insert into cities(city, state_id, district_id) values ('$city', '$stateid' , '$district') ";
mysqli_query($con, $qy);
header('location:city.php');
?>