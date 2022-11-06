<?php include"db.php" ?>

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
                       
                       $sql = $database->prepare("SELECT * FROM all_product  WHERE Product_name not in ('ShopAll')");
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
            <a href=""><img src="./img/credit-card-851506_640.jpg" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="./img//american-express-89024_640.jpg" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="./img/master-card-2962135_640.png" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="./img/paypal-784404_640.png" class="partimg"></a>
        </div>
        <div class="masterimg">
            <a href=""><img src="./img/visa-2623015_640.png" class="partimg"></a>
        </div>
    </div>
    <p class="p">©2022 by mohamed samir Proudly created with <a href="#">samirovic`</a></p>
    </div>