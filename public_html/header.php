
<link rel="stylesheet" href="stylen.css">

<nav class="navbar navbar1">
        <div class="navbar-left">
            <button class="nav-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>


            <a href="#">
                <h3>News Portal</h3>
            </a>
        </div>

        <?php 
   include 'db.php';
   session_start();
    $result = mysqli_query($con, "SELECT * FROM follow f,posts p WHERE f.follower_id='".$_SESSION['register_id']."' And f.user_id=p.user_id And p.flag=1" );
            $unread_count=mysqli_num_rows($result);
   $result = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
    while ($row = mysqli_fetch_array($result)) {
            $paid = $row['paid'];
    }
    if ($paid == "1")
    {
       // echo "paid user";
 //   } else {
   //     header('location:pay1.php');
     //   exit();
    
?>
        <div class="navbar-right">
            <button><i class="fas fa-home fa-lg nav-i1"></i></button>
            <button onclick="location.href='notification.php'"><i class="far fa-bell fa-lg nav-i1"></i>
           
        </div>
        <?php
    } else {
        ?>
        <div class="navbar-right">
                <button><i class="fas fa-home fa-lg nav-i1"></i></button>
                <button onclick="location.href='notification.php'"><i class="far fa-bell fa-lg nav-i1"></i><sup  class="bell-i"><?php echo $unread_count; ?></sup></button>

            </div>

            <?php
        }
        ?>


    </nav>

    <div class="collapse navbar-collapse nav-dropdown" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="postnews.php">Post News</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="mynews.php">My News</a>
            </li>
            
        </ul>
    </div>
    <script>
    $(document).ready(function(){
        $('#notification').click(function(){
            
            jQuery.ajax({
                url:'update_status_notify.php',
                success:function(){
                    $('#notification').fadeToggle('fast','linear');
                    $('#notification_counter').fadeOut('slow');
                }
            })
            return false;
        });
    });
    
    </script>