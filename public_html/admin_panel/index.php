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
                    <a href="index.php" class="nav__link active">
                        <i class='bx bx-news nav__icon'></i>
                        <span class="nav__name">News Approval</span>
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
            <h5>News Approval</h5>
        </div>
        <div class="navbar-right">
            <p>Dashboard <span class="p-span">/ News Approval</span></p>
        </div>
    </div>


    <div class="row title-sec">
        <div class="col">
            <h6>News Title</h6>
        </div>
        <div class="col">
            <h6>User Name</h6>
        </div>
        <div class="col">
            <h6>User Email</h6>
        </div>
        <div class="col">
            <h6>Action</h6>
        </div>
        <div class="col">
            <h6>Compare</h6>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <?php
        include 'db.php';
        //session_start();
        $posts = mysqli_query($con, "SELECT * FROM posts where flag='0' ");
        while ($row = mysqli_fetch_array($posts)) {
            //echo $row['post_id'];
            $postid = $row['post_id'];
            $title = $row['title'];
            $desc = $row['description'];
            ?>
            <div class="col-12 table1">
                <div class="row row1">
                    <div class="col">
                        <h6 class="h6-1"><?php echo $row['title']; ?></h6>
                    </div>
                    <?php 
                    $userid = $row['user_id'];
                    $user = mysqli_query($con, "SELECT * FROM register where register_id='$userid'");
                    while ($row = mysqli_fetch_array($user)) {
                     ?>
                     <div class="col">
                        <h6><?php echo $row['first_name']; ?></h6>
                    </div>
                    <div class="col">
                        <h6><?php echo $row['email_id']; ?></h6>
                    </div>
                    <?php 
                }
                //echo $postid;
                ?>
                <div class="col">

                    <form action="news_check.php?msg=<?php echo $postid; ?>" method="post">
                    <button type="submit" value="accept" name="check" class="action-btn1"><i class="far fa-check-circle"></i>Approve</button>
                    <button type="submit" value="reject" name="check" class="action-btn2" onclick="openform1();"><i class="far fa-times-circle"></i>Reject</button>
                    </form>

                    <button class="action-btn" onclick="togglePopup(<?php echo $postid; ?>)" ><i class="far fa-edit"></i>Edit</button>

                    <div class="popup" id="popup-<?php echo $postid; ?>">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup(<?php echo $postid; ?>)">&times;</div>

                                <form action="edit_news.php" method="POST" class="res-pop-form">
                                    <label for="state">Edit News:</label>
                                    <input type="text" value="<?php echo $title; ?>" name="title" class="form-control" id="" placeholder="Title">
                                    <input type="text" value="<?php echo $desc; ?>" name="desc" class="form-control" id="" placeholder="Description">
                                    <input type="hidden" name="post_id" value="<?php echo $postid; ?>">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">EDIT</button>
                                    </div>
                                </form>  
                            </div>
                        </div>

                    <button class="action-btn"><a href="fullNews.php?msg=<?php echo $postid; ?>" class="title-a">
                        <i class="far fa-newspaper"></i>View News
                    </a>
                </button>
            </div>

              <?php }
              ?>   

              <div class="col">
                <button class="btn res-btn " onclick="togglePopup1()">Matching Words</button>

                <div class="popup" id="popup-a">
                    <div class="overlay"></div>
                    <div class="content-user">
                        <div class="close-btn" onclick="togglePopup1()">&times;</div>

                        <div class="row compare-row">
                            <div class="col">
                                <h6>Pending News</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="col">
                                <h6>Live News</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">
                <form id="form1" style="display: none;">
                    <textarea class="form-control" rows="" placeholder="Description"></textarea>
                </form>
            </div>
        </div>
    </div>

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

    </script>
</body>
</html>
