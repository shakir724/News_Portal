<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'db.php';
	session_start();
	$com = $_POST['comment'];
	echo $com;
	$postid = $_GET['msg'];
	echo $postid;
	$ms = $_GET['ms'];

	$resultp = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
	while ($rowp = mysqli_fetch_array($resultp)) {
		$paid = $rowp['paid'];
	}
	if ($paid == "0")
	{
		if($ms == "index"){
			header('location:home.php?msc=paidc');
			exit(); 	
		} else {
			header('location:news_read.php?msg='.$postid.'&msc=paidc');
			exit();
		}
	}

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		$array = explode(" ", $com);
		foreach ($array as $item) {
			//echo $item;
			$words = "select * from restricted_words";
			$res = mysqli_query($con, $words);
			while ($row = $res ->fetch_assoc()) {
				if ($item == $row['word']) {
					//echo "restricted_words";
					if ($ms == "index"){
						header('location:home.php?ms=restricted');
						exit();
					} else {
						header('location:news_read.php?msg='.$postid.'&ms=restricted');

						exit();
					}
				}
			}
		}
		//echo "Not found";
		$qy = "insert into comments(user_id, post_id, comment) values ( '".$_SESSION['register_id']."' , '$postid' , '$com' ) ";
		mysqli_query($con, $qy);
		echo "inser";
		if ($ms == "index"){
			header('location:home.php');
		} else {
			header('location:news_read.php?msg='.$postid);
		}
	}else{  
		if ($ms == "index"){
			header('location:index.php?msg=login&ms=index');
		} else {
			header('location:index.php?msg=login');
		}
	}

	?>
</body>
</html>