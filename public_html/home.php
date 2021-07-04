<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title></title>
</head>

<body>


    <header>
        <?php 
        include 'header.php';
        ?>    
     <!--   <nav class="navbar navbar1">
            <div class="navbar-left">
                <button class="nav-btn"><i class="fas fa-bars"></i></button>
                <a href="#">
                    <h3>LOGO</h3>
                </a>
            </div>
            <div class="navbar-right">
                <button><a href="index.php"><i class="fas fa-home fa-lg nav-i1"></i></a></button>
                <button><i class="far fa-bell fa-lg nav-i1"></i></button>

            </div>
        </nav>  -->

        <div class="head-banner">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="3.jpg" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <p class="header-p"></p>
            </div>
        </div>

    </header>

    <section id="card-container">
        <!--        <div class="container-fluid">-->
            <?php 
            

            //if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true){
              //      header('location:login.php?msg=login&ms=index');
            //}   

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        //echo "Welcome " . $_SESSION['username'];
                ?><a href="logout.php?msg=index">Logout</a><?php
                $regid =  $_SESSION['register_id'];
               /* $posto = mysqli_query($con, "SELECT * FROM register WHERE register_id='$regid' ");
                while ($row = mysqli_fetch_array($posto)) {
                    $cat = $row['cat'];
                }
                $arrayc = explode(",", $cat);
                foreach ($arrayc as $item) {
                    echo $item;
                    $postp = mysqli_query($con, "SELECT * FROM posts WHERE flag='1' AND cat_id = '$item' ");
                    while ($row = mysqli_fetch_array($postp)) {
                       
                    }*/
                } else {
                    header('location:index.php?msg=login&ms=index');
                }

                $result = mysqli_query($con, "SELECT * FROM posts WHERE flag = '1' ORDER BY date DESC ");
                while ($row = mysqli_fetch_array($result)) { 
                    $postid = $row['post_id'];
                    $userid = $row['user_id'];
                    $title = $row['title'];
                    $desc = $row['description'];
                    $tags = $row['keywords'];
                    $date = $row['date'];
                    $img_name = $row['filename'];
                    $folder = 'http://localhost/news_portal/public_html/image/'.$row['filename'];
        //echo $date;

                    $n = mysqli_query($con, "SELECT * FROM register WHERE register_id = '$userid' ");
                    while ($ro = mysqli_fetch_array($n)) {
                        $name = $ro['first_name'];
                        ?>
                        <div class="card">
                            <div class="navbar">
                                <div class="navbar-left">
                                    <img src="1.jpg" class="profile-img">
                                    <div class="profile-texts">
                                        <h6><?php echo $name; ?></h6>
                                        <p class="profile-p1">Field Reporter,ABC</p>
                                        <p class="profile-p2 text-muted">Posted on <?php echo $date; ?></p>
                                    </div>

                                </div>
                                <div class="navbar-right">
                                   <?php
                                   $sqql = "SELECT * FROM follow WHERE user_id = '$userid' and follower_id = '".$_SESSION['register_id']."'";
                                   $result9 = mysqli_query($con, $sqql);
                                   $num6 = mysqli_num_rows($result9);
                            //echo $num6. "follow";
                                   if($num6 == 1){
                                    ?>
                                <!--<form action="follow1.php?msg=<?php //echo $postid; ?>" method="post">
                                    <button type="submit" class="profile-btn">FOLLOWING</button>
                                </form> -->
                                <a href="follow.php?msg=<?php echo $postid; ?>&ms=index" class="profile-btn">FOLLOWING</a>
                                <?php
                            }else{  ?>
                               <!-- <form action="follow1.php?msg=<?php //echo $postid; ?>" method="post">
                                    <button type="submit" class="profile-btn">Follow</button>                   
                                </form>-->
                                <a href="follow.php?msg=<?php echo $postid; ?>&ms=index" class="profile-btn">FOLLOW</a>
                                <?php
                            }
                            ?>

                            <!-- <button class="profile-btn">FOLLOW</button>  -->
                        </div>
                    </div>

                    <div class="tags-container">
                        <p class="tags-p1">Tags</p>
                        <?php
                        $array = explode(",", $tags);
                        foreach ($array as $item) {
                            ?>
                            <a href="search.php" style="color: inherit; text-decoration: none;"><p class="tags-p2"><?php echo $item; } ?></p></a>
               <!-- <p class="tags-p2">Politics</p>
                <p class="tags-p3">Today</p>
                <p class="tags-p4">International</p>  -->
            </div>

            <div class="card-title">
                <p><?php echo $title; ?></p>
            </div>

            

            <div class="main">
                <div class="main-img-container">
                    <img src="<?php echo $folder; ?>"> 
                </div>
                <p class="main-p" style="overflow: hidden; width: 350px; white-space: nowrap;text-overflow: ellipsis;"><?php echo $desc; ?><br>
                    <button class="main-p-btn"><a href="news_read.php?msg=<?php echo $postid; ?>">Continue reading ...</a></button>
                </p>

                <div class="row text-center">
                    <div class="col main-col">
                        <?php
                        $lik = "SELECT * FROM likes WHERE user_id = '".$_SESSION['register_id']."' AND post_id = '$postid'";
                        $resultli = mysqli_query($con, $lik);
                        $numlik1 = mysqli_num_rows($resultli);
                            //$numlik1 = "1";
                            //echo $numlik1;
                            //echo $numlik1;
                            //echo $numlik1;
                        $likno = "SELECT * FROM likes WHERE post_id='$postid'";
                        $resultlikno = mysqli_query($con, $likno);
                        $numlik = mysqli_num_rows($resultlikno);
                            //echo $numlik." likes";
                        if($numlik1 == 1){
                            ?>
                            <form action="like.php?msg=<?php echo $postid; ?>&ms=index" method="post">
                                <button class="main-comment-btn"><i class="fas fa-heart main-i1"></i><?php echo $numlik; ?></button>
                            </form>
                            <?php
                        } else { ?>
                            <form action="like.php?msg=<?php echo $postid; ?>&ms=index" method="post">
                             <button type="submit" class="main-comment-btn"><i class="far fa-heart fa-lg nav-i1"></i><?php echo $numlik;?></button>
                         </form>
                     <?php } ?>
                     <!-- <button class="main-comment-btn"><i class="fas fa-heart main-i1"></i> 1.2k</button>  -->
                 </div>
                 <div class="col main-col">
                    <button class="main-comment-btn"><i class="far fa-comment"></i> Comment</button>
                </div>
                <div class="col">
                    <button class="main-comment-btn"><i class="fas fa-share-alt"></i> Share</button>
                </div>
            </div>

            <!--Comment section-->
            <div class="comment-section">
                <div class="input-sec">
                    <img src="perfil.jpg" class="comment-img">
                    <form action="comment.php?msg=<?php echo $postid; ?>&ms=index" method="post">
                        <input type="text" name="comment" class="comment-input" placeholder="Share your thoughts">
                        <button type="submit" class="main-comment-btn"><i class="far fa-comment"></i> Comment</button>
                    </form>
                </div>

                <?php 
                $comment = mysqli_query($con, "SELECT * FROM comments WHERE post_id = '$postid' AND flag='1' ");
                while ($row2 = mysqli_fetch_array($comment)) {
                    $userid = $row2['user_id'];
                    $comm = $row2['comment'];
             //echo $userid;
             //echo $comm;
                    $cname = mysqli_query($con, "SELECT * FROM register WHERE register_id = '$userid' ");
                    while ($row1 = mysqli_fetch_array($cname)) {
                        $name = $row1['first_name'];
                        ?>
                        <div class="comments">
                            <img src="perfil.jpg" class="comment-img">
                            <div class="single-comment">
                                <h6 class="comments-h6"><?php echo $name; ?><span class="comments-span">20 mins ago</span></h6>
                                <p class="comments-p"><?php echo $comm; ?></p>
                                <button class="comments-btn1">Reply</button>
                                <button class="comments-btn2">View replies</button>
                            </div>
                        </div>

                           <!-- <div class="comments">
                                <img src="perfil.jpg" class="comment-img">
                                <div class="single-comment">
                                    <h6 class="comments-h6">Name <span class="comments-span">20 mins ago</span></h6>
                                    <p class="comments-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    <button class="comments-btn1">Reply</button>
                                    <button class="comments-btn2">View replies</button>
                                </div>
                                </div>  --><?php }} ?>
                            </div>


                        </div>

                        

                    </div>

      <!--  <div class="card">
            <div class="navbar">
                <div class="navbar-left">
                    <img src="1.jpg" class="profile-img">
                    <div class="profile-texts">
                        <h6>Name</h6>
                        <p class="profile-p1">Field Reporter,ABC</p>
                        <p class="profile-p2 text-muted">Posted on 30/03/2019</p>
                    </div>

                </div>
                <div class="navbar-right">
                    <button class="profile-btn">FOLLOW</button>
                </div>
            </div>

            <div class="tags-container">
                <p class="tags-p1">Tags</p>
                <p class="tags-p2">Politics</p>
                <p class="tags-p3">Today</p>
                <p class="tags-p4">International</p>
            </div>

            <div class="card-title">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
            </div>

            <div class="ad-container">
                <div class="row">
                    <div class="col ad-col">
                        <div class="ad-shape-1"></div>
                        <div class="ad-shape-2"></div>
                        <div class="ad-shape-3"></div>

                        <p class="ad">AD</p>

                        <i class="fas fa-times"></i>
                    </div>

                </div>
                <div class="row">
                    <div class="col ad-col">
                        <h6 class="ad-h6">logoipsum</h6>
                        <p class="ad-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <div class="main">
                <div class="main-img-container">
                    <img src="https://www.incimages.com/uploaded_files/image/1920x1080/GettyImages-1155031328_448357.jpg">
                </div>
                <p class="main-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                    <button class="main-p-btn">Continue reading ...</button>
                </p>

                <div class="row text-center">
                    <div class="col main-col">
                        <button class="main-comment-btn"><i class="fas fa-heart main-i1"></i> 1.2k</button>
                    </div>
                    <div class="col main-col">
                        <button class="main-comment-btn"><i class="far fa-comment"></i> Comment</button>
                    </div>
                    <div class="col">
                        <button class="main-comment-btn"><i class="fas fa-share-alt"></i> Share</button>
                    </div>
                </div>

                Comment section
                <div class="comment-section">
                    <div class="input-sec">
                        <img src="perfil.jpg" class="comment-img">
                        <input type="text" class="comment-input" placeholder="Share your thoughts">
                    </div>

                    <div class="comments">
                        <img src="perfil.jpg" class="comment-img">
                        <div class="single-comment">
                            <h6 class="comments-h6">Name <span class="comments-span">20 mins ago</span></h6>
                            <p class="comments-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <button class="comments-btn1">Reply</button>
                            <button class="comments-btn2">View replies</button>
                        </div>
                    </div>

                    <div class="comments">
                        <img src="perfil.jpg" class="comment-img">
                        <div class="single-comment">
                            <h6 class="comments-h6">Name <span class="comments-span">20 mins ago</span></h6>
                            <p class="comments-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <button class="comments-btn1">Reply</button>
                            <button class="comments-btn2">View replies</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ad-container">
                <div class="row">
                    <div class="col ad-col">
                        <div class="ad-shape-1"></div>
                        <div class="ad-shape-2"></div>
                        <div class="ad-shape-3"></div>

                        <p class="ad">AD</p>

                        <i class="fas fa-times"></i>
                    </div>

                </div>
                <div class="row">
                    <div class="col ad-col">
                        <h6 class="ad-h6">logoipsum</h6>
                        <p class="ad-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <div class="ad-container2">
                <div class="row text-center">
                    <div class="col ad2-row1">
                        <img src="https://cdn.logo.com/hotlink-ok/logo-social-sq.png" class="ad2-img">
                    </div>
                    <div class="col-7">
                        <p class="ad2-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <button class="ad2-btn">Download <i class="fab fa-apple"></i> <img src="https://www.pinclipart.com/picdir/middle/202-2024262_app-store-google-play-logo-vector-vector-and.png" class="ad2-btn-img"></button>
                    </div>
                </div>
            </div>

        </div>  -->
        <!--        </div>-->
    <?php }} ?>
</section>




<?php
if (isset($_GET["ms"]) && $_GET["ms"] == 'restricted')
{
    ?> <script> alert("Restricted Words found in Comment"); </script>
    <?php
}

if (isset($_GET["msc"]) && $_GET["msc"] == 'paidc')
{
    ?> <script> alert("Only Paid User can Comment"); </script>
    <?php
}

if (isset($_GET["msc"]) && $_GET["msc"] == 'paidl')
{
    ?> <script> alert("Only Paid User can Like"); </script>
    <?php
}

?>





<script type="text/javascript">
    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 3) {
            counter = 1;
        }
    }, 5000);

</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>