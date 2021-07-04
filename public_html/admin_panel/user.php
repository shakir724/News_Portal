<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== FONT AWESOME ===== -->
    <script src="https://kit.fontawesome.com/808aa1833e.js" crossorigin="anonymous"></script>


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
                    <span class="nav__logo-name">NEWS PORTAL</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link ">
                        <i class='bx bx-news nav__icon'></i>
                        <span class="nav__name">News Approval</span>
                    </a>

                    
                    
                    <!-------------------->

                    <a class=" nav__link nav-link dropdown-toggle nav__line1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-edit nav__icon'></i>
                        <span class="nav__name">Edit/add/delete</span>
                    </a>



                    

                    <!--                    -------------->

                    <a href="user.php" class="nav__link active">
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
            <h5>Users</h5>
        </div>
        <div class="navbar-right">
            <p>Dashboard <span class="p-span">/ Users</span></p>
        </div>
    </div>



    <div class="row title-sec">
        <div class="col">
            <h6>Name</h6>
        </div>
        <div class="col">
            <h6>Email</h6>
        </div>
        
        <div class="col">
            <h6>City</h6>
        </div>
        <div class="col">
            <h6>Phone</h6>
        </div>
        <div class="col"></div>
    </div>

    <?php 
    include 'db.php';
    $user = mysqli_query($con, "SELECT * FROM register");
    while ($row = mysqli_fetch_array($user)) {
       $cityid = $row['city_id'];
       $mobile = $row['mobile'];
       ?>
       <div class="row">
        <div class="col-12 table1">
            <div class="row row1">
                <div class="col">

                    
                    <h6 class="h6-1"><?php echo $row['first_name'];?> <?php echo $row['last_name']; ?></h6>

                </div>
                <div class="col">
                    <h6><?php echo $row['email_id']; ?></h6>
                </div>
                
                <div class="col">
                    <?php 
                    $city = mysqli_query($con, "SELECT * FROM cities WHERE city_id = '$cityid'");
                    while($row = mysqli_fetch_array($city)){
                        ?>
                        <h6><?php echo $row['city']; } ?></h6>
                    </div>
                    <div class="col">
                        <h6><?php echo $mobile; ?></h6>
                    </div>
                    <div class="col">
                        <button class="btn btn-dark user-detail-btn" onclick="location.href='userNews.php';">View Details</button>
                    </div>
                </div>
            </div>
            
            

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

        //        checkbox filters
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

    </script>
</body>

</html>
