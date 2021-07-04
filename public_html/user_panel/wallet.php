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
            <li class="nav-item active">
                <a class="nav-link" href="wallet.php">Wallet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kyc.php">Kyc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mynews.php">My News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chatpanel.php">Chat Panel</a>
            </li>

        </ul>
    </div>

    <?php 
    include 'db.php';
    session_start();
    $regid = $_SESSION['register_id']; 
    $result1 = mysqli_query($con, "SELECT * FROM register where register_id = '$regid' ");
    while ($row1 = mysqli_fetch_array($result1)) {
           $referral = $row1['referral'];
    }
    echo $referral;
    $successfulref = "0";
    $pendingref = "0";
    $sql = mysqli_query($con, "SELECT * FROM register");
    while ($row = mysqli_fetch_array($sql)) {
           if ($row['referral_used'] == $referral &&  $row['paid'] == "1") {
                $successfulref = $successfulref + "1";
           }
           if ($row['referral_used'] == $referral &&  $row['paid'] == "0") {
                $pendingref = $pendingref + "1";
           }

           
    }

     echo "Successful Referral".$successfulref;
    echo "Pending Referral".$pendingref;
        ?>


        <section id="wallet">
            <p class="main">Your Balance</p>
            <h4 class="balance">5,841</h4>
            <button class="balance-btn">Withdraw money</button>
            <p class="main2">Payment Activity</p>
            <div class="card">
                <div class="navbar">
                    <div class="navbar-left">

                        <p class="lead">Starbucks Coffee</p>
                        <p class="lead1">Today 13:00 pm</p>
                    </div>
                    <div class="navbar-right">

                        <p>20</p>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="navbar">
                    <div class="navbar-left">

                        <p class="lead">Starbucks Coffee</p>
                        <p class="lead1">Today 13:00 pm</p>
                    </div>
                    <div class="navbar-right">

                        <p>20 </p>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="navbar">
                    <div class="navbar-left">

                        <p class="lead">Starbucks Coffee</p>
                        <p class="lead1">Today 13:00 pm</p>
                    </div>
                    <div class="navbar-right">

                        <p>20</p>

                    </div>
                </div>
            </div>
        </section>










        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>
