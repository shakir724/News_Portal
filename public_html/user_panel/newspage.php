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
                <a class="nav-link" href="index.html">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="postnews.html">Post News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.html">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wallet.html">Wallet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kyc.html">Kyc</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="mynews.html">My News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chatpanel.html">Chat Panel</a>
            </li>

        </ul>
    </div>

    <?php
    include 'db.php';
    $postid = $_GET['msg'];
     //echo $postid;
    $posts = mysqli_query($con, "SELECT * FROM posts where post_id = '$postid' ");
    while ($row = mysqli_fetch_array($posts)) {
        ?>
        <h6 class="panel-title">News</h6>

        <div class="news-section">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['description']; ?></p>

        </div>
        <?php } ?>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>
