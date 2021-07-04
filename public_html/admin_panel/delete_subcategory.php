<?php
include 'db.php';
$id = $_GET['msg'];
//echo $id;
$sql = "DELETE FROM sub_category WHERE sub_id = '$id'";
mysqli_query($con, $sql);
header('location:sub-category.php');

?>