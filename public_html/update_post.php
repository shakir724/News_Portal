<?php
include 'db.php';
if(isset($_POST['update_btn']))
{
    $post_id=$_POST['update_id'];
    $title=$_POST['news_title'];
    $description=$_POST['description'];
      $query="update posts set title='$title', description='$description', flag='0' where post_id='$post_id'";
    $query_run=mysqli_query($con,$query);
 

    if($query_run){
        echo'<script> alert("Post Updated");</script>';
        header("location:mynews.php");
    }else{
        echo'<script> alert("Post Not Updated");</script>';
        
    }
   

}


?>