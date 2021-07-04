<?php
include 'db.php';
$category = $_POST['category'];
//echo $category;
$qy = "insert into category(cat) values ('$category' ) ";
mysqli_query($con, $qy);
header('location:category.php');

?>