<?php
  include 'db.php';
  $sub_id = $_POST['sub_id'];
  echo $sub_id;
  $subcat = $_POST['subcat'];
  echo $subcat;
  $sql = "UPDATE sub_category SET subcat='$subcat' WHERE sub_id='$sub_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:sub-category.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>