<?php include"../db.php" ?>
<?php include"../fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/AdminProduct.css?<?php echo time(); ?>">
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
                            <?php navbar_admin()  ?>

                    </ul>
                </div>
            </div>
        </nav>

<div class="cent col-md-12">

           
<?php
    $sql=$database->prepare("SELECT * FROM wireless_device");
    $sql->execute();
    foreach ($sql as $key) {
        $name = $key['Wireless_device_name'];
        $title = $key['Wireless_device_title'];
        $price = $key['Wireless_device_price']; 
        $rate = $key['Wireless_device_rate'];
        $image = $key['Wireless_device_image'];
        echo
           " <div class='col col-md-3'>".
               " <div class='card colgr'>".
                    "<img src='../img/Wirelessdevices/".$image."' class='card-img-top'>".
                   " <div class='price'>$ $price</div>".
                    "<div class='rate'>$rate</div>".
                    "<div class='card-body'>".
                    "<h3 class='card-title'>$name</h3>".
                    "<p class='card-title'>$title</p>".
                    "</div>".
                    "<div class='button_of_database'>".
                    "<form method='POST' class='form'>"."<button class='btn btn-primary button_cart_database' name='delete' type='submit' value='".$key['Wireless_device_id']."' id='buttoncart'>Delete Card<i class='bi bi-plus-circle-dotted'></i></button>"."</form>".

                    "<form method='POST' class='form'>"."<a class='btn btn-primary button_cart_database_a' href='Update.php?edit=".$key['Wireless_device_id']."'>Edit Card<i class='bi bi-plus-circle-dotted'></i></a>"."</form>".
                 " </div>".
                "</div>".
            "</div>";};

    if(isset($_POST['delete'])){
        $sqle=$database->prepare("DELETE FROM wireless_device WHERE Wireless_device_id=:Wireless_device_id");
        $delete = $_POST['delete'];
        $sqle->bindParam("Wireless_device_id",$delete);
        $sqle->execute();
    };

?>

         
</div>
<a class="btn btn-primary buttonInsert"  href="./insert_wirelessdevice.php">Insert Card<i class="bi bi-plus-circle-dotted"></i></a>
<?php include"../fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/java.js"></script>
<script src="../js/vue.js"></script>
<script src="../js/vuehome.js"></script>

</html>
