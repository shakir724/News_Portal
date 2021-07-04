<?php
include 'db.php';
  //$res = "omkar";
  //if(isset($_POST['res'])){
  	//$res = $_POST['res'];
  //}
$res = $_POST['res'];
  //echo $res;
$qy = "insert into restricted_words(word) values ('$res' ) ";
mysqli_query($con, $qy);
header('location:restricted.php');

?>