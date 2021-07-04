<?php 
include 'db.php';
session_start();
$regid =  $_SESSION['register_id'];
  //if(!empty($_POST['checklist'])){
  	//foreach($_POST['checklist'] as $selected){
  		//echo $selected."</br>";
  	    //$arr = implode(',', $selected);

  //	}
 // }
if (isset($_POST['checklist'])) {
 $t = implode(',', $_POST['checklist']);
}
echo $t;

 $sql = "UPDATE register SET cat='$t' WHERE register_id='$regid' ";
  if ($con->query($sql) === TRUE){
    echo "Record Updated";
    header('location:home.php');
  } else {
    echo "Error updating record: ";
    $con->error;
  }
 $con->close();

?>