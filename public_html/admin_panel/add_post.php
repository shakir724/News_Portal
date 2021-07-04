<?php
include 'db.php';
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

$qy = "insert into posts(title, description, filename, url, keywords, cat_id, sub_id, state_id, city_id, district_id, user_id, flag) values ('$title', '$desc', '$filename', '$url', '$keyword', '$cat', '$subcat', '$state', '$city', '$district', '0','1' ) ";
mysqli_query($con, $qy);

if (move_uploaded_file($tempname, $folder)) {
	echo "Image uploaded successfully";
}else {
	echo "Failed to upload image";
}

header('location:postNews.php');
?>