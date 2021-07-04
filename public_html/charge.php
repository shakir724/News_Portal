<?php
include 'db.php';
session_start();
$regid =  $_SESSION['register_id'];

if ($_POST) {
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	
	echo "Razorpay success ID: ". $razorpay_payment_id;
}

$sql = "UPDATE register SET paid='1' WHERE register_id='$regid' ";
if ($con->query($sql) === TRUE){
			//echo "Record Updated";
			//header('location:index.php');
} else {
	echo "Error updating record: ";
	$con->error;
}
$qy = " INSERT INTO payment(user_id, transaction_id, flag) VALUES ( '$regid', '$razorpay_payment_id', '1') ";
$ins = mysqli_query($con, $qy);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="home.php">Home</a>
</body>
</html>
