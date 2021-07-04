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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/tail.select@0.5.15/css/bootstrap4/tail.select-default.min.css,npm/tail.select@0.5.15/css/bootstrap4/tail.select-default.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->

        <title></title>
        <!--<style>
            #map{
                height: 500px;
                width: 100%;
            }
        </style>-->
    </head>

    <body>
        <?php
        include 'header.php';
       // include 'db.php';
       // session_start();

        $result34 = mysqli_query($con, "SELECT * FROM register WHERE register_id = '".$_SESSION['register_id']."' ");
        while ($row4 = mysqli_fetch_array($result34)) {
            $paid = $row4['paid'];
        }
       
        ?>


        <h6 class="panel-title">Post News</h6>


        <div class="form-container">
            <form action="addpost.php" method="post" onsubmit="return validateYouTubeUrl()" enctype="multipart/form-data">
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
                        <input type="file" name="uploadfile" class="form-control postUploadInput" required>
                    </div>
                </div>

          <!--  <div class="row form-row">
                <div class="col-12">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile1" class="form-control postUploadInput">
                </div>
            </div>
            <div class="row form-row">
                <div class="col-12">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile2" class="form-control postUploadInput">
                </div>
            </div>
            <div class="row form-row">
                <div class="col-12">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile3" class="form-control postUploadInput">
                </div>
            </div>
            <div class="row form-row">
                <div class="col-12">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile4" class="form-control postUploadInput">
                </div>
            </div>  -->

            <div class="row form-row">
                <div class="col-12">Location</div>
                <div class="col">
                    <input type="radio" id="auto" name="location" value="Auto" onclick="javascript:yesnoCheck();">
                    <label for="auto">Auto</label>

                    <input type="radio" id="manual1" name="location" value="manual" onclick="javascript:yesnoCheck();">
                    <label for="manual1">manual</label>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                  <div><input type="hidden" id="country" name="countrya" value=""></div>
                                  <div><input type="hidden" id="state" name="statea" value=""></span></div>
                                  <div><input type="hidden" id="city" name="citya" value=""></span></div>
                                  <div><input type="hidden" id="latitude" name="latitude" value=""></span></div>
                                  <div><input type="hidden" id="longitude" name="longitude" value=""></span></div>
                                  <div><input type="hidden" id="ip" name="ip" value=""></span></div>
                                
                    <div id="ifYesAuto" style="display:none">
                        <div class="row">
                            <div class="col-12">
                                
                                
                            </div>
                        </div>
                    </div>


                    <div id="ifYes" style="display: none">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" id="">
                                    <select id="manualDrop1" name="state" class="select-city" onchange="change_session()" required>
                                        <option >Select State</option>
                                        <?php 
                                        
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
                                <select id="manualDrop2" name="district" class="select-city" onchange="change_session2()" disabled required>

                                </select>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-group" id="">
                                <select id="manualDrop3" name="city" class="select-city" disabled required>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ifYes2" style="display: none">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="">
                                <select id="manualDrop21" name="state2" class="select-city" onchange="change_session()">
                                    <option >Select State</option>  
                                    <?php 

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
                            <select id="manualDrop22" name="district2" class="select-city" onchange="change_session2()" disabled>

                            </select>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group" id="">
                            <select id="manualDrop23" name="city2" class="select-city" disabled>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ifYes3" style="display: none">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group" id="">
                            <select id="manualDrop31" name="state3" class="select-city" onchange="change_session()">
                                <option >Select State</option>  
                                <?php 

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
                        <select id="manualDrop32" name="district3" class="select-city" onchange="change_session2()" disabled>

                        </select>
                    </div>

                </div>
                <div class="col-12">
                    <div class="form-group" id="">
                        <select id="manualDrop33" name="city3" class="select-city" disabled>

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
        <input type="text" name="url" id="youTubeUrl" class="form-control">
        <input type="hidden" name="demo" id="demo">
    </div>
</div>

<div class="row form-row">
    <div class="col-12">Keywords / Tags</div>
    <div class="col">
        <input type="text" name="checklist[]" class="form-control" id="test-case" required>
    </div>
</div>

                 
                    <div class="row form-row">
                        <div class="col-12">Category</div>
                        <div class="col">
                            <!--<div class="multipleSelection post-category-check" id="manualDrop1">-->
                                       <select  multiple id="select2" list="Keywords" name="KeyWords[]" >
                                       <option>Select a Category</option>
                                            <?php
                                                                                mysqli_set_charset($con, 'utf8');

                                            $query = mysqli_query($con, "SELECT * FROM category ORDER BY cat");
                                            while ($row = mysqli_fetch_array($query)){
                                            ?> 
                                                <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                   
                                   
                                    
                                
                             
                        <!-- </div> -->
                     </div>
                 </div>



                 <button type="submit" class="btn btn-primary form-btn" name="submit">SUBMIT</button>
            </form>
         </div>

         <?php
         if (isset($_GET["msg"]) && $_GET["msg"] == 'posted')
         {
            ?> <script> alert("News Posted!"); </script>
            <?php
        }
        ?>



<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
        //        post news manual location
        function yesnoCheck() {
            if (document.getElementById('manual1').checked) {
                document.getElementById('ifYes').style.display = 'block';
                document.getElementById('ifYes2').style.display = 'block';
                document.getElementById('ifYes3').style.display = 'block';
            } else { 
                document.getElementById('ifYes').style.display = 'none';
                document.getElementById('ifYes2').style.display = 'none';
                document.getElementById('ifYes3').style.display = 'none';
            }
        }

        //        post news state, city and district
         function change_session() {
            var s1 = document.getElementById('manualDrop1').value;
            var s21 = document.getElementById('manualDrop2').value;
            var s31 = document.getElementById('manualDrop3').value;            

            if (s1 === 0) {
                document.getElementById('manualDrop2').disabled = true;
            } else
            document.getElementById('manualDrop2').disabled = false;

            if (s21 === 0) {
                document.getElementById('manualDrop22').disabled = true;
            } else
            document.getElementById('manualDrop22').disabled = false;

            if (s31 === 0) {
                document.getElementById('manualDrop32').disabled = true;
            } else
            document.getElementById('manualDrop32').disabled = false;
        }
        function change_session2() {
            var s2 = document.getElementById('manualDrop2').value;
            var s22 = document.getElementById('manualDrop22').value;
            var s32 = document.getElementById('manualDrop32').value;

            if (s2 === 0) {
                document.getElementById('manualDrop3').disabled = true;
            } else
            document.getElementById('manualDrop3').disabled = false;

            if (s22 === 0) {
                document.getElementById('manualDrop23').disabled = true;
            } else
            document.getElementById('manualDrop23').disabled = false;

            if (s32 === 0) {
                document.getElementById('manualDrop33').disabled = true;
            } else
            document.getElementById('manualDrop33').disabled = false;
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
            $('#manualDrop21').on('change', function() {
                var state_id = this.value;
                $.ajax({
                    url: "cities-by-state.php",
                    type: "POST",
                    data: {
                        state_id: state_id
                    },
                    cache: false,
                    success: function(result){
                        $('#manualDrop22').html(result);
                        $('#manualDrop23').html('<option value="">Select City First</option>');
                    },
                    //error: function(ts) { alert(ts.responseText) }
                });
            });
            $('#manualDrop22').on('change', function() {
                var city_id = this.value;
                $.ajax({
                    url: "district-by-city.php",
                    type: "POST",
                    data: {
                        city_id: city_id
                    },
                    cache: false,
                    success: function(result){
                        $("#manualDrop23").html(result);
                    }
                });
            }); 
        });

    $(document).ready(function() {
        $('#manualDrop31').on('change', function() {
            var state_id = this.value;
            $.ajax({
                url: "cities-by-state.php",
                type: "POST",
                data: {
                    state_id: state_id
                },
                cache: false,
                success: function(result){
                    $('#manualDrop32').html(result);
                    $('#manualDrop33').html('<option value="">Select City First</option>');
                },
                    //error: function(ts) { alert(ts.responseText) }
                });
        });
        $('#manualDrop32').on('change', function() {
            var city_id = this.value;
            $.ajax({
                url: "district-by-city.php",
                type: "POST",
                data: {
                    city_id: city_id
                },
                cache: false,
                success: function(result){
                    $("#manualDrop33").html(result);
                }
            });
        }); 
    });

       /* $(document).ready(function() {
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
        });  */

        function validateYouTubeUrl() {    
            var text;
            var url = $('#youTubeUrl').val();
       // if (url != undefined || url != '') {        
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
        var match = url.match(regExp);
        if ((match && match[2].length == 11) || url == "") {
            // Do anything for being valid
            // if need to change the url to embed url then use below line            
            text = 'https://www.youtube.com/embed/' + match[2] + '?autoplay=1&enablejsapi=1';
            document.getElementById("demo").value = text;
            return true;
        } else {
            alert('Not valid URL');
            return false;
            // Do anything for not being valid
       // }
   }
}

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tail.select@0.5.15/js/tail.select-full.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
  tail.select("#select2",{
search:true,
hideSelected:true,
hideDisabled:true,
multiShowCount:false,
multiContainer:true
  });
  
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script type='text/javascript'>
 
                                  $.ajax({
                                  url: "https://geolocation-db.com/jsonp",
                                  jsonpCallback: "callback",
                                  dataType: "jsonp",
                                  success: function(location) {
                                    $('#country').val(location.country_name);
                                    $('#state').val(location.state);
                                    $('#city').val(location.city);
                                    $('#latitude').val(location.latitude);
                                    $('#longitude').val(location.longitude);
                                    $('#ip').val(location.IPv4);
                                  }
                                });
                                </script>
</body>
</html>

