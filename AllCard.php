<?php include"db.php" ?>
<?php include"./fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product_Card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/pro.css?v=<?php echo time(); ?>">
</head>

<body>   
     <?php include"./fixed_temp/header.php" ?>



        <div class="cent">
            <div class="allcat col-md-11">
                <div class="CatTextHeder col-2">Product Image</div>
                <div class="CatTextHeder col-1">Product name</div>
                <div class="CatTextHeder col-1">Product price</div>
                <div class="CatTextHeder col-1">Product amount</div>
                <div class="CatTextHeder col-1">Buy Product</div>
                <div class="CatTextHeder col-1">Delete Product</div>

            </div>
            
            
            <?php
                $sql = $database->prepare("SELECT * FROM  labtops");
                $sql -> execute();
                foreach ($sql as $key) {
                    $id = $key['Labtops_id'];
                    $name = $key['Labtops_name'];
                    $price = $key[ 'Labtops_price'];
                    $image = $key['Labtops_image'];
                    echo '<form class="allcat col-md-11"  method="POST">
                    <div class="CatImg col-2"><img src="img/laptops/'.$image.'" class="card-img-top" alt="..."></div>
                    <div class="CatText col-1">'.$name.'</div>
                    <div class="CatText col-1">$'.$price.'</div>
                    <a class="Catbutt butt col-1" href="cart.php">Buy</a>
                   <button class="Catbutt_delete col-1" type="submit" value="'.$id.'"  name="delete" ><i class="bi bi-trash"></i></button> 
    
                </form>';

                };

                if(isset($_POST['delete'])){
                    $sql=$database->prepare("DELETE FROM Camera WHERE Camera_id=:id");
                    $delete = $_POST['delete'];
                    $sql->bindParam("id",$delete);
                    $sql->execute();

                };
            ?>
            <div class="Button col-1"><button class="ButtonAll">Buy All</button></div>

        </div>
        <?php include"./fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="js/java.js"></script>
<script src="./js/vue.js"></script>
<script src="./js/vuehome.js"></script>


</html>