<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== FONT AWESOME ===== -->
    <script src="https://kit.fontawesome.com/808aa1833e.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 

    



    <!-- ===== CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <title>Sidebar menu responsive</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="perfil.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">LOGO</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link">
                        <i class='bx bx-news nav__icon'></i>
                        <span class="nav__name">News Approval</span>
                    </a>

                    <a href="live_news.php" class="nav__link">
                        <i class='bx bx-news nav__icon'></i>
                        <span class="nav__name">Live News</span>
                    </a>

                    <a href="comment.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Comment Approval</span>
                    </a>

                    <a href="restricted.php" class="nav__link">
                        <i class='bx bx-message-square-x nav__icon'></i>
                        <span class="nav__name">Restricted Words</span>
                    </a>

                    <!-------------------->

                    <a class=" nav__link nav-link dropdown-toggle nav__line1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-edit nav__icon'></i>
                        <span class="nav__name">Edit/add/delete</span>
                    </a>



                    <ul class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="state.php">State</a></li>
                        <li><a class="dropdown-item" href="city.php">City</a></li>
                        <li><a class="dropdown-item" href="district.php">District</a></li>
                        <li><a class="dropdown-item" href="category.php">Category</a></li>
                        <li><a class="dropdown-item" href="sub-category.php">Sub-Category</a></li>
                    </ul>

                    <!--                    -------------->

                    <a href="user.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <!--
                    <a href="intimation.html" class="nav__link">
                        <i class='bx bx-git-compare nav__icon'></i>
                        <span class="nav__name">Intimation</span>
                    </a>
                -->

                <a href="postNews.php" class="nav__link active">
                    <i class='bx bxs-news nav__icon'></i>
                    <span class="nav__name">Post News</span>
                </a>
            </div>
        </div>
    </nav>
</div>

<section id="tab1">
    <div class="navbar">
        <div class="navbar-left">
            <h5>Post News</h5>
        </div>
        <div class="navbar-right">
            <p>Dashboard <span class="p-span">/ Post News</span></p>
        </div>
    </div>

    <div class="form-container">
        <form action="add_post.php" method="post" enctype="multipart/form-data">
            <div class="row form-row">
                <div class="col-2">Title</div>
                <div class="col">
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-2">Description</div>
                <div class="col">
                    <textarea name="desc" class="form-control" rows="" required></textarea>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-2">Upload File</div>
                <div class="col">
                    <input type="file" name="uploadfile" class="form-control">
                </div>
            </div>

            <div class="row form-row">
                <div class="col-2">Location</div>
                <div class="col">
                    <input type="radio" id="auto" name="location" value="Auto" onclick="javascript:yesnoCheck(); getLocation(); ">
                    <label for="auto">Auto</label>
                    <p id="demo"></p>

                    <input type="radio" id="manual1" name="location" value="manual" onclick="javascript:yesnoCheck();">
                    <label for="manual1">manual</label>


                    <div id="ifYes" style="display: none">
                        <div class="row">
                            <div class="col">
                                <div class="form-group" id="">
                                    <select id="manualDrop1" name="state" class="select-city" onchange="change_session()" required>
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

                                    <!--
                                    <div class="multipleSelection" id="manualDrop1" >
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option >Select State</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>

                                        <div id="checkBoxes" onchange="change_session()">
                                            <label for="first" >
                                                <input type="checkbox" id="first"/>
                                                Karnataka
                                            </label>

                                            <label for="second">
                                                <input type="checkbox" id="second" />
                                                Bihar
                                            </label>
                                            <label for="third">
                                                <input type="checkbox" id="third" />
                                                Punjab
                                            </label>
                                            <label for="fourth">
                                                <input type="checkbox" id="fourth" />
                                                Kerala
                                            </label>
                                        </div>
                                    </div>
                                -->

                            </div>
                            <div class="col">
                                <div class="form-group" id="">
                                    <select id="manualDrop2" name="city" class="select-city" onchange="change_session2()" disabled required>
                                     <!--   <option value="0">Select City</option>
                                        <option value="1">Bangalore</option>
                                        <option value="2">Mumbai</option>
                                        <option value="3">Chennai</option>
                                        <option value="4">Kolkata</option>  -->
                                    </select>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-group" id="">
                                    <select id="manualDrop3" name="district" class="select-city" disabled required>
                                      <!--  <option value="0">Select District</option>
                                        <option value="1">Bagalkot</option>
                                        <option value="2">Dakshina Kannada</option>  -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-2">URL</div>
                <div class="col">
                    <input type="text" name="url" class="form-control" required>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-2">Keywords / Tags</div>
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

</section>










<!--===== MAIN JS =====-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script>
    /*===== SHOW NAVBAR  =====*/
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show1')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE  =====*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))


        //        to open form when reject button is clicked
        function openlocation() {
            document.getElementById('manual1').style.display = 'block';
        }

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

       // function addcat() {
         //   document.getElementById('catadd').style.display = "block";
           // document.getElementById('subadd').style.display = "block";
            
       // }


        var x = document.getElementById("demo");

        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
      var lat =  position.coords.latitude; 
      var lng =  position.coords.longitude;
      codeLatLng = (lat, lng)
  }

  function initialize() {
    geocoder = new google.maps.Geocoder();



}

function codeLatLng(lat, lng) {

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      //console.log(results);
      if (results[1]) {
        var indice=0;
        for (var j=0; j<results.length; j++)
        {
            if (results[j].types[0]=='locality')
            {
                indice=j;
                break;
            }
        }
        alert('The good number is: '+j);
        console.log(results[j]);
        for (var i=0; i<results[j].address_components.length; i++)
        {
            if (results[j].address_components[i].types[0] == "locality") {
                        //this is the object you are looking for City
                        city = results[j].address_components[i];
                    }
                    if (results[j].address_components[i].types[0] == "administrative_area_level_1") {
                        //this is the object you are looking for State
                        region = results[j].address_components[i];
                    }
                    if (results[j].address_components[i].types[0] == "country") {
                        //this is the object you are looking for
                        country = results[j].address_components[i];
                    }
                }

            //city data
            alert(city.long_name + " || " + region.long_name)


        } else {
          alert("No results found");
      }
        //}
    } else {
        alert("Geocoder failed due to: " + status);
    }
});
}

</script>

</body>

</html>
