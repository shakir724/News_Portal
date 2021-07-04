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
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">

    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->

    <title>read</title>
</head>

<body>
    <header>
        <?php 
        include 'header.php';

        $postid = $_GET['msg'];
        $_SESSION['postid'] = $postid;
        $result = mysqli_query($con, "SELECT * FROM posts WHERE post_id = '$postid' ");
        while ($row = mysqli_fetch_array($result)) { 
            $userid = $row['user_id'];
            $title = $row['title'];
            $desc = $row['description'];
            $state_id = $row['state_id'];
            $city_id = $row['city_id'];
            $district_id = $row['district_id'];
            $url = $row['url'];
            $tags = $row['keywords'];
            $date = $row['date'];
            $img_name = $row['filename'];
            $folder = 'http://localhost/news_portal/public_html/image/'.$row['filename'];
            ?>
      <!-- <nav class="navbar navbar1">
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
        </nav>-->

        <div class="head-banner">

            <div class="slider">

                <div class="slides">    


                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="<?php echo $folder; ?>" alt="">
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
                <div class="navbar">
                 <div class="navbar-right">
                    <button class="main-comment-btn"><i class="fas fa-arrow-left fa-lg nav-i1"></i></button>
                    
                </div>
            </div>

        </div>
    </div>

</header>

<section id="card-container">
    <?php
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        //echo "Welcome " . $_SESSION['username'];
        ?><a href="logout.php?msg=<?php echo $postid; ?>">Logout</a><?php
    }
    ?>
    <?php 
    
   /* $result = mysqli_query($con, "SELECT * FROM posts WHERE post_id = '$postid' ");
    while ($row = mysqli_fetch_array($result)) { 
        $userid = $row['user_id'];
        $title = $row['title'];
        $desc = $row['description'];
        $tags = $row['keywords'];
        $date = $row['date'];
        $img_name = $row['filename'];
        $folder = 'https://vapynews.com/image/'.$row['filename'];  */

        $res = mysqli_query($con, "SELECT * FROM register WHERE register_id = '$userid' ");
        while ($ro = mysqli_fetch_array($res)) {
            $name = $ro['first_name'];
            ?>
            <div class="container-fluid">
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
                            //$sql2 = "SELECT * FROM `posts` WHERE post_id = '$postid'";
                            //$result = mysqli_query($con, $sql2);
                            //while ($row = $result ->fetch_assoc()) {
                              //  $followid =  $row['user_id'];
                            //}
                            //echo $followerid;
                            $sqql = "SELECT * FROM follow WHERE user_id = '$userid' and follower_id = '".$_SESSION['register_id']."'";
                            $result9 = mysqli_query($con, $sqql);
                            $num6 = mysqli_num_rows($result9);
                            //echo $num6. "follow";
                            if($num6 == 1){
                                ?>
                                <form action="follow.php?msg=<?php echo $postid; ?>" method="post">
                                    <button type="submit" class="profile-btn">FOLLOWING</button>
                                </form>
                                <?php
                            }else{  ?>
                                <form action="follow.php?msg=<?php echo $postid; ?>" method="post">
                                    <button type="submit" class="profile-btn">Follow</button>                   
                                </form>
                                <?php 
                            }
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
                                <form action="like.php?msg=<?php echo $postid; ?>" method="post">
                                    <button class="main-comment-btn"><i class="fas fa-heart main-i1"></i><?php echo $numlik; ?></button>
                                </form>
                                <?php
                            } else { ?>
                                <form action="like.php?msg=<?php echo $postid; ?>" method="post">
                                   <button type="submit" class="main-comment-btn"><i class="far fa-heart fa-lg nav-i1"></i><?php echo $numlik;?></button>
                               </form>
                           <?php } 

                           $view = mysqli_query($con, "SELECT * FROM posts WHERE post_id = '".$_SESSION['postid']."'");
                           $row = mysqli_fetch_array($view);
                           $n = $row['views'];

                           mysqli_query($con, "UPDATE posts SET views=$n+1 WHERE post_id =  '".$_SESSION['postid']."' ");
                           echo $n+1;
                           echo " views";

                           ?>

                           <!-- <button class="main-comment-btn"><i class="far fa-heart fa-lg nav-i1"></i></button>  --> 
                           <br>
                           <!--  <button class="main-comment-btn"><i class="fa fa-share-alt fa-lg nav-i1"></i></button>  -->
                           <p style="margin:5px;"> Share on:</p>
                           <a href="https://www.facebook.com/sharer.php?u=https://vapynews.com/news_read.php?msg=<?php echo $postid;?>&picture=<?php echo $folder; ?>"><i class="fa fa-facebook" style="color:#3b5998;"></i></a>
                           <a href="https://twitter.com/share?url=https://vapynews.com/news_read.php?msg=<?php echo $postid;?>&text=<?php echo $title;?>&hashtags=<?php echo $new_cat; ?>"><i class="fa fa-twitter" style="color:#00ACEE;"></i></a>
                           <a href="https://www.linkedin.com/shareArticle?url=https://vapynews.com/news_read.php?msg=<?php echo $postid;?>&title=<?php echo $title;?>"><i class="fa fa-linkedin" style="color:#0e76a8; "></i></a>
                           <a href="https://api.whatsapp.com/send?text=http://vapynews.com/news_read.php?msg=<?php echo $postid;?>"> <i class="fa fa-whatsapp" style="color:#4FCE5D;"></i></a>
                       </div>

                   </div>

                   <div class="tags-container">
                    <p class="tags-p1">Tags</p>
                    <?php
                    $array = explode(",", $tags);
                    foreach ($array as $item) {
                        ?>
                        <p class="tags-p2"><?php echo $item; } ?></p>
              <!--  <p class="tags-p2">Politics</p>
                <p class="tags-p3">Today</p>
                <p class="tags-p4">International</p> -->
                <!--<p class="tags-p5">Text to speech <i class="far fa-comment" aria-hidden="true"></i></p>-->
            </div>

            <div class="card-title">
                <p><?php echo $title; ?></p>
            </div>
            
            <div>
                <?php
                $query = mysqli_query($con, " SELECT * FROM states WHERE state_id = '$state_id' ");
                while($row3 = mysqli_fetch_assoc($query)){
                    $state = $row3['state'];
                }
                echo $state;
                ?>
                <?php
                $query1 = mysqli_query($con, " SELECT * FROM cities WHERE city_id = '$city_id' ");
                while($row4 = mysqli_fetch_assoc($query1)){
                    $city = $row4['city'];
                }
                echo $city;
                ?>
                <?php
                $query2 = mysqli_query($con, " SELECT * FROM districts WHERE district_id = '$district_id' ");
                while($row5 = mysqli_fetch_assoc($query2)){
                    $district = $row5['district'];
                }
                echo $district;
                ?>
            </div>

            <div class="main">
                <p class="main-p"><?php echo $desc; ?>
            </p>

        </div>
        <!--<iframe width="210" height="160"
        src="<<?php echo $url; ?>">
        </iframe>-->
        <img src="<?php echo $folder; ?>" style="width: 200px; height: 200px;" alt="">

    <div class="center">
        <hr>

    </div>             

    <div class="card-title">
        <h6>Related Articles</h6>
    </div> 

    <div class="row">
        <div class="col">
            <img src="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F1211693320%2F0x0.jpg" class="imgy">
            <div class="navbar">

                <div class="navbar-left">
                    <div class="profile-texts">
                        <h6>Heading</h6>
                    </div>

                </div>
                <div class="navbar-right">
                    <button class="main-comment-btn"><i class="far fa-heart fa-lg "></i></button>
                    <button class="main-comment-btn"><i class="fa fa-share-alt fa-lg"></i></button>
                </div>

            </div>
            <p class="main1">Author Review</p>    
            <p class="main2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
            <div class="navbar-right">

                <button class="profile-btn">FOLLOW</button>
            </div>   
        </div>
        <div class="col">
         <img src="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F1211693320%2F0x0.jpg" class="imgy">
         <div class="navbar">
            <div class="navbar-left">
                <div class="profile-texts">
                    <h6>Heading</h6>
                </div>

            </div>
            <div class="navbar-right">
                <button class="main-comment-btn"><i class="far fa-heart fa-lg nav-i1"></i></button>
                <button class="main-comment-btn"><i class="fa fa-share-alt fa-lg nav-i1"></i></button>
            </div>

        </div>

        <p class="main1">Author Review</p>    
        <p class="main2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="navbar-right">
            <button class="profile-btn">FOLLOW</button>
        </div>
    </div>
</div>


<div class="card-title1">
    <p>Comments</p>
</div>            


<!--Comment section-->
<div class="comment-section">
    <div class="input-sec">
        <img src="perfil.jpg" class="comment-img">
        <form action="comment.php?msg=<?php echo $postid; ?>" method="post">
            <input type="text" name="comment" class="comment-input" placeholder="Share your thoughts">
            <div class="col main-col">
                <button type="submit" class="main-comment-btn"><i class="far fa-comment"></i> Comment</button>
            </div>
        </form>
    </div>
    <?php 
    $comment = mysqli_query($con, "SELECT * FROM comments WHERE post_id = '$postid' AND flag= '1' ");
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
                    <h6 class="comments-h6"><?php echo $name; ?> <span class="comments-span">20 mins ago</span></h6>
                    <p class="comments-p"><?php echo $comm; ?></p>
                    <button class="comments-btn1">Reply</button>
                    <button class="comments-btn2">View replies</button>
                </div>
            </div>

      <!--  <div class="comments">
            <img src="perfil.jpg" class="comment-img">
            <div class="single-comment">
                <h6 class="comments-h6">Name <span class="comments-span">20 mins ago</span></h6>
                <p class="comments-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <button class="comments-btn1">Reply</button>
                <button class="comments-btn2">View replies</button>
            </div>
        </div>  -->
    <?php }} ?>
</div>






















</div>
</div>
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>