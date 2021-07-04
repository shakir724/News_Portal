<?php
include 'db.php';
session_start();
$mobile = $_GET['mob'];
$password = $_GET['pass'];
$paid = $_GET['paid'];
echo $mobile;
echo $password;

$q = "select * from register where mobile = '$mobile' and password = '$password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num == 1){
	$_SESSION['loggedin'] = true;
	$_SESSION['register_id'] = $row['register_id'];

	
		if ($ms == "index"){
			header('location:category.php?ms=index');
		} else {
			header('location:category.php');
		}
	  
} else {
	echo "Erorrororor";
}
?>