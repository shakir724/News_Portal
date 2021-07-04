<?php
include 'db.php';
session_start();
$check = $_POST['check'];
  //echo $check;
$postid = $_SESSION['postid'];
  //echo $postid;
if ($check == "accept") {
	$sql = "UPDATE posts SET flag=1 where post_id = '$postid'";
	if ($con->query($sql) === TRUE) {
		echo "New record created successfully"; 
		header('location:index.php');
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
} else {
    $sql = "UPDATE posts SET flag=2 where post_id = '$postid'";
	if ($con->query($sql) === TRUE) {
		echo "New record created successfully"; 
		header('location:index.php');
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}	
?>




