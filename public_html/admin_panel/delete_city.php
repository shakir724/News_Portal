<?php
include 'db.php';
$id = $_GET['msg'];
echo $id;
$sql = "DELETE FROM cities WHERE city_id = '$id'";
mysqli_query($con, $sql);
$sql2 = "DELETE FROM districts WHERE city_id = '$id'";
mysqli_query($con, $sql2);
header('location:city.php');

?>