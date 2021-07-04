<?php
  include 'db.php';
  session_start();
  $otp1 = $_POST['otp'];
  $password = $_POST['password'];
  echo $otp1, $password;
  $otp = $_SESSION['otp'];
  echo $otp;

  if ($otp1 == $otp){
  	$sql = "UPDATE register SET password = '$password' WHERE email_id = '".$_SESSION['email']."' ";
		if ($con->query($sql) === TRUE){
			//echo "Record Updated";
			header('location:index.php?msg=resett');
		} else {
			echo "Error updating record: ";
			$con->error;
		}
  } else {
  	header('location:forgetpassword.php?msg=invalido');
  }

?>