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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->

    <title></title>

</head>

<body>
    

    <?php
    include 'header.php';
    //include 'db.php';
    //session_start();
    //$_SESSION['register_id'] = "2";
    //echo $_SESSION['register_id'];
    $result = mysqli_query($con, "SELECT * FROM `register` WHERE register_id = '".$_SESSION['register_id']."' ");

    $row = mysqli_fetch_array($result);
      //echo $row['first_name'];
    $state_id = $row['state_id'];
    $city_id = $row['city_id'];
    $district_id = $row['district_id'];
    $ref = $row['referral'];
    ?>

    <h6 class="panel-title">Profile</h6>

    <div class="form-container-profile">
        <form action="edit_process.php" method="post">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="first" value="<?php echo $row['first_name']; ?>" id="name">

            <label for="name">Middle Name:</label>
            <input type="text" class="form-control" name="middle" value="<?php echo $row['middle_name']; ?>" id="name">

            <label for="name">Last Name:</label>
            <input type="text" class="form-control" name="last" value="<?php echo $row['last_name']; ?>" id="name">

            <label for="number">Number:</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>" id="number">

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email_id']; ?>" id="email">

            <div class="row">
                <div class="col">
                    <label for="state">State</label>
                    <select class="form-dropdown" name="state" id="manualDrop1" required>
                        <option>Select State</option>
                        <?php 

                        $result = mysqli_query($con, "SELECT * FROM states ORDER BY state");
                        while ($row = mysqli_fetch_array($result)) {
                            if ($state_id == $row['state_id']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                            ?>
                            <option value="<?php echo $row['state_id']; ?>" <?php echo $selected; ?>><?php echo $row['state']; ?></option>
                            <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="col">
                    <label for="city">City</label>
                    <select class="form-dropdown" name="city" id="manualDrop2" required>
                      <?php 

                      $city = mysqli_query($con, "SELECT * FROM cities ORDER BY city");
                      while ($row = mysqli_fetch_array($city)) {
                        if ($city_id == $row['city_id']){
                            $selected = "selected";
                        }else{
                            $selected = "";
                        }
                        ?>
                        <option value="<?php echo $row['city_id']; ?>" <?php echo $selected; ?>><?php echo $row['city']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <label for="district">District</label>
                <select class="form-dropdown" name="district" id="manualDrop3" required>
                  <?php 

                  $district = mysqli_query($con, "SELECT * FROM districts ORDER BY district");
                  while ($row = mysqli_fetch_array($district)) {
                    if ($district_id == $row['district_id']){
                        $selected = "selected";
                    }else{
                        $selected = "";
                    }
                    ?>
                    <option value="<?php echo $row['district_id']; ?>" <?php echo $selected; ?>><?php echo $row['district']; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div> 

           <!-- <label for="state">State:</label>
            <input type="text" class="form-control" value="Bihar" id="state">

            <label for="city">City:</label>
            <input type="text" class="form-control" value="Bangalore" id="city">

            <label for="district">District:</label>
            <input type="text" class="form-control" value="Dakshina Kannada" id="district">  -->

           <?php 
             $paidu = mysqli_query($con, "SELECT * FROM `register` WHERE register_id = '".$_SESSION['register_id']."'");
                  while ($row = mysqli_fetch_array($paidu)) {
                      $paid = $row['paid'];
                  }
                  if ($paid == "1"){
           ?>
            <label for="name" form="refferal">Referral ID:</label>
           
            <input type="text" class="form-control" value="<?php echo $ref; ?>" id="refferal">
            <button  type="button" onclick="myFunction()">Copy Referral</button> 

          <?php
           }
          ?>
            <button type="submit" name="submit" class="btn-profile">SUBMIT</button>
        </form>
    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   <!-- <script>
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
                        $('#manualDrop3').html('<option value="">Select City First</option>');
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
    </script>  -->
    <script>
        function myFunction() {
            var copyText = document.getElementById("refferal");
          copyText.select();
          copyText.setSelectionRange(0, 99999)
          document.execCommand("copy");
          alert("Copied the text: " + copyText.value);
      }
  </script>

</body>

</html>
