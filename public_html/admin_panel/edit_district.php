<?php
  include 'db.php';
  $district_id = $_POST['district_id'];
  //echo $district_id;
  $district = $_POST['district'];
  //echo $district;
  $sql = "UPDATE districts SET district='$district' WHERE district_id='$district_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:district.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>