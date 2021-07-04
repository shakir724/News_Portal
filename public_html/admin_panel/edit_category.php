<?php
  include 'db.php';
  $cat_id = $_POST['cat_id'];
  //echo $cat_id;
  $cat = $_POST['cat'];
  //echo $cat;
  $sql = "UPDATE category SET cat='$cat' WHERE cat_id='$cat_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:category.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close();

?>