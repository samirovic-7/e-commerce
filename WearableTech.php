<?php include"db.php" ?>
<?php include"./fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearableTeach</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="./css/shopAll.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include"./fixed_temp/header.php" ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid allCat">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler but" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <?php  navbar(); ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="cent col-md-12">

            <div class="left  col-md-1">

                <div class="card_right_bottom">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             type
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_right_bottom">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                             type
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                    <button class="butt_filter">
                                        type
                                       </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3   col-md-11">

            <?php 
            
            $sql = $database->prepare("SELECT * FROM all_products WHERE Product_foreign = '7'");
            $sql->execute();
            foreach ($sql as $key) {
                $id = $key['Product_id'];
                $name = $key['Product_name'];
                $title = $key['Product_title'];
                $price = $key['Product_price'];
                $rate = $key['Product_rate'];
                $image = $key['Product_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                    <img src="./img/cart1.jpg" class="card-img-top" alt="...">
                    <div class="price">$'.$price.'</div>
                    <div class="rate">'.$rate.'</div>

                    <div class="card-body">
                        <h5 class="card-title">'.$name.'</h5>
                        <p class="card-text">'.$title.'</p>
                    </div>
                    <div class="heartcard">
                        <i class="bi bi-heart-fill large" id="cartheart"></i> <span>Add to favriout</span>
                    </div>
                    <form action="id='.$id.'" method="POST" class="form">
                    <button class="btn btn-primary buttoncart" type="submit" onclick="mo()" id="buttoncart">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                </div>
            </div>';
            }
          

    ?>

            </div>

        </div>
        <?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>


</html>

</html>