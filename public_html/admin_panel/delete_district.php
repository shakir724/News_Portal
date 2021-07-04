<?php
include 'db.php';
$id = $_GET['msg'];
echo $id;
$sql = "DELETE FROM districts WHERE district_id = '$id'";
mysqli_query($con, $sql);
header('location:district.php');

?>