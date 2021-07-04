<?php 
include 'db.php';

session_start();

$postid = $_GET['msg'];
echo $postid;
$ms = $_GET['ms'];
//echo $ms;
$result = mysqli_query($con, "SELECT * FROM posts WHERE post_id = '$postid' ");
while ($row = mysqli_fetch_array($result)) { 
	$userid = $row['user_id'];
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		//$postid = $_SESSION['postid'];

	$sql1 = "SELECT * FROM `follow` WHERE user_id = '$userid' and follower_id = '".$_SESSION['register_id']."'";
	$result1 = mysqli_query($con, $sql1);
	$num = mysqli_num_rows($result1);
	echo $num;

	if($num == 1){
		$de = "DELETE FROM `follow` WHERE user_id = '$userid' and follower_id = '".$_SESSION['register_id']."'";
			//$result2 = mysqli_query($con, $qy1);
		if (mysqli_query($con, $de)){
			echo "delet";
			if ($ms == "index"){
				header('location:home.php');
			} else {
				header('location:news_read.php?msg='.$postid);
			}
		} else {
			echo "Error in deleting";
			$con->error;
		}

			//header('location:index.php?msg= echo $postid;');

	}else{
			//$id = $_GET['msg'];
		$qy = "insert into follow(user_id, follower_id) values ( '$userid' , '".$_SESSION['register_id']."' ) ";
		mysqli_query($con, $qy);
			//echo "inser";
		if ($ms == "index"){
			header('location:home.php');
		} else {
			header('location:news_read.php?msg='.$postid);
		}
	}
}else{  
	if ($ms == "index"){
		header('location:index.php?msg=login&ms=index');
	} else {
		header('location:index.php?msg=login');
	}
}

?>