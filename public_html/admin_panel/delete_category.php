<?php
include 'db.php';
$id = $_GET['msg'];
//echo $id;
$sql = "DELETE FROM category WHERE cat_id = '$id'";
mysqli_query($con, $sql);
$sql2 = "DELETE FROM sub_category WHERE cat_id = '$id'";
mysqli_query($con, $sql2);
header('location:category.php');

?>