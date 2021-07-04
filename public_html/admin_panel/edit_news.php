<?php
  include 'db.php';
  $post_id = $_POST['post_id'];
  //echo $post_id;
  $title = $_POST['title'];
  //echo $title;
  $desc = $_POST['desc'];
  //echo $desc;
  $sql = "UPDATE posts SET title='$title', description='$desc' WHERE post_id='$post_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:index.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>