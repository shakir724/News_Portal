<?php 
include 'db.php';
session_start();
$subject = "Forget Password";
$to = $_POST['email'];
   //echo $to;
$count = "0";
$result = mysqli_query($con, "SELECT * FROM register");
while ($row = mysqli_fetch_array($result)) { 
    $email = $row['email_id'];
    if ($email == $to){
        //echo "string";
        $count = $count + "1";
    } else {
        //header('location:forgetpassword.php?msg=invalid');
      //  exit();
    }
}
if ($count == "0"){
    header('location:forgetpassword.php?msg=invalid');
    exit();
}

function randomPassword() {
	$alphabet = '1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
    	$n = rand(0, $alphaLength);
    	$pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$ref = randomPassword();
//echo $ref;
$_SESSION['otp'] = $ref;
$_SESSION['email'] = $to;

$body = "Your OTP is ".$ref;
//echo $body;
$sender_email = 'From:_mainaccount@vapynews.com';
$retval =  mail($to, $subject, $body, $sender_email);
if ($retval == true){
	echo "Success";
} else {
	echo "Fail";
}
header('location:forget_process1.php');
?>

