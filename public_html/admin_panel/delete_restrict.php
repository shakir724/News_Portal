<?php
include 'db.php';
$id = $_GET['msg'];
echo $id;
$sql = "DELETE FROM restricted_words WHERE word_id = '$id'";
mysqli_query($con, $sql);
header('location:restricted.php');

?>