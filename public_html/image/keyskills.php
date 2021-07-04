<?php
        session_start();
        include('../config.php');
        $id = $_SESSION['jobseeker'];
        $keyskill = $_POST['keyskill'];
        $pi=implode(', ', $keyskill);
        if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM `tbl_resume_keyskill` WHERE userid = '".$id."'")) == 0){
             $query = "INSERT INTO `tbl_resume_keyskill` (userid, keyskill) VALUES ('$id', '$pi')";
        }else {
            $query = "UPDATE `tbl_resume_keyskill` SET keyskill = '".$pi."' WHERE userid = '".$id."'";
        }
        // echo $query;
        mysqli_query($con,$query);
        echo "<script>alert('keyskill updated !!'); window.location.replace('../resume-update.php');</script>";
        
        

?>