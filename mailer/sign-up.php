<?php include"../db.php" ?>
<?php include"../fixed_temp/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sign.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include"../fixed_temp/header.php" ?>


    <div class="cen">

        <div class="container flu">
                <form class="row g-3" method="POST">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="First_name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nake Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nake Name" name="nakename">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Date</label>
                        <input type="date" placeholder="date" class="form-control" id="inputPassword4" name="date">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" placeholder="Pass" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-md-7">
                        <label for="Your Photo" class="form-label">Your Photo</label>
                        <input type="file" placeholder="Pass" class="form-control" id="Your Photo" name="image">
                    </div>
                    <div class="col-md-3">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Postcode / zip</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                    </div>
                    <div  class="col-md-7">
                        <label for="inputState" class="form-label">Country/State</label>
                        <select id="inputState" class="form-select">
                           <option hidden>Choose...</option>
                            <option>Cairo</option>
                             <option>Giza</option>
                            <option>6-October</option>
                              <option>Qalubia</option>
                                  <option>Shraqia</option>
                                <option>Aswan</option>
                                       <option>Alexandria</option>
          </select>
                    </div>

                   
                    <div class="Sign"><br>
                        <button type="submit" class="btn btn-dark button buttonofSign" name="sign">Sign-up</button>
                    </div>
                </form>

            </div>
        </div>

    <?php
        if(isset($_POST['sign'])){

            $check=$database->prepare("SELECT * FROM sign_up WHERE sign_email=:mail");
            $email=$_POST['email'];
            $check->bindParam("mail",$email);
            $check->execute();
            if($check->rowCount()>0){
                echo'<div class="alert alert-danger alert" role="alert">
                already signed this email!
              </div>';
            }else{
                $sql=$database->prepare("INSERT INTO sign_up(sign_FirstName,sign_LastName,sign_nickName,sign_email,sign_password,sign_age,sign_city,sign_zip,code,Rule) VALUES(:first,:last,:nake,:mail,:pass,:date,:city,:zip,:code,'user')");

                $first_name = $_POST["First_name"];
                $last_name = $_POST["last_name"];
                $nake_name = $_POST["nakename"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                $date = $_POST["date"];
                $city = $_POST["city"];
                $zip = $_POST["zip"];
                $code =md5(date("h:i:s"));
    
                $sql->bindParam("first",$first_name);
                $sql->bindParam("last",$last_name);
                $sql->bindParam("nake",$nake_name);
                $sql->bindParam("mail",$email);
                $sql->bindParam("pass",$pass);
                $sql->bindParam("date",$date);
                $sql->bindParam("city",$city);
                $sql->bindParam("zip",$zip);
                $sql->bindParam("code",$code);
    
               if($sql->execute()){
                require_once"mail.php";

                
                $mail->addAddress($email);         
                
                
                $mail->Subject = 'Active Code';
                $mail->Body    = '<div>Active Code link</div><br>'.'<a href="http://localhost/project/e-commerce/mailer/active.php?activecode='.$code.'">
                http://localhost/project/e-commerce/mailer/active.php?activecode='.$code.'
                </a>';

                $mail->setFrom('mohamedsamirovich@gmail.com', 'samirovic`');

                $mail->send();
               }
            }

      
        }
    ?>
    <?php include"../fixed_temp/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
<script src="../js/java.js"></script>
<script src="../js/vue.js"></script>
<script src="../js/vuehome.js"></script>

</html>