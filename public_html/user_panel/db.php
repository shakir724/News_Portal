<?php
$servername = "server52";
$database = "vapynews_news";
$username = "vapynews_user";
$password = "ZA8EbftRARKMy74#cT3*vuo23";

// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
else{

echo 'Connected successfully';
}
//mysqli_close($con);

?>