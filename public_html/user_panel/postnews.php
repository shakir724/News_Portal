<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

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
            <li class="nav-item active">
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
            <li class="nav-item">
                <a class="nav-link" href="mynews.php">My News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chatpanel.php">Chat Panel</a>
            </li>

        </ul>
    </div>


    <h6 class="panel-title">Post News</h6>


    <div class="form-container">
        <form action="addpost.php" method="post" enctype="multipart/form-data">
            <div class="row form-row">
                <div class="col-12">Title</div>
                <div class="col">
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-12">Description</div>
                <div class="col">
                    <textarea class="form-control" name="desc" rows="" required></textarea>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-12">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile" class="form-control postUploadInput">
                </div>
            </div>

            <div class="row form-row">
                <div class="col-12">Location</div>
                <div class="col">
                    <input type="radio" id="auto" name="location" value="Auto" onclick="javascript:yesnoCheck();">
                    <label for="auto">Auto</label>

                    <input type="radio" id="manual1" name="location" value="manual" onclick="javascript:yesnoCheck();">
                    <label for="manual1">manual</label>


                    <div id="ifYes" style="display: none">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" id="">
                                    <select id="manualDrop1" name="state" class="select-city" onchange="change_session()">
                                        <option >Select State</option>
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
                            </div>
                            <div class="col-12">
                                <div class="form-group" id="">
                                    <select id="manualDrop2" name="city" class="select-city" onchange="change_session2()" disabled>
                                        
                                    </select>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group" id="">
                                    <select id="manualDrop3" name="district" class="select-city" disabled>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-12">URL</div>
                <div class="col">
                    <input type="text" name="url" class="form-control" required>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-12">Keywords / Tags</div>
                <div class="col">
                    <input type="text" name="keyword" class="form-control" required>
                </div>
            </div>

                    <div id="ifYes">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" id="">
                                   Category: <select id="cat" name="cat" class="select-city" onchange="change_session()">
                                        <option >Select Category</option>
                                        <?php 
                                        mysqli_set_charset($con, 'utf8');
                                        $result1 = mysqli_query($con, "SELECT * FROM category ORDER BY cat");
                                        while ($row1 = mysqli_fetch_array($result1)) {
                                           ?>
                                           <option value="<?php echo $row1['cat_id']; ?>"><?php echo $row1['cat']; ?></option>
                                           <?php
                                       }
                                       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group" id="">
                                   Sub-Category: <select id="subcat" name="subcat" class="select-city">
                                        
                                    </select>
                                </div>

                            </div>
                            
                        </div>
                    </div>

            <button type="submit" class="btn btn-primary form-btn">SUBMIT</button>

        </form>
    </div>





   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        //        post news manual location
        function yesnoCheck() {
            if (document.getElementById('manual1').checked) {
                document.getElementById('ifYes').style.display = 'block';
            } else document.getElementById('ifYes').style.display = 'none';
        }

        //        post news state, city and district
        function change_session() {
            var s1 = document.getElementById('manualDrop1').value;

            if (s1 === 0) {
                document.getElementById('manualDrop2').disabled = true;
            } else
                document.getElementById('manualDrop2').disabled = false;
        }

        function change_session2() {
            var s2 = document.getElementById('manualDrop2').value;

            if (s2 === 0) {
                document.getElementById('manualDrop3').disabled = true;
            } else
                document.getElementById('manualDrop3').disabled = false;
        }

        //       post checkbox Category
        var showCheckbox = true;

        function showCheckboxes() {
            var checkboxes =
                document.getElementById("checkBoxes");

            if (showCheckbox) {
                checkboxes.style.display = "block";
                showCheckbox = false;
            } else {
                checkboxes.style.display = "none";
                showCheckbox = true;
            }
        }

        var showCheckbox2 = true;

        function showCheckboxes2() {
            var checkboxes2 =
                document.getElementById("checkBoxes2");

            if (showCheckbox2) {
                checkboxes2.style.display = "block";
                showCheckbox2 = false;
            } else {
                checkboxes2.style.display = "none";
                showCheckbox2 = true;
            }
        }

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

        $(document).ready(function() {
            $('#cat').on('change', function() {
                var cat_id = this.value;
                $.ajax({
                    url: "subcategory-by-category.php",
                    type: "POST",
                    data: {
                        cat_id: cat_id
                    },
                    cache: false,
                    success: function(result){
                        $('#subcat').html(result);
                        //$('#manualDrop3').html('<option value="">Select City First</option>');
                    },
                    //error: function(ts) { alert(ts.responseText) }
                });
            });
        });

    </script>
</body>

</html>
