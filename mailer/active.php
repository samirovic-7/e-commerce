<?php include"../db.php" ?>

<?php

if(isset($_GET['activecode'])){

    $sql=$database->prepare(("SELECT code FROM sign_up WHERE code=:code"));
    $sql->bindParam("code",$_GET['activecode']);
    $sql->execute();

    if($sql->rowCount()>0){
        $update = $database->prepare("UPDATE sign_up SET code=:newCode,activated=true WHERE code=:code");

        $code =md5(date("h:i:s"));

        $update->bindParam("newCode",$code);
        $update->bindParam("code",$_GET['activecode']);

        if($update->execute()){
            echo "تم التحقق من الاكونت";
        }
    }

}


?>