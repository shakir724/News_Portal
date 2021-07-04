<?php
  include 'db.php';
  $state_id = $_POST['state_id'];
  //echo $state_id;
  $state = $_POST['state'];
  //echo $state;
  $sql = "UPDATE states SET state='$state' WHERE state_id='$state_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:state.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close();

?>