<?php
error_reporting(0);
include 'db.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	?><a href="logout.php?msg=index">Logout</a><?php
    $result = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
	while ($row = mysqli_fetch_array($result)) {
            $paid = $row['paid'];
	}
	if ($paid == "1")
	{
		echo "paid user";
	} else {
		header('location:pay.php');
		exit();
	}
} else {
	header('location:login.php?msg=login&ms=index');
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
}
$url = $_POST['url'];
echo $url;
$keyword = $_POST['keyword'];
echo $keyword;
$cat = $_POST['cat'];
$subcat = $_POST['subcat'];
echo $cat, $subcat;

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = 'C:\xampp\htdocs\news2\image\image'.$filename;

//$user_id = '".$_SESSION['register_id'];
$qy = "insert into posts(title, description, filename, url, keywords, date, cat_id, sub_id, state_id, city_id, district_id, user_id, flag) values ('$title', '$desc', '$filename', '$url', '$keyword', curdate(),'$cat', '$subcat', '$state', '$city', '$district', '".$_SESSION['register_id']."' ,'0' ) ";
mysqli_query($con, $qy);

if (move_uploaded_file($tempname, $folder)) {
	echo "Image uploaded successfully";
}else {
	echo "Failed to upload image";
}

header('location:postnews.php');
?>