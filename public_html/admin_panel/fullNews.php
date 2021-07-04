<!DOCTYPE html>
<html lang="en">
<?php
  include 'db.php';
  session_start();
?>  
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
                    <span class="nav__logo-name">LOGO</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link active">
                        <i class='bx bx-news nav__icon'></i>
                        <span class="nav__name">News Approval</span>
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
                        <li><a class="dropdown-item" href="state.html">State</a></li>
                        <li><a class="dropdown-item" href="city.html">City</a></li>
                        <li><a class="dropdown-item" href="district.html">District</a></li>
                        <li><a class="dropdown-item" href="category.html">Category</a></li>
                        <li><a class="dropdown-item" href="sub-category.html">Sub-Category</a></li>
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

                <a href="postNews.html" class="nav__link">
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
            <h5>News</h5>
        </div>
        <div class="navbar-right">
            <p>Dashboard / News Approval<span class="p-span"> / News</span></p>
        </div>
    </div>
    <form action="admin_check.php" method="post">
    <div class="full-news-btn">
        <button type="submit" value="accept" name="check" class="action-btn1"><i class="far fa-check-circle"></i>Approve</button>
        <button type="submit" value="reject" name="check" class="action-btn2"><i class="far fa-times-circle"></i>Reject</button>
    </div>
    </form>

    <div class="news-container">
        <?php
        //include 'db.php';
        //session_start();
        $id = $_GET['msg'];
        //echo $id;
        $_SESSION['postid'] = $id;
        $posts = mysqli_query($con, "SELECT * FROM posts WHERE post_id = '$id'");
        while ($row = mysqli_fetch_array($posts)) {
           // $img_src = "https://vapynews.com/image/".$row['filename']."jpg";
            $img_name = $row['filename'];
            $folder = 'https://vapynews.com/image/'.$row['filename'];
            ?>
            <div>
            <img src="<?php echo $folder; ?>" alt="<?php echo $img_name; ?>" title="<?php echo $img_name; ?>" width="500" height="600">
            </div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; } ?></p>
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
    </script>
</body></html>
