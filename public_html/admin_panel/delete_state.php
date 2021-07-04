<?php
include 'db.php';
$id = $_GET['msg'];
   //echo $id;
$sql = "DELETE FROM states WHERE state_id = '$id'";
mysqli_query($con, $sql);
$sql1 = "DELETE FROM cities WHERE state_id = '$id'";
mysqli_query($con, $sql1);
$sql2 = "DELETE FROM districts WHERE state_id = '$id'";
mysqli_query($con, $sql2);
header('location:state.php');

?>