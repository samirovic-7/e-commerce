<?php include"db.php";
 include"./fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css?v=<?php time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/FAQ.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include"./fixed_temp/header.php" ?>

    <div class="cen">
        <h3 class="H4 ">About TechShed</h3>

        <div class="card mb-3 allCart">

            <div class="row ">
                <div class=" col-md-6 ">
                    <img src="./img/cart2.jpg " class="img-fluid rounded-start " alt="... ">
                </div>
                <div class="col-md-6">
                    <div class="card-body ">
                        <h5 class="card-title ">Card title</h5>
                        <p class="card-text ">
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for
                            you to tell a story and let your users know a little more about you. ​ This is a great space to write a long text about your company and your services. You can use this space to go into a little more detail about your company.
                            Talk about your team and<br><br> what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make
                            your company stand out</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="H2 ">TechShed Help Center</h2>
        <h3 class="H3 ">Frequently Asked Questions</h3>
       
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>

</html>


<!-- /^[0-9A-F]{8}-[0-9A-F]{4}-[1][0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i -->