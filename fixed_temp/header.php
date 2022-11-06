<?php include"db.php";?>
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
        </div>

        <div class="offcanvas-body Message_All_Footer">
            <div class="Message_All_Footer_left">
                <input class="Message_All_Footer_input" type="text" placeholder="Type any think">
            </div>
            <div class="Message_All_Footer_right">
                <a href="#"><i class="bi bi-image"></i></a>
                <a href="#"><i class="bi bi-emoji-smile"></i></i></a>
                <a href="#"><i class="bi bi-plus-circle"></i></a>
                <a><i class="bi bi-arrow-right-circle-fill"></i></a>


            </div>
        </div>
    </div>
    <div class="all" id="all">
        <nav class="navbar navbar-light bg-light nave">
            <div class="container-fluid nav">
                <a class="navbar-brand logo" href="./home.php">e-commerce</a>
                <form class="d-flex search" method="POST">
                    <input class="form-control me-2 inputSearch" type="search" name="SearchInput" placeholder="Search Product" aria-label="Search">
                    <button class="btn btn-outline-success submit" type="submit" name="SearchButt">Search <i class="bi bi-search"></i> </button>
                </form>
                    
                <div class="line">
                    <a class="login" href="./login.php"><i class="bi bi-person-circle"></i> login</a>
                    <div class="heart"><i class="bi bi-heart-fill"></i> favorites</div>



                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">

                        <i class="bi bi-cart4 packet"></i>
                    </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger spanpaske">
                          <?php 
                            $sql=$database->prepare("SELECT * FROM card");
                            $sql->execute();
                            echo $sql->rowCount(); ?>
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
                                    <div class="canvasbodyleft"><img src="img/cart3.jpg" class="partimg"></div>
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
                            <?php navbar()  ?>
                    </ul>
                </div>
            </div>
        </nav>