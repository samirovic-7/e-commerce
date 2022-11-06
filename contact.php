<?php include"db.php" ?>
<?php include"./fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
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
                            <?php navbar()?>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="cen">
        <h2 class="H2">TechShed Help Center</h2>
        <h3 class="H3">Frequently Asked Questions</h3>

        <form class="row g-3 form">
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
<?php include"./fixed_temp/footer.php" ?></body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>

</html>