<?php
$servername = "localhost:3307";
$database = "vapynews_news";
$username = "root";
$password = "";

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