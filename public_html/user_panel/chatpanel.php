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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link" href="chatpanel.php">Chat Panel</a>
            </li>

        </ul>
    </div>


    <!--   bootstrap -->
    <section>
        <ul class="nav nav-tabs chat-tabs">
            <li class="nav-item chat-items">
                <a href="#home" class="nav-link" role="tab" data-toggle="tab">NOTES</a>
            </li>

            <li class="nav-item chat-items">
                <a href="#profile" class="nav-link" role="tab" data-toggle="tab">ALERTS</a>
            </li>

            <li class="nav-item chat-items">
                <a href="#about" class="nav-link active" role="tab" data-toggle="tab">CHAT</a>
            </li>
        </ul>




        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="home">

                <div class="row chat-head text-center">
                    <div class="col">
                        <button><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="col-6 ">
                        <h6>Notes</h6>
                        <p>Add New Notes</p>
                    </div>
                    <div class="col">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div class="chat-person">
                    <div class="chat-person-text">
                        <h6>New order placed..</h6>
                        <p>10 Aug 2020</p>
                    </div>

                    <div class="chat-note-btn">
                        <button><i class="fas fa-edit i1"></i></button>
                        <button><i class="fas fa-trash-alt i2"></i></button>
                    </div>
                </div>

                <div class="chat-person">
                    <div class="chat-person-text">
                        <h6>New order placed..</h6>
                        <p>10 Aug 2020</p>
                    </div>

                    <div class="chat-note-btn">
                        <button><i class="fas fa-edit i1"></i></button>
                        <button><i class="fas fa-trash-alt i2"></i></button>
                    </div>
                </div>

                <div class="chat-person">
                    <div class="chat-person-text">
                        <h6>New order placed..</h6>
                        <p>10 Aug 2020</p>
                    </div>

                    <div class="chat-note-btn">
                        <button><i class="fas fa-edit i1"></i></button>
                        <button><i class="fas fa-trash-alt i2"></i></button>
                    </div>
                </div>

                <div class="chat-person">
                    <div class="chat-person-text">
                        <h6>New order placed..</h6>
                        <p>10 Aug 2020</p>
                    </div>

                    <div class="chat-note-btn">
                        <button><i class="fas fa-edit i1"></i></button>
                        <button><i class="fas fa-trash-alt i2"></i></button>
                    </div>
                </div>

            </div>

            <!--           -------------->

            <div role="tabpanel" class="tab-pane" id="profile">

                <div class="row chat-head text-center">
                    <div class="col">
                        <button><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                    <div class="col-6 ">
                        <h6>Notifications</h6>
                        <p>Show All</p>
                    </div>
                    <div class="col">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div>
                    <h6 class="chat-letter">SEVER STATUS</h6>

                    <div class="chat-person">
                        <div class="chat-img2">KK</div>
                        <div class="chat-person-text">
                            <h6>David Nester Birthday</h6>
                            <p>Today</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="chat-letter">SOCIAL</h6>

                    <div class="chat-person">
                        <div class="chat-img2">RU</div>
                        <div class="chat-person-text">
                            <h6>Perfection Simplified</h6>
                            <p>James Smith commented...</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="chat-letter">SEVER STATUS</h6>

                    <div class="chat-person">
                        <div class="chat-img2">AU</div>
                        <div class="chat-person-text">
                            <h6>David Nester Birthday</h6>
                            <p>Today</p>
                        </div>
                    </div>

                    <div class="chat-person">
                        <div class="chat-img2">MO</div>
                        <div class="chat-person-text">
                            <h6>David Nester Birthday</h6>
                            <p>Today</p>
                        </div>
                    </div>
                </div>

            </div>

            <!--           ------------->
            <div role="tabpanel" class="tab-pane active" id="about">

                <div id="about-chat">
                    <div class="row chat-head text-center">
                        <div class="col">
                            <button><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="col-6 ">
                            <h6>Chat List</h6>
                            <p>Show All</p>
                        </div>
                        <div class="col">
                            <button><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>

                    <div class="chat-container">
                        <div>
                            <h6 class="chat-letter">A</h6>

                            <div class="chat-person" onclick="openbox()">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Archie Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person" onclick="openbox()">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Archie Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person" onclick="openbox()">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Archie Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person" onclick="openbox()">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Archie Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="chat-letter">B</h6>

                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Bashid Samim</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Bashid Samim</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Bashid Samim</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="chat-letter">D</h6>

                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Darry Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Darry Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>

                            <div class="chat-person">
                                <img src="perfil.jpg" class="chat-img">
                                <div class="chat-person-text">
                                    <h6>Darry Parker</h6>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chat-box" style="display: none;">

                    <div class="row chat-head text-center">
                        <div class="col">
                            <button onclick="closebox()"><i class="fas fa-arrow-left"></i>
                            </button>

                        </div>
                        <div class="col-6 ">
                            <h6>Chat with Khelesh</h6>
                            <p>Online</p>
                        </div>
                        <div class="col">
                            <button><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>

                    <div class="chat-group">

                        <div class="row">
                            <div class="col-12">
                                <div class="chat-box">
                                    <img src="perfil.jpg" class="chat-img">
                                    <div class="message-box1">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="chat-box2">
                                    <div class="message-box2">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                    <img src="perfil.jpg" class="chat-img">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="chat-box">
                                    <img src="perfil.jpg" class="chat-img">
                                    <div class="message-box1">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="chat-box2">
                                    <div class="message-box2">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                    <img src="perfil.jpg" class="chat-img">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="chat-box">
                                    <img src="perfil.jpg" class="chat-img">
                                    <div class="message-box1">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="chat-box2">
                                    <div class="message-box2">
                                        <h6>Hi, how are you samim?</h6>
                                        <p>8:40 AM, Today</p>
                                    </div>
                                    <img src="perfil.jpg" class="chat-img">
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="chat-footer">
                        <input type="text" placeholder="Type your message...">
                        <button><i class="fas fa-paper-plane"></i></button>
                    </div>

                </div>

            </div>


        </div>
    </section>








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function openbox() {
            document.getElementById('about-chat').style.display = "none";
            document.getElementById('chat-box').style.display = "block";
        }

        function closebox() {
            document.getElementById('about-chat').style.display = "block";
            document.getElementById('chat-box').style.display = "none";
        }

    </script>
</body>

</html>
