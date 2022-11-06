<?php include"db.php";
 include"./fixed_temp/function.php";
include"./fixed_temp/SelectProductFunction.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireless</title>
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
        <?php 
                                    $sql = $database->prepare("SELECT * FROM wireless_type");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $name = $key['Wireless_type_name'];
                                        $id = $key['Wireless_type_id'];
                                       
                                       echo"<div id='collapseTwo' class='accordion-collapse collapse show' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                         
                                              <a href='Wireless_devices.php?filter=$id' class='butt_filter'>
                                              $name
                                              </a>
                                       </div>
                                   </div>";
                                    }
                                ?>
                                
                
          
            
        </div>
    </div>
</div>
</div>

            <div class="row row-cols-1 row-cols-md-3   col-md-11">


            <?php 
            
          wireless();
          
            if(isset($_POST['Add'])){
                $UpdateCard = $database->prepare("UPDATE wireless_device SET Card=1 WHERE Card=0 AND Wireless_device_id=:id");
                $UpdateCard->bindParam("id",$_POST['Add']);
                $UpdateCard->execute();
            };
            
        if(isset($_POST['AddProductToFavour'])){
            $UpdateFav =$database->prepare("UPDATE wireless_device SET Fav=1 WHERE Fav=0 AND Wireless_device_id=:id");
            $UpdateFav->bindParam("id",$_POST['AddProductToFavour']);
            $UpdateFav->execute();
};

    ?>               
            </div>

        </div>
        <?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>


</html>