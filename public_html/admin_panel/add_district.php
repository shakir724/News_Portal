<?php
include 'db.php';
$stateid = $_POST['state'];
  //echo $state;
  //echo $state;
//$cityid = $_POST['city'];
  //echo $city;
$district = $_POST['district'];
//echo $district;
$qy = "insert into districts(district, state_id) values ('$district', '$stateid' ) ";
mysqli_query($con, $qy);
header('location:district.php');
?>