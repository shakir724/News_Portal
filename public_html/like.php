																																		
<?php
include 'db.php';
session_start();
$postid = $_GET['msg'];
echo $postid;
$ms = $_GET['ms'];
echo $ms;

$resultp = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
	while ($rowp = mysqli_fetch_array($resultp)) {
		$paid = $rowp['paid'];
	}
	if ($paid == "0")
	{
		if($ms == "index"){
			header('location:home.php?msc=paidl');
			exit(); 	
		} else {
			header('location:news_read.php?msg='.$postid.'&msc=paidl');
			exit();
		}
	}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	$lik = "SELECT * FROM likes WHERE user_id = '".$_SESSION['register_id']."' AND post_id = '$postid' ";
	$resultli = mysqli_query($con, $lik);
	$numlik1 = mysqli_num_rows($resultli);
	echo $numlik1;

	if($numlik1 == 1){
		$de = "DELETE FROM `likes` WHERE user_id = '".$_SESSION['register_id']."' and post_id = '$postid'  ";
//$result2 = mysqli_query($con, $qy1);
//mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
		if (mysqli_query($con, $de)){
			echo "delet";
			if ($ms == "index"){
				header('location:home.php');
			}else{
				header('location:news_read.php?msg='.$postid);
			}
		} else {
			echo "Error in deleting";
			$con->error;
		}
	} else{
		$qy = "insert into likes(user_id, post_id) values ( '".$_SESSION['register_id']."' , '$postid' ) ";
		mysqli_query($con, $qy);
//echo "inser";
		if ($ms == "index"){
			header('location:home.php');
		}else{
			header('location:news_read.php?msg='.$postid);
		}
	}
} else {  
	if ($ms == "index"){
		header('location:index.php?msg=login&ms=index');
	}else{
		header('location:index.php?msg=login');
	}
}
?>
