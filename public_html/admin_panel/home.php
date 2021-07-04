<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--      BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Andika+New+Basic:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        #register-pg {
            padding: 12px 10px 20px;
        }

        .reg-header {
            display: flex;
        }

        .reg-header button {
            border: none;
            background: none;
            outline: none;
        }

        .reg-header button i {
            font-size: 28px;
        }

        .reg-header h5 {
            font-weight: bold;
            margin-left: 14px;
            font-size: 22px;
        }

        #register-pg .reg-p {
            font-weight: 500;
            padding: 10px;
            margin-bottom: 2px;
        }

        #register-pg .form1 {
            border-bottom: 1px solid black;
        }

        #register-pg .form1-mob {
            border: none;
            width: 90%;
            padding: 5px;
            font-size: 22px;
            outline: none;
        }
        h5{
            margin-top: 20px;
        }
        #register-pg .balance-btn{
            border-radius: 3px;
            background: darkorange;
            color: white;
            font-size: 17px;
            width: 190px;
            padding: 5px 5px;
            margin-top: 20px;
            border-style: hidden;
            margin: auto;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, transform;
            transition-property: box-shadow, transform;


        }
        #register-pg .balance-btn1{
            border-radius: 3px;
            background: darkorange;
            color: white;
            font-size: 17px;
            width: 250px;
            padding: 5px 5px;
            margin-top: 20px;
            border-style: hidden;
            margin: auto;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, transform;
            transition-property: box-shadow, transform;

        }
        .btn:hover, .btn:focus, .btn:active{
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .imgy{
            width: 200px;
            height: 200px;
            margin: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        a{
            font-size: 13px;
        }
        .fa{
            margin-left: 10px;

        }
        .fas{
            margin-left: 30px;
            font-size: 30px;
            color: #000033;

        }
        .fas1{
            margin-left: 30px;
            font-size: 30px;
            color: dodgerblue;    
        }
        .butto{
            border: none;
            outline: none;
            background: none;
        }
        .col3{
            color: darkorange;
        }
        .fa-google{
            font-size: 30px;
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }
        .box{
            display: flex;
            justify-content: center;
            margin: 20px;
            border: none;
        }
        .text1{
            font-size: 12px;
        }


        @media screen and (min-width: 780px) {
            body {
                padding: 0 32%;
            }
        }




    </style>
</head>
<body>
    <section id="register-pg">
        <div class="reg-header">
            <!--<button><i class='bx bx-arrow-back'></i></button>  --->
            <h5>Admin Login</h5>
        </div>

        <!-- <p class="reg-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <span class="col3"> magna aliqua</span>. Ut enim ad minim veniam, quis <span class="col3"> nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>   -->

        <p class="reg-p">Welcome to Online News Portal! Please enter your details below to login with us and get into world of amazing benefits. If you are new user then you can click on register button to register with us. </p>

        <form action="login.php" method="post">
            <div class="form1">
                <input type="text" name="user" placeholder="Enter your mobile number/E-mail" class="form1-mob">
            </div>
            <div class="form1">
                <input type="password" name="password" placeholder="Enter your Password" class="form1-mob">
            </div>

            
         

          <!--  <img src="girl.jpg" class="imgy"> -->   

           

            <div class="text-center">
                <button type="submit" class="btn balance-btn1 text-center">Login</button>
            </div>  
        </form>
    </section>

    <?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'invalid')
    {
        ?> <script> alert("Your Credentials are Invalid"); </script>
        <?php
    }

    ?>

    <?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'resett')
    {
        ?> <script> alert("Your Password has been Updated"); </script>
        <?php
    }

    ?>
</body>
</html>
