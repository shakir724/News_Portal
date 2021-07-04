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

    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->

    <title></title>
</head>

<body>
    <nav class="navbar navbar1">
        <div class="navbar-left">
            <button class="nav-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>


            <a href="#">
                <h3>LOGO</h3>
            </a>
        </div>
        <div class="navbar-right">
            <button><i class="fas fa-home fa-lg nav-i1"></i></button>
            <button><i class="far fa-bell fa-lg nav-i1"></i></button>

        </div>

    </nav>

    <div class="collapse navbar-collapse nav-dropdown" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="postnews.php">Post News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wallet.php">Wallet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kyc.php">Kyc</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="mynews.php">My News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chatpanel.php">Chat Panel</a>
            </li>

        </ul>
    </div>

    <ul class="nav nav-tabs chat-tabs mynews">
        <li class="nav-item mynews-items">
            <a href="#mynews" class="nav-link mynews-link active" role="tab" data-toggle="tab">My News</a>
        </li>

        <li class="nav-item mynews-items">
            <a href="#likednews" class="nav-link" role="tab" data-toggle="tab">Liked News</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="mynews">

            <div>
                <div class="row news-head">
                    <div class="col">
                        <h6>News Title</h6>
                    </div>
                    <div class="col">
                        <h6>Posted Date</h6>
                    </div>
                    <div class="col">
                        <h6>Status</h6>
                    </div>
                    <div class="col">
                        <h6>Action</h6>
                    </div>
                </div>

                <?php
                include 'db.php';
                session_start();
                $posts = mysqli_query($con, "SELECT * FROM posts where user_id = '".$_SESSION['register_id']."' ");
                while ($row = mysqli_fetch_array($posts)) {
                    $flag = $row['flag'];
                    if($flag == "0"){
                        $status = "Processing";
                    }elseif ($flag == "1") {
                        $status = "Live";
                    }else {
                        $status = "Rejected";
                    }
                    ?>

                    <div class="row mynews-row1">
                        <div class="col">
                            <p><?php echo $row['title']; ?></p>
                        </div>
                        <div class="col">
                            <p>22 Dec 2020</p>
                        </div>
                        <div class="col">
                            <p><?php echo $status; ?></p>
                        </div>
                        <div class="col">
                            <button class="mynews-action-btn1" onclick="location.href='newspage.php?msg=<?php echo $row['post_id']; ?>';">View</button>
                            <button class="mynews-action-btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit i1"></i></button>
                            <button class="mynews-action-btn"><i class="fas fa-trash-alt i2"></i></button>
                        </div>
                    </div>
                    
                 <?php } ?>
                </div>
            
            </div>
            <!--        ------------->
            <div role="tabpanel" class="tab-pane" id="likednews">
                <div class="row news-head">
                    <div class="col">
                        <h6>Title</h6>
                    </div>
                    <div class="col">
                        <h6>Author</h6>
                    </div>
                </div>

                <div class="row mynews-row1">
                    <div class="col">
                        <p>Title1</p>
                    </div>
                    <div class="col">
                        <p>Author1</p>
                    </div>
                </div>

                <div class="row mynews-row1">
                    <div class="col">
                        <p>Title2</p>
                    </div>
                    <div class="col">
                        <p>Author1</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">News Title</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body></html>
