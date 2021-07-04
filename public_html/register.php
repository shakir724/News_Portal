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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  -->
    <!-- Bootstrap CSS -->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>

    <style>
        /*@import url('https://fonts.googleapis.com/css2?family=Andika+New+Basic:wght@400;700&display=swap');
        */
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

        #register-pg .form1 button {
            border: none;
            background: none;
            outline: none;
        }

        #register-pg .form1 button i {
            font-size: 28px;
            border-radius: 50%;
            background: linear-gradient(#fbd253, #fc9813);
            color: #fff;
        }

        #register-pg .form-container {
            margin-top: 20px;
        }

        #register-pg .form2-text {
            font-size: 22px;
            text-align: center;
        }

        #register-pg .form-container input[type=text] {
            width: 98%;
            border: none;
            border-bottom: 1px solid #a6a6a6;
            padding-bottom: 6px;
            margin-bottom: 8px;
        }

        #register-pg .form-container label {
            font-size: 14px;
            color: #808080;
        }

        #register-pg .form-dropdown {
            width: 100%;
            border: none;
            border-bottom: 1px solid #a6a6a6;
            padding-bottom: 5px;
        }

        #register-pg .reg-form-btn {
            border: none;
            background: linear-gradient(#fbd253, #fc9813);
            width: 210px;
            padding: 4px;
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 18px;
            margin-top: 15px;
            border-radius: 5px;
        }

        /*----------*/
        #partitioned {
            padding-left: 15px;
            letter-spacing: 42px;
            border: 0;
            background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 50px 1px;
            background-repeat: repeat-x;
            background-position-x: 35px;
            width: 290px;
            min-width: 220px;
            outline: none;
        }

        #divInner {
            left: 0;
            position: sticky;
        }

        #divOuter {
            width: 100%;
            overflow: hidden;
        }

        /*--------*/

        .modal-header {
            border-bottom: none;
        }

        .modal-content {
            width: 100%;
            height: auto;
            margin: auto;
            border: 1px solid orange;
            border-radius: 25px;
        }

        .form-otp-text {
            font-size: 26px;
            color: orange;
        }

        .otp-p {
            margin-top: 20px;
            font-size: 14px;
        }

        .otp-btn {
            border: none;
            background: none;
            outline: none;
            display: block;
            margin: auto;
            margin-top: 20px;
        }

        .otp-btn-i {
            font-size: 38px;
            border-radius: 50%;
            background: linear-gradient(#fbd253, #fc9813);
            color: #fff;
        }

        .resend-otp-btn {
            background: none;
            border: 1px solid red;
            padding: 2px 8px;
            color: orange;
            font-weight: bold;
            outline: none;
        }

        .modal.show .modal-dialog {
            top: 15%;
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
            <button><a href="index.php"><i class='bx bx-arrow-back'></i></a></button>
            <h5>Register</h5>
        </div>

        <p class="reg-p">Welcome to Vapy News! Please enter your details below to register with us and get into world of amazing benefits.</p>
        
        <?php
        $ms = $_GET['ms'];
        //echo $ms;
        if ($ms == "index"){ 
        ?>
        <form action="register_process.php?ms=index" method="post">
        <?php
    } else {
        ?>    
        <form action="register_process.php" method="post" >
            <?php 
        }
        ?>
            <div class="form1">
                <input type="text" name="mobile" placeholder="Enter your mobile number" class="form1-mob" required>
               
            </div>



            <div class="form-container">

                <h5 class="form2-text">Help us get to know you better</h5>

                <label for="first">First Name</label>
                <input type="text" id="first" name="first" required>

                <label for="middle">Middle Name</label>
                <input type="text" id="middle" name="middle">

                <label for="last">Last Name</label>
                <input type="text" id="last" name="last" required>

                <label for="last">Email ID</label>
                <input type="text" id="email" name="email" required>

                <label for="last">Password</label>
                <input type="text" id="password" name="password" required>

                <label for="address">Address</label>
                <input type="text" id="address" name="address">

                <div class="row">
                    <div class="col">
                        <label for="state">State</label>
                        <select class="form-dropdown" name="state" id="manualDrop1" >
                            <option>Select State</option>
                            <?php 
                            include 'db.php';
                            $result = mysqli_query($con, "SELECT * FROM states ORDER BY state");
                            while ($row = mysqli_fetch_array($result)) {
                             ?>
                             <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state']; ?></option>
                             <?php
                         }
                         ?>

                     </select>
                 </div>
                 <div class="col">
                    <label for="city">District</label>
                    <select class="form-dropdown" name="district" id="manualDrop2" >
                      <!--  <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>  -->
                    </select>
                </div>
                <div class="col">
                    <label for="district">City</label>
                    <select class="form-dropdown" name="city" id="manualDrop3">
                      <!--  <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>  -->
                    </select>
                </div>
            </div>

           <!-- <input type="radio" name="paid" value="1" required>Paid <br>
            <input type="radio" name="paid" value="0" required>Unpaid  <br>
-->
            <label for="address">Referral Code</label>
                <input type="text" id="referral" name="referral">

            <div class="text-center">
                <button type="submit" class="reg-form-btn">Next</button>
            </div>
        </form>
    </div>


    <div class="container">
        <!-- Modal -->
        

    </div>

    <?php
  if (isset($_GET["msg"]) && $_GET["msg"] == 'email')
  {
    ?> <script> alert("Email-Id Already Exisits!"); </script>
 <?php
  }
 ?>

<?php
  if (isset($_GET["msg"]) && $_GET["msg"] == 'mobile')
  {
    ?> <script> alert("Mobile Number Already Exisits!"); </script>
 <?php
  }
 ?>




</section>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#manualDrop1').on('change', function() {
            var state_id = this.value;
            $.ajax({
                url: "cities-by-state.php",
                type: "POST",
                data: {
                    state_id: state_id
                },
                cache: false,
                success: function(result){
                    $('#manualDrop2').html(result);
                    $('#manualDrop3').html('<option value="">Select District First</option>');
                },
                    //error: function(ts) { alert(ts.responseText) }
                });
        });
        $('#manualDrop2').on('change', function() {
            var city_id = this.value;
            $.ajax({
                url: "district-by-city.php",
                type: "POST",
                data: {
                    city_id: city_id
                },
                cache: false,
                success: function(result){
                    $("#manualDrop3").html(result);
                }
            });
        }); 
    });
</script>
</body>

</html>
