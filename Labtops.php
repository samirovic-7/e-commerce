<?php include"db.php";
 include"./fixed_temp/function.php";
include"./fixed_temp/SelectProductFunction.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labtops</title>
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
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        type
                        </button>
                        </h2>
                                <?php 
                                    $sql = $database->prepare("SELECT * FROM labtops_type");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['Labtops_Type_id'];
                                        $name = $key['Labtops_Type_name'];
                                       
                                       echo"<div id='collapseTwo' class='accordion-collapse collapse show' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Labtops.php?filterType=$id' class='butt_filter'>
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
                                    $sql = $database->prepare("SELECT * FROM labtops_ram");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['Labtops_Ram_id'];
                                        $name = $key['Labtops_Ram_name'];
                                       
                                       echo"<div id='collapseThree' class='accordion-collapse collapse show' aria-labelledby='headingThree' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Labtops.php?filterRam=$id' class='butt_filter'>
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
                                    $sql = $database->prepare("SELECT * FROM labtops_color");
                                    $sql->execute();
                                    foreach ($sql as $key) {
                                        $id = $key['Labtops_color_id'];
                                        $name = $key['Labtops_color_name'];
                                       
                                       echo"<div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                                       <div class='accordion-body'>
                                       <a href='Labtops.php?filterColor=$id' class='butt_filter'>
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
            $idType= $_GET['filterType'];
            $sql = $database->prepare("SELECT * FROM labtops WHERE type_id=$idType");
            $sql->execute();
            foreach ($sql as $key) {
                $id = $key['Labtops_id'];
                $name = $key['Labtops_name'];
                $title = $key['Labtops_title'];
                $price = $key['Labtops_price'];
                $rate = $key['Labtops_rate'];
                $image = $key['Labtops_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                    <img src="img/laptops/'.$image.'" class="card-img-top" alt="...">
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
        
                    <button class="btn btn-primary buttoncart" type="submit"   name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                    </div>
            </div>';
        
            };
        
     };
?>
            <?php
        
            if(isset($_GET['filterRam'])){
            $idRam= $_GET['filterRam'];
            $sql = $database->prepare("SELECT * FROM labtops WHERE ram_id = $idRam ");
            $sql->execute();
            foreach ($sql as $key) {
                $id = $key['Labtops_id'];
                $name = $key['Labtops_name'];
                $title = $key['Labtops_title'];
                $price = $key['Labtops_price'];
                $rate = $key['Labtops_rate'];
                $image = $key['Labtops_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                    <img src="img/laptops/'.$image.'" class="card-img-top" alt="...">
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
        
                    <button class="btn btn-primary buttoncart" type="submit"   name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                    </div>
            </div>';
        
            };
        
     };
?>            <?php
        
    if(isset($_GET['filterColor'])){
    $idColor= $_GET['filterColor'];
    $sql = $database->prepare("SELECT * FROM labtops WHERE color_id=$idColor");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Labtops_id'];
        $name = $key['Labtops_name'];
        $title = $key['Labtops_title'];
        $price = $key['Labtops_price'];
        $rate = $key['Labtops_rate'];
        $image = $key['Labtops_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="img/laptops/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"   name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
            </div>
    </div>';

    };

};
?>
            <?php 
            
           laptops();

            if(isset($_POST['Add'])){
                $UpdateCard=$database->prepare("UPDATE labtops SET Card=1 WHERE Card=0 AND Labtops_id=:id");
                $UpdateCard->bindParam("id",$_POST['Add']);
                $UpdateCard->execute();
            };
            
        if(isset($_POST['AddProductToFavour'])){
            $UpdateFav =$database->prepare("UPDATE labtops SET Fav=1 WHERE Fav=0 AND Labtops_id=:id");
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
<script src="js/jquery.js"></script>
<script src="js/java.js?v=<?php echo time(); ?>"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>


</html>