<?php include"../fixed_temp/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div id="fontawson" class="fontawson" onclick="top()">
        <i class="bi bi-arrow-up arrowdown"></i>
    </div>

    <div id="fontawson" class="fontawsone" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i class="bi bi-chat-dots arrowmessage"></i>
    </div>
    <div class="offcanvas offcanvas-start message_All" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">

        <div class="offcanvas-header Message_All_Header">

            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Samirovic`</h5>
            <div class="header_icon">
                <i class="bi bi-camera-video"></i>
                <i class="bi bi-telephone"></i>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>

        <div class="offcanvas-body Message_All_Body">
            <p>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br></p>
        </div>

        <div class="offcanvas-body Message_All_Footer">
            <div class="Message_All_Footer_left">
                <input class="Message_All_Footer_input" type="text" placeholder="Type any think">
            </div>
            <div class="Message_All_Footer_right">
                <a href="#"><i class="bi bi-image"></i></a>
                <a href="#"><i class="bi bi-emoji-smile"></i></i></a>
                <a href="#"><i class="bi bi-plus-circle"></i></a>


            </div>
        </div>
    </div>
    <div class="all" id="all">
        <nav class="navbar navbar-light bg-light nave">
            <div class="container-fluid nav">
                <a class="navbar-brand logo" href="./home.php">e-commerce</a>
                <form class="d-flex search">
                    <input class="form-control me-2 inputSearch" type="search" placeholder="Search Product" aria-label="Search">
                    <button class="btn btn-outline-success submit" type="submit">Search <i class="bi bi-search"></i> </button>
                </form>
                <div class="line">
                    <a class="login" href="../login.php"><i class="bi bi-person-circle"></i> login</a>
                    <div class="heart"><i class="bi bi-heart-fill"></i> favorites</div>




                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">

                        <i class="bi bi-cart4 packet"></i>
                    </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger spanpaske">
                          99+
                        </span>

                    <!-- vue . -->
                    <div id="app">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="canvasheader">
                                    <div class="canvasheaderright">Cart</div>
                                </div>
                                <div class="canvasbody">
                                    <div class="canvasbodyleft"><img src="../img/cart3.jpg" class="partimg"></div>
                                    <div class="canvasbodyright">
                                        <div class="canvasrighttop">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                        <div class="canvasrightbottom" id="price">50</div>
                                    </div>
                                </div>
                                <div class="canvasbodycenter">

                                    <h2 for="customRange3" class="form-label canvasbodycenterh1">Amount: {{amount}}</h2>

                                    <input type="range" class="form-range" max="25" step="1" id="customRange3" v-model="amount">

                                </div>
                                <div class="canvasfooter">
                                    <div class="canvasfootertop">
                                        <h4>SubTotal</h4><br>
                                        <p>{{total}}</p>
                                    </div>
                                    <button class="btn btn-primary button" type="button">View All Cards</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid allCat">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler but" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../shopAll.php">Shop All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Computer.php">Computer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Tablets.php">Tablets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Drones&Cameras.php">Drones & Cameras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Audio.php">Audio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Mobile.php">Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../T.V&HomeCinema.php">T.V & Home Cinema</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../WearableTech.php">Wearable Tech</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Sale.php">Sale</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="cenlogin">

        <h2 class="h2">login_admin</h2>
        <div class="icons">
            <div class="icon"><a href="#"><i class="bi bi-facebook iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-twitter iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-instagram iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-google iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-youtube iconface"></i></a></div>
        </div>
        <!-- <div class="row col-md-10 "> -->

        <form class="Row">
            <div class="row mb-3 col-md-10">
                <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control inputform" id="inputusername" placeholder="Username">
                </div>
            </div>
            <div class="row mb-3 col-md-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Pass</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control inputform" id="inputPassword3" placeholder="password">
                </div>
            </div>

            <div class="form-check  col-md-10 Forgetcheck">
                <label class="form-check-label" for="gridCheck1">
                <a href="#" class="forgrt">Forget my pass</a>
              </label>
            </div>
            <button type="submit" class="btn btn-dark butt">login</button>

        </form>


    </div>

    <!-- </div> -->

    <div class="footer">
        <div class="foot1">
            <h2 class="h1">Store Location</h2>

            <ul class="ulfooter">
                <li class="lifooter">13 Mohamed Morsy Street</li>
                <li class="lifooter">Benha Kafr_mouse CF 6035</li>
                <li class="lifooter">samirovic`@gmail.com</li>
                <li class="lifooter">011-598-390-72</li>
                <div class="icons">
                    <div class="icon"><a href="#"><i class="bi bi-facebook iconface"></i></a></div>
                    <div class="icon"><a href="#"><i class="bi bi-twitter iconface"></i></a></div>
                    <div class="icon"><a href="#"><i class="bi bi-instagram iconface"></i></a></div>
                    <div class="icon"><a href="#"><i class="bi bi-google iconface"></i></a></div>
                    <div class="icon"><a href="#"><i class="bi bi-youtube iconface"></i></a></div>
                </div>
            </ul>

        </div>

        <div class="foot1">
            <h2 class="h1">Shop</h2>

            <ul class="ulfooter">
                <li class="lifooter"><a href="../shopAll.php">Shop All</a></li>
                <li class="lifooter"><a href="../Computer.php">Computer</a></li>
                <li class="lifooter"><a href="../Tablets.php">Tables</a></li>
                <li class="lifooter"><a href="../Drones&Cameras.php">Drones&Cameras</a></li>
                <li class="lifooter"><a href="../Audio.php">Audio</a></li>
                <li class="lifooter"><a href="../Mobile.php">Mobile</a></li>
                <li class="lifooter"><a href="../T.V&HomeCinema.php">T.V</a></li>
                <li class="lifooter"><a href="../WearableTech.php"> Wearable Tech</a></li>
                <li class="lifooter"><a href="../Sale.php">Sale</a></li>


            </ul>

        </div>

        <div class="foot1">
            <h2 class="h1">Customer Support</h2>

            <ul class="ulfooter">
                <li class="lifooter"><a href="../contact.php">Contact Us</a></li>
                <li class="lifooter"><a href="../FAQ.php">Help Center</a></li>
                <li class="lifooter"><a href="../about us.php">About Us</a></li>
                <li class="lifooter"><a href="../career.php">Careers</a></li>
            </ul>

        </div>

        <div class="foot1">
            <h2 class="h1">Policy</h2>

            <ul class="ulfooter">
                <li class="lifooter"><a href="../Shipping.php">Shipping & Returns</a></li>
                <li class="lifooter"><a href="../Conditions.php">Terms & Conditions</a></li>
                <li class="lifooter"><a href="../Payment.php">Payment Methods</a></li>
                <li class="lifooter"><a href="../FAQ.php">FAQ</a></li>
            </ul>

        </div>
    </div>
    <div class="master">
        <div class="masterimg">
            <a href=""><img src="../img/credit-card-851506_640.jpg" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="../img//american-express-89024_640.jpg" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="../img/master-card-2962135_640.png" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="../img/paypal-784404_640.png" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="../img/visa-2623015_640.png" class="partimg"></a>
        </div>
    </div>
    <p class="p">©2022 by mohamed samir Proudly created with <a href="#">samirovic`</a></p>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/java.js"></script>
<script src="../js/vue.js"></script>
<script src="../js/vuehome.js"></script>


</html>