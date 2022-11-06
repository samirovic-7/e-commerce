<?php include"../db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert laptops</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/footer.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/header.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/home.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/insert.css?<?php echo time(); ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid allCat">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler but" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                            <?php 
                            
                            $sql = $database->prepare("SELECT * FROM all_product");
                            $sql->execute();
                            foreach ($sql as $key) {
                                $name = $key['Product_name'];
                                echo'
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./'.$name.'.php">'.$name.'</a>
                            </li>';
                            };

                            ?>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="cen">
        <h2 class="H2">Insert Product</h2>

        <form class="row g-3 form" method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="formFile" class="form-label">Select The Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>


            <div class="col-md-6 inplab ">
                <label for="inputPhone " class="form-label ">name of product</label>
                <input type="text " class="form-control input " id="inputPhone " name="Labtops_name">
            </div>


            <div class="col-md-6 inplab ">
                <label for="inputselect " class="form-label ">The Type Of This Product</label>

                <select class="form-select input " aria-label="Default select example "  name="type_id">
              <option hidden>Select Product</option>
              <?php
                $sql = $database->prepare("SELECT * FROM labtops_type");
                $sql->execute();
                foreach ($sql as $key) {
                    $name = $key["Labtops_Type_name"];
                    $type_id = $key["Labtops_Type_id"];
                    echo"
                    <option value='$type_id'>$name</option>

                    ";
                }

              ?>

            </select>
            </div>

            <div class="col-md-6 inplab ">
                <label for="inputselect " class="form-label ">The Type Of This Product</label>

                <select class="form-select input " aria-label="Default select example "  name="ram_id">
              <option hidden>Select Product</option>
              <?php
                $sql = $database->prepare("SELECT * FROM labtops_ram");
                $sql->execute();
                foreach ($sql as $key) {
                    $name = $key["Labtops_Ram_name"];
                    $ram_id = $key["Labtops_Ram_id"];
                    echo"
                    <option value='$ram_id'>$name</option>

                    ";
                }

              ?>

            </select>
            </div>
            <div class="col-md-6 inplab ">
                <label for="inputselect " class="form-label ">The Type Of This Product</label>

                <select class="form-select input " aria-label="Default select example " name="color_id">
              <option hidden>Select Product</option>
              <?php
                $sql = $database->prepare("SELECT * FROM labtops_color");
                $sql->execute();
                foreach ($sql as $key) {
                    $name = $key["Labtops_color_name"];
                    $color_id = $key["Labtops_color_id"];
                    echo"
                    <option value='$color_id'>$name</option>

                    ";
                }

              ?>

            </select>
            </div>
            <div class="col-md-12 inplab ">
                <label for="inputPhone " class="form-label ">Title of product</label>
                <input type="text " class="form-control input " id="inputPhone " name="Labtops_title">
            </div>

            <div class="col-md-6 inplab ">
                <label for="inputPhone " class="form-label ">Price of product</label>
                <input type="number " class="form-control input " id="inputPhone" name="Labtops_price">
            </div>

            <div class="col-md-6 inplab ">
                <label for="inputPhone " class="form-label ">Rate of product</label>
                <input type="number " class="form-control input " id="inputPhone" name="Labtops_rate">
            </div>

            <div class="col-md-12 inplab">

               <button type="submit" name="insert" class="btn btn-primary buttoncontact ">Insert</button> 
            </div>
        </form>

    </div>
<?php
if(isset($_POST['insert'])){
    
    $name = $_POST['Labtops_name'];
    $title = $_POST['Labtops_title'];
    $price = $_POST['Labtops_price'];
    $rate = $_POST['Labtops_rate'];
    $type = $_POST['type_id'];
    $ram = $_POST['ram_id'];
    $color = $_POST['color_id'];
    
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp,"../img/laptops/$image");

    $sql=$database->prepare("INSERT INTO labtops(Labtops_name,Labtops_title,Labtops_price,Labtops_rate,type_id,ram_id,color_id,Labtops_image) VALUES(:name,:title,:price,:rate,:type,:ram,:color,:img)");

    $sql->bindParam("name",$name);
    $sql->bindParam("title",$title);
    $sql->bindParam("price",$price);
    $sql->bindParam("rate",$rate);   
    $sql->bindParam("type",$type);
    $sql->bindParam("ram",$ram);   
    $sql->bindParam("color",$color);
    $sql->bindParam("img",$image);  

    $sql->execute();


}
?>
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
            <?php 
                       
                       $sql = $database->prepare("SELECT * FROM all_product");
                       $sql->execute();
                       foreach ($sql as $key) {
                           $name = $key['Product_name'];
                           echo'
                           <li class="lifooter">
                           <a class="nav-link" aria-current="page" href="./'.$name.'.php">'.$name.'</a>
                       </li>';
                       };
            ?>


            </ul>
        </div>

        <div class="foot1">
            <h2 class="h1">Customer Support</h2>

            <ul class="ulfooter">
                <li class="lifooter"><a href="./contact.php">Contact Us</a></li>
                <li class="lifooter"><a href="./FAQ.php">Help Center</a></li>
                <li class="lifooter"><a href="./about us.php">About Us</a></li>
                <li class="lifooter"><a href="./career.php">Careers</a></li>
            </ul>

        </div>

        <div class="foot1">
            <h2 class="h1">Policy</h2>

            <ul class="ulfooter">
                <li class="lifooter"><a href="./Shipping.php">Shipping & Returns</a></li>
                <li class="lifooter"><a href="./Conditions.php">Terms & Conditions</a></li>
                <li class="lifooter"><a href="./Payment.php">Payment Methods</a></li>
                <li class="lifooter"><a href="./FAQ.php">FAQ</a></li>
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
    <p class="p">©2022 by mohamed samir Proudly created with <a href="#">samirovic`</a></p></body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
<script src="js/java.js "></script>
<script src="./js/vue.js "></script>

</html>