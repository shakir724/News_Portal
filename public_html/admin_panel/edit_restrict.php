<?php
  include 'db.php';
  $word_id = $_POST['word_id'];
  //echo $word_id;
  $word = $_POST['word'];
  //echo $word;
  $sql = "UPDATE restricted_words SET word='$word' WHERE word_id='$word_id' ";
  if ($con->query($sql) === TRUE){
  	echo "Record Updated";
    header('location:restricted.php');
  } else {
  	echo "Error updating record: ";
  	$con->error;
  }
 $con->close(); 

?>