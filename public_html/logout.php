<?php
  session_start();
  session_destroy();
  $postid = $_GET['msg'];
  if ($postid === "index") {
  	header('location:index.php'); 
  }else {
  header('location:index.php');
}
?>