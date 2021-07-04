<?php
include 'db.php';
if(isset($_POST['delete_btn']))
{
    $post_id=$_POST['delete_id'];
      $query="delete from posts where post_id='$post_id'";
    $query_run=mysqli_query($con,$query);
 

    if($query_run){
        echo'<script> alert("Post deleted");</script>';
        header("location:mynews.php");
    }else{
        echo'<script> alert("Post Not deleted");</script>';
        
    }
   

}


?>