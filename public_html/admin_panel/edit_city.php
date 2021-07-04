<?php
  include 'db.php';
  $city_id = $_POST['city_id'];
  //echo $city_id;
  $city = $_POST['city'];
  //echo $city;
  $sql = "UPDATE cities SET city='$city' WHERE city_id='$city_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:city.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>