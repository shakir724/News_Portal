<?php
include 'db.php';
$categoryid  = $_POST['category'];
//echo $categoryid;
$subcat  = $_POST['sub-category'];
//echo $subcat;
$qy = "insert into sub_category(subcat, cat_id) values ('$subcat', '$categoryid' ) ";
mysqli_query($con, $qy);
header('location:sub-category.php');
?>