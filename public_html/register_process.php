<?php
include 'db.php';
session_start();
$mobile = $_POST['mobile'];
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$district = $_POST['district'];
$password = $_POST['password'];
//$paid = $_POST['paid'];
$ms = $_GET['ms'];
$referral = $_POST['referral'];

// Referral
function randomPassword() {
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }

  $ref = randomPassword();
  echo $ref;
  echo $paid;

  $ema = "select * from register where email_id = '$email'";
  $resulte = mysqli_query($con, $ema);
  $nume = mysqli_num_rows($resulte);

  if($nume == 1){
    header('location:register.php?msg=email');
    exit();
  }

  $mob = "select * from register where mobile = '$mobile'";
  $resultm = mysqli_query($con, $mob);
  $numm = mysqli_num_rows($resultm);

  if($numm == 1){
    header('location:register.php?msg=mobile');
    exit();
  }

//echo $mobile, $first, $middle, $last, $email, $password, $address, $state, $city, $district;
  $qy = " INSERT INTO register(first_name, middle_name, last_name, email_id, password, address, mobile, referral_used, referral, state_id, city_id, district_id) VALUES ( '$first', '$middle', '$last', '$email', '$password', '$address', '$mobile', '$referral', '$ref', '$state', '$city', '$district') ";
  $ins = mysqli_query($con, $qy);

  if ($ins){
    header('location:reg_process.php?mob='.$mobile.'&pass='.$password);
  } else {
    echo "Problem";
  }
/*$q = "select * from register where mobile = '$mobile' and password = '$password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num == 1){
	$_SESSION['loggedin'] = true;
	$_SESSION['register_id'] = $row['register_id'];

    if ($paid == "1"){
       if ($ms == "index"){
          header('location:pay.php?ms=index');
      } else {
          header('location:pay.php');
      }
  } else {
    if ($ms == "index"){
          header('location:category.php?ms=index');
      } else {
          header('location:category.php');
      }
  }  
} else {
    echo "Erorrororor";
  }*/
  ?>