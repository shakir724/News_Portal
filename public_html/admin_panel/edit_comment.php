<?php
  include 'db.php';
  $comid = $_POST['comid'];
  echo $comid;
  $comment = $_POST['comment'];
  echo $comment;
  $sql = "UPDATE comments SET comment='$comment' WHERE com_id='$comid' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:comment.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>