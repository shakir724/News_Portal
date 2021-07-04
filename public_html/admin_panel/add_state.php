<?php
include 'db.php';
$state = $_POST['state'];
  //echo $state;
$qy = "insert into states(state) values ('$state' ) ";
mysqli_query($con, $qy);
header('location:state.php');

?>