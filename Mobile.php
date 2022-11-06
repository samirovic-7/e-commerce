<?php include"db.php";
 include"./fixed_temp/function.php";
include"./fixed_temp/SelectProductFunction.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/shopAll.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include"./fixed_temp/header.php" ?>

        <div class="cent col-md-12">

            <div class="left  col-md-1">

                <div class="card_right_bottom">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        type
                        </button>
                        </h2>
                                <?php 
                                    $sql = $database->prepare("SELECT * FROM mobile_type");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['mobile_type_id'];
                                        $name = $key['mobile_type_name'];
                                       
                                       echo"<div id='collapseTwo' class='accordion-collapse collapse show' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Mobile.php?filterType=$id' class='butt_filter'>
                                       $name
                                       </a>
                                       </div>
                                   </div>";
                                    }
                                ?>
                                
                          
                            
                        </div>
                    </div>
                </div>
                <div class="card_right_bottom">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        storage
                        </button>
                        </h2>
                                <?php 
                                    $sql = $database->prepare("SELECT * FROM mobile_storage");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['mobile_storage_id'];
                                        $name = $key['mobile_storage_name'];
                                       
                                       echo"<div id='collapseThree' class='accordion-collapse collapse show' aria-labelledby='headingThree' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Mobile.php?filterStorage=$id' class='butt_filter'>
                                       $name
                                       </a>
                                       </div>
                                   </div>";
                                    }
                                ?>
                                
                          
                            
                        </div>
                    </div>
                </div>
                <div class="card_right_bottom">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        color
                        </button>
                        </h2>
                                <?php 
                                    $sql = $database->prepare("SELECT * FROM mobile_color");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['mobile_color_id'];
                                        $name = $key['mobile_color_name'];
                                       
                                       echo"<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Mobile.php?filterColor=$id' class='butt_filter'>
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
            <div class="wow">

            <div class="row row-cols-1 row-cols-md-3   col-md-11">
            <?php
        
        if(isset($_GET['filterType'])){
            $id= $_GET['filterType'];
            $sql = $database->prepare("SELECT * FROM mobile WHERE type_id=$id");
            $sql->execute();
            foreach ($sql as $key) {
                $id = $key['mobile_id'];
                $name = $key['mobile_name'];
                $title = $key['mobile_title'];
                $price = $key['mobile_price'];
                $rate = $key['mobile_rate'];
                $image = $key['mobile_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                <img src="img/mobile/'.$image.'" class="card-img-top" alt="...">
                <div class="price">$'.$price.'</div>
                    <div class="rate">'.$rate.'</div>
        
                    <div class="card-body">
                        <h5 class="card-title">'.$name.'</h5>
                        <p class="card-text">'.$title.'</p>
                    </div>
                    <form method="POST">
        
                    <div class="heartcard" id="heartcard">
                    <button class="buttHeart" type="submit" name="AddProductToFavour"  value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>  
                    </div>
        
                    <button class="btn btn-primary buttoncart" type="submit" name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                </div>
            </div>';
        
            };
        
     };
?>

<?php
        
        if(isset($_GET['filterStorage'])){
            $id= $_GET['filterStorage'];
            $sql = $database->prepare("SELECT * FROM mobile WHERE storage_id=$id");
            $sql->execute();
            foreach ($sql as $key) {
                $id = $key['mobile_id'];
                $name = $key['mobile_name'];
                $title = $key['mobile_title'];
                $price = $key['mobile_price'];
                $rate = $key['mobile_rate'];
                $image = $key['mobile_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                <img src="img/mobile/'.$image.'" class="card-img-top" alt="...">
                <div class="price">$'.$price.'</div>
                    <div class="rate">'.$rate.'</div>
        
                    <div class="card-body">
                        <h5 class="card-title">'.$name.'</h5>
                        <p class="card-text">'.$title.'</p>
                    </div>
                    <form method="POST">
        
                    <div class="heartcard" id="heartcard">
                    <button class="buttHeart" type="submit" name="AddProductToFavour"  value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>  
                    </div>
        
                    <button class="btn btn-primary buttoncart" type="submit" name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                </div>
            </div>';
        
            };
        
     };
?>            <?php
        
if(isset($_GET['filterColor'])){
    $id= $_GET['filterColor'];
    $sql = $database->prepare("SELECT * FROM mobile WHERE color_id=$id");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['mobile_id'];
        $name = $key['mobile_name'];
        $title = $key['mobile_title'];
        $price = $key['mobile_price'];
        $rate = $key['mobile_rate'];
        $image = $key['mobile_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
        <img src="img/mobile/'.$image.'" class="card-img-top" alt="...">
        <div class="price">$'.$price.'</div>
            <div class="rate">'.$rate.'</div>

            <div class="card-body">
                <h5 class="card-title">'.$name.'</h5>
                <p class="card-text">'.$title.'</p>
            </div>
            <form method="POST">

            <div class="heartcard" id="heartcard">
            <button class="buttHeart" type="submit" name="AddProductToFavour"  value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>  
            </div>

            <button class="btn btn-primary buttoncart" type="submit" name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };

};
?>
    <?php 
            
           mobile();

            if(isset($_POST['Add'])){
                $UpdateCard=$database->prepare("UPDATE mobile SET Card=1 WHERE Card=0 AND mobile_id=:id");
                $UpdateCard->bindParam("id",$_POST['Add']);
                $UpdateCard->execute();
            };
            
        if(isset($_POST['AddProductToFavour'])){
            $UpdateFav =$database->prepare("UPDATE mobile SET Fav=1 WHERE Fav=0 AND mobile_id=:id");
            $UpdateFav->bindParam("id",$_POST['AddProductToFavour']);
            $UpdateFav->execute();
};
          

    ?>
            </div>
            </div>
        </div>
        <?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>

</html>