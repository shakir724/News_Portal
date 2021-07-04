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
                        <li><a class="dropdown-item active" href="district.php">District</a></li>
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

                <a href="postNews.php" class="nav__link">
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
            <h5>District</h5>
        </div>
        <div class="navbar-right">
            <p>Dashboard / Edit/add/delete <span class="p-span">/ District</span></p>
        </div>
    </div>

    <!--Add district-->
    <button class="btn res-btn" onclick="togglePopup1()"><i class='bx bx-plus'></i>Add District</button>

    <div class="popup" id="popup-a">
        <div class="overlay"></div>
        <div class="content-city">
            <div class="close-btn" onclick="togglePopup1()">&times;</div>

            <form action="add_district.php" method="post" class="city-pop-form">
                <div class="form-group">
                    <label for="state">Select State:</label>
                    <select id="state" name="state" class="select-city">
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

           <!--  <div class="form-group">
                <label for="city">Select City:</label>
                <select id="city" name="city" class="select-city">
                           <option>Select City</option>
                            <option value="1">Bangalore</option>
                            <option value="2">Mumbai</option>
                            <option value="3">Chennai</option>
                            <option value="4">Kolkata</option>  
                        </select>
                    </div>  -->

                    <label for="city">Add District:</label>
                    <input type="text" name="district" class="form-control" id="city" placeholder="District">
                    <div class="city-form-btn text-center">
                        <button type="submit" class="btn btn-primary mt-3">ADD</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="row title-sec">
            <div class="col">
                <h6>District</h6>
            </div>
            <div class="col-4">
                <h6>Action</h6>
            </div>
        </div>

        <?php 
        include 'db.php';
        $display = mysqli_query($con, "SELECT * FROM districts ORDER BY district");
        while ($row = mysqli_fetch_array($display)) {
            ?>

            <div class="row">
                <div class="col-12 table1">
                    <div class="row row1">
                        <div class="col">
                            <h6 class="h6-1"><?php echo $row['district']; ?></h6>
                        </div>
                        <div class="col-4">
                            <button class="action-btn1" onclick="togglePopup(<?php echo $row['district_id']; ?>)" ><i class="fas fa-edit fas-lg">Edit</i></button>

                            <div class="popup" id="popup-<?php echo $row['district_id']; ?>">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup(<?php echo $row['district_id']; ?>)">&times;</div>

                                <form action="edit_district.php" method="post" class="res-pop-form">
                                    <label for="district">Edit District:</label>
                                    <input type="text" value="<?php echo $row['district']; ?>" name="district" class="form-control" id="" placeholder="District">
                                    <input type="hidden" name="district_id" value="<?php echo $row['district_id']; ?>">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">EDIT</button>
                                    </div>
                                </form>  
                            </div>
                        </div>

                            <button class="action-btn2" onclick="return confirm('Are you sure to Delete?')" ><a href="delete_district.php?msg=<?php echo $row['district_id']; ?>"><i class="far fa-trash-alt fas-lg">Delete</i></a></button>
                        </div>

                    </div>
                </div>
        
           <!-- <div class="col-12 table1">
                <div class="row row1">
                    <div class="col">
                        <h6 class="h6-1">Dakshina Kannada</h6>
                    </div>
                    <div class="col-4">
                        <button class="action-btn1"><i class="fas fa-edit fas-lg"></i></button>
                        <button class="action-btn2"><i class="far fa-trash-alt fas-lg"></i></button>
                    </div>

                </div>
            </div>  -->
        </div>
        <?php } ?>
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
        function openform1() {
            document.getElementById('form1').style.display = 'block';
        }

        function openform2() {
            document.getElementById('form2').style.display = 'block';
        }

        //                popup toggle
        function togglePopup1() {
            document.getElementById("popup-a").classList.toggle("active");
        }

        function togglePopup(n) {
            document.getElementById("popup-" +n).classList.toggle("active");
        }

        $(document).ready(function() {
            $('#state').on('change', function() {
                var state_id = this.value;
                $.ajax({
                    url: "cities-by-state.php",
                    type: "POST",
                    data: {
                        state_id: state_id
                    },
                    cache: false,
                    success: function(result){
                        $('#city').html(result);
                        //$('#district').html('<option value="">Select City First</option>');
                    },
                    //error: function(ts) { alert(ts.responseText) }
                });
            });
          /*  $('#city').on('change', function() {
                var city_id = this.value;
                $_ajax({
                    url: "district-by-city.php",
                    type: "POST",
                    data: {
                        city_id: city_id
                    },
                    cache: false,
                    success: function(result){
                        $("#district").html(result);
                    }
                });
            }); */
        });  
    </script>
</body></html>
