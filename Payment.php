<?php include"db.php" ?>
<?php include"./fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/FAQ.css">
</head>

<body>

<?php include"./fixed_temp/header.php" ?>
   

    </div>
    <div class="cen" id="App">


        <h2 class="H2">TechShed Help Center</h2>
        <h3 class="H3">Frequently Asked Questions</h3>
        <div class="accordion accordion-flush allofcollapsed" v-for="question in questions">
            <div class="accordion-item allcollapsed">
                <h2 class="accordion-header" id="flush-headingOne">

                    <button class="accordion-button collapsed" @click="question.open = !question.open" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{question.title}}
                    </button>
                </h2>
                <transition name="slide-fade">
                    <div class="accordion-body" v-show="question.open">{{question.reply}}</div>
                </transition>
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

    </div>

    <?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>
<script src="./js/vueFAQ.js"></script>

</html>