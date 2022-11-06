<?php include"db.php";
 include"./fixed_temp/function.php";
include"./fixed_temp/SelectProductFunction.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">

</head>

<body>
    <?php include"./fixed_temp/header.php"; ?>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner Slide">
                <div class="carousel-item active ">
                    <img src="./img/cart1.jpg" class="d-block w-100 img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/cart2.jpg" class="d-block w-100 img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/cart3.jpg" class="d-block w-100 img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/cart4.jpg" class="d-block w-100 img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/cart5.jpg" class="d-block w-100 img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <div class="cen">
        <div class="container-fluid twoTaps ">
            <div class="card bg-dark text-white cardio">
                <img src="./img/cart5.jpg" class="card-img img" alt="...">
                <div class="card-img-overlay imgoverlay">
                    <p class="card-text">holiday discount</p>
                    <h3 class="card-title">Card title 1</h3>
                    <h3 class="card-title">Card title 2</h3>
                    <p class="card-text">Last updated 3 mins ago</p>

                    <button class="btn btn-primary but" type="button">View All</button>
                </div>
            </div>

            <div class="card bg-dark text-white cardio">
                <img src="./img/cart4.jpg" class="card-img img" alt="...">
                <div class="card-img-overlay imgoverlay">
                    <p class="card-text">holiday discount</p>
                    <h3 class="card-title">Card title 1</h3>
                    <h3 class="card-title">Card title 2</h3>
                    <p class="card-text">Last updated 3 mins ago</p>

                    <button class="btn btn-primary but" type="button">View All</button>
                </div>
            </div>
        </div>
        <div class="container-fluid pro">
            <div class="prod">
                <div class="prodleft">
                    <img src="./gifs/10801-deployment.gif"></div>
                <div class="prodright">Lorem ipsum dolor sit amet.</div>
            </div>

            <div class="prod">
                <div class="prodleft">
                    <img src="./gifs/20051-programming.gif"></div>
                <div class="prodright">Lorem ipsum dolor sit amet.</div>
            </div>

            <div class="prod">
                <div class="prodleft">
                    <img src="./gifs/21581-inserte-billetes.gif"></div>
                <div class="prodright">Lorem ipsum dolor sit amet.</div>
            </div>

            <div class="prod">
                <div class="prodleft">
                    <img src="./gifs/29390-your-order-is-confirmed.gif"></div>
                <div class="prodright">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
        <div class="container-fluid cartall">
            <h2>BEST SELLER</h2>
            <div class="card-group">
                <div class="card card-groupe">
                    <img src="./img/cart3.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-groupe">
                    <img src="./img/cart1.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-groupe">
                    <img src="./img/cart1.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-groupe">
                    <img src="./img/cart1.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-groupe">
                    <img src="./img/cart1.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-groupe">
                    <img src="./img/cart1.jpg" class="card-img-top image" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary button" type="button">View All</button>
            </div>
        </div>
        <div class="container-fluid cartallShop">
            <h1 class="h1">Shop by Category</h1>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>computer</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Tablets</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Audio</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Mobile</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>T.V</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Wearable Tech</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Sale</h4>
            </div>

        </div>
        <div class="container-fluid save">
            <div class="part1"><img class="partimg" src="./img/cart1.jpg"></div>
            <div class="part2">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, non.</h1>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil quam natus a in saepe eligendi earum voluptate necessitatibus cum!</h2>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary button" type="button">View All</button>
                </div>
            </div>
        </div>
        <div class="container-fluid cartallShop">
            <h1 class="h1">on sale</h1>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>computer</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Tablets</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Audio</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Mobile</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>T.V</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Wearable Tech</h4>
            </div>
            <div class="shopcat">
                <div class="photo"></div>
                <h4>Sale</h4>
            </div>
        </div>
        <div class="container-fluid save">

            <div class="part21">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, non.</h1>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil quam natus a in saepe eligendi earum voluptate necessitatibus cum!</h2>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary button" type="button">View All</button>
                </div>
            </div>
            <div class="part11"><img class="partimg" src="./img/cart1.jpg"></div>
        </div>
        
        <form class="row g-3 form">
        <h3 class="H3">Frequently Asked Questions</h3>

            <div class="col-md-6  inplab">
                <label for="inputName1 " class="form-label ">First Name</label>
                <input type="text " class="form-control input " id="inputName1 ">
            </div>
            <div class="col-md-6 inplab ">
                <label for="inputName " class="form-label ">Last Name</label>
                <input type="text " class="form-control input " id="inputName2 ">
            </div>
            <div class="col-md-6  inplab">
                <label for="inputEmail4 " class="form-label ">Email</label>
                <input type="text " class="form-control input " id="inputEmail4 ">
            </div>
            <div class="col-md-6  inplab">
                <label for="inputPhone " class="form-label ">Phone</label>
                <input type="number " class="form-control input " id="inputPhone ">
            </div>
            <div class="col-md-3  inplab">
                <label for="inputselect " class="form-label ">Position You Apply for</label>

                <select class="form-select input " aria-label="Default select example ">
              <option hidden>Open this select menu</option>
              <option value="1 ">One</option>
              <option value="2 ">Two</option>
              <option value="3 ">Three</option>
            </select>
            </div>
            <div class="col-md-9  inplab">
                <label for="inputlink " class="form-label ">Any Question</label>
                <input type="text" class="form-control input " id="inputlink ">
            </div>
            <div class="inplab">

                <button type="submit " class="btn btn-primary buttoncontact">Send</button>
            </div>
        </form>

    </div>
<?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>

</html>