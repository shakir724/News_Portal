<?php
error_reporting(0);
include 'db.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	?><a href="logout.php?msg=index">Logout</a><?php
	$result = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
	
}

$title = $_POST['title'];
echo $title;
$desc = $_POST['desc'];
echo $desc;
  //$myfile = fopen('$file', "r") or die("Unable to open file");
  //fread($myfile, filesize('$file'));
  //fclose($myfile);
$location = $_POST['location'];
echo $location;
if ($location == "manual") {
	$state = $_POST['state'];
	echo $state;
	$city = $_POST['city'];
	echo $city;
	$district = $_POST['district'];
	echo $district;
	$state2 = $_POST['state2'];
	$state3 = $_POST['state3'];
	$city2 = $_POST['city2'];
	$city3 = $_POST['city3'];
	$district2 = $_POST['district2'];
	$district3 = $_POST['district3'];
	
	if ($state2 == "Select State") {
		$arrs = array($state);
		$arrd = array($district);
		$arrc =array($city);	
	} elseif ($state3 == "Select State") {
		$arrs = array($state, $state2);
		$arrd = array($district, $district2);
		$arrc =array($city, $city2);	
	} else {
		$arrs = array($state, $state2, $state3);
		$arrd = array($district, $district2, $district3);
		$arrc =array($city, $city2, $city3);
	}
	$staa = implode(",", $arrs);
	$disa = implode(",", $arrd);
	$cita = implode(",", $arrc);
}

if ($location == "Auto"){
    $country=$_POST['countrya'];
    $state = $_POST['statea'];
    $city = $_POST['citya'];
    echo $country;
    echo $state;
    echo $city;
   // $latitude = $_POST['latitude'];
   // $longitude = $_POST['longitude'];
   // $Ip = $_POST['ip'];
    $query1 = "SELECT * FROM states WHERE state = '$state' ";
    $exequery = mysqli_query($con, $query1);
    while($row = mysqli_fetch_assoc($exequery)){
        $staa = $row['state_id'];
        echo $staa;
        $statedb = $row['state'];
        echo $statedb;
    }
    $query2 = " SELECT * FROM cities WHERE city = '$city' ";
    $exequery2 = mysqli_query($con, $query2);
    while($row1 = mysqli_fetch_assoc($exequery2)){
        $cita = $row1['city_id'];
        echo $cita;
        $citydb = $row1['city'];
        $disa = $row1['district_id'];
    }
    
}
//echo $staa, $disa, $cita;
$url = $_POST['url'];
//echo $url;

$k = implode(', ', $_POST['KeyWords']);
//echo $keyword;
//$cat = $_POST['cat'];
$subcat = $_POST['subcat'];
//echo $cat, $subcat;

if (isset($_POST['checklist'])) {
	$t = implode(',', $_POST['checklist']);
}
//echo $t;

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = "image/".$filename;

$demo = $_POST['demo'];
//echo $demo;

//$user_id = '".$_SESSION['register_id'];
$qy = "INSERT INTO posts(title, description, filename, url, keywords, date, cat_id, sub_id, state_id, city_id, district_id, user_id, flag) VALUES ('$title', '$desc', '$filename', '$demo', '$t', curdate(), '$k', '$subcat', '$staa', '$cita', '$disa', '".$_SESSION['register_id']."' ,'0' ) ";
mysqli_query($con, $qy);



if (move_uploaded_file($tempname, $folder)) {
	echo "Image uploaded successfully";
}else {
	echo "Failed to upload image";
}

header('location:postnews.php?msg=posted');  
?>