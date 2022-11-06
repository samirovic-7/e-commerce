<?php include"db.php" ?>
<?php 
function navbar(){
global $database;
                       
                       $sql = $database->prepare("SELECT * FROM all_product");
                       $sql->execute();
                       foreach ($sql as $key) {
                           $name = $key['Product_name'];
                           echo'
                           <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="./'.$name.'.php">'.$name.'</a>
                       </li>';
                       };
};

function navbar_admin(){
    global $database;
                           
                           $sql = $database->prepare("SELECT * FROM all_product WHERE Product_name not in('ShopAll')");
                           $sql->execute();
                           foreach ($sql as $key) {
                               $name = $key['Product_name'];
                               echo'
                               <li class="nav-item">
                               <a class="nav-link" aria-current="page" href="./'.$name.'.php">'.$name.'</a>
                           </li>';
                           };
    };
    