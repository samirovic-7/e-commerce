<!-- هيحصل مشاكل فى اللينكات عشان الصفحة دى عمولها انكلود ن صفحة تانية ومربوطة بكل الصفحات عشان كدا هتأثر على الامتداد بتاعها فحلها اننا نخرجها بره جنب الصفحات اخواتها بس دا هيأثر على باقى الحجات الخاصة بالأيميل -->


<?php include"../db.php" ?>
<?php include"../fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>">
</head>

<body>   
     <?php include"../fixed_temp/header.php" ?>

      

    </div>
    <div class="cenlogin">

        <h2 class="h2">User_login</h2>
        <div class="icons">
            <div class="icon"><a href="#"><i class="bi bi-facebook iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-twitter iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-instagram iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-google iconface"></i></a></div>
            <div class="icon"><a href="#"><i class="bi bi-youtube iconface"></i></a></div>
        </div>
        <!-- <div class="row col-md-10 "> -->

        <form class="Row" method="POST">
            <div class="row mb-3 col-md-10">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control inputform" id="inputEmail3" placeholder="mail" name="mail">
                </div>
            </div>
            <div class="row mb-3 col-md-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Pass</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control inputform" id="inputPassword3" placeholder="password" name="password">
                </div>
            </div>
            <div class="form-check  col-md-10 Forgetcheck"  >
               <div class="alert alert-danger"><a href="#" class="forgrt alert-link">Forget my pass</a></div> 
            </div>
            <button type="submit" class="btn btn-dark butt" name="login">login</button>

        </form>


        <div class="alert alert-primary gosign" >
            <a class="alert-link" href="./sign-up.php">New Account</a>
            <i class="bi bi-arrow-right"></i>

        </div>
    </div>

    <?php 
   
   if(isset($_POST['login'])){
    $sql=$database->prepare(("SELECT * FROM sign_up WHERE sign_email=:email AND sign_password=:password"));
    $sql->bindParam("email",$_POST['mail']);
    $sql->bindParam("password",$_POST['password']);
    $sql->execute();
    if($sql->rowCount() === 1){
        $data = $sql->fetchObject();
        if($data->activated==="1"){
            echo "hello sir!" . $data->sign_FirstName;
            $_SESSION['mail'] = $data->sign_email;
            $_SESSION['password'] = $data->sign_password;
            $_SESSION['name'] = $data->sign_FirstName;
            if($data->Rule ==="user"){
                echo "<h1>user</h1>";
                // header("location:home.php",true);
            }elseif($data->Rule ==="admin"){
                // header("location:admin/home.php",true);
                echo "<h2>admin</h2>";
            }
        }else{
            echo'<div class="alert alert-danger" role="alert">please active your account</div>';
        }
        }else{
            echo'<div class="alert alert-danger" role="alert">
            this acc is not correct</div>';
        }
    }
      ?>

    <?php include"../fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/java.js"></script>
<script src="../js/vue.js"></script>
<script src="../js/vuehome.js"></script>


</html>