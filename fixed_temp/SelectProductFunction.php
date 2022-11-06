<?php include"db.php" ?>
<?php
function Audio(){
    global $database;
    if(!isset($_GET['filter'])){

    $sql = $database->prepare("SELECT * FROM audio");
    $sql->execute();
    foreach ($sql as $key) {
    $id = $key['Audio_id'];
    $name = $key['Audio_name'];
    $title = $key['Audio_title'];
    $price = $key['Audio_price'];
    $rate = $key['Audio_rate'];
    $image = $key['Audio_image'];
    echo'

    <div class="col">
    <div class="card h-100 colgr">
        <img src="./img/Audio/'.$image.'" class="card-img-top" alt="...">
        <div class="price">$'.$price.'</div>
        <div class="rate">'.$rate.'</div>

        <div class="card-body">
            <h5 class="card-title">'.$name.'</h5>
            <p class="card-text">'.$title.'</p>
        </div>
        <form method="POST">
        <div class="heartcard" id="heartcard">
        <button class="buttHeart" type="submit" name="AddProductToFavour" value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>  
        </div>

        <button class="btn btn-primary buttoncart" type="submit"   name="Add"   value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
        </form>
    </div>
    </div>';   
  };
};

    if(isset($_POST['SearchButt'])){
             
echo "resylt";

    // $sql=$database->prepare("SELECT * FROM audio WHERE Audio_name LIKE :name OR Audio_title LIKE :title");
    // $result = "%".$_POST['SearchInput']."%";
    // $sql->bindParam("name",$result);
    // $sql->bindParam("title",$result);
    // $sql->execute();
    
    // foreach ($sql as $key) {
    //     $id = $key['Audio_id'];
    //     $name = $key['Audio_name'];
    //     $title = $key['Audio_title'];
    //     $price = $key['Audio_price'];
    //     $rate = $key['Audio_rate'];
    //     $image = $key['Audio_image'];
    //     echo'
    //     <div class="col">
    //     <div class="card h-100 colgr">
    //         <img src="./img/Audio/'.$image.'" class="card-img-top" alt="...">
    //         <div class="price">$'.$price.'</div>
    //         <div class="rate">'.$rate.'</div>
    
    //         <div class="card-body">
    //             <h5 class="card-title">'.$name.'</h5>
    //             <p class="card-text">'.$title.'</p>
    //         </div>
    //         <form method="POST">
    //         <div class="heartcard" id="heartcard">
    //         <button class="buttHeart" type="submit" name="AddProductToFavour" value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>  
    //         </div>
    
    //         <button class="btn btn-primary buttoncart" type="submit"   name="Add"   value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
    //         </form>
    //     </div>
    //     </div>';   
    // };
    
    }
};


function Camera(){
    global $database;
    if(!isset($_GET['filter'])){

    $sql = $database->prepare("SELECT * FROM camera");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Camera_id'];
        $name = $key['Camera_name'];
        $title = $key['Camera_title'];
        $price = $key['Camera_price'];
        $rate = $key['Camera_rate'];
        $image = $key['Camera_image'];
     
        echo'                   

        <div class="col">
        <div class="card h-100 colgr">
        <img src="img/camera/'.$image.'" class="card-img-top" alt="...">
        <div class="price"  name="nam" value="nam">$'.$price.'</div>
            <div class="rate"  name="nam" value="nam">'.$rate.'</div>
            <div class="card-body">
                <h5 class="card-title" name="nam" value="nam">'.$name.'</h5>   
                <p class="card-text"  name="nam" value="nam">'.$title.'</p>
            </div>  
            

            <div class="heartcard" id="heartcard">

            <form  method="post">

            <button class="buttHeart"  name="AddProductToFavour"  type="submit" value="'.$id.'"><i class="bi bi-heart-fill cartheart" id="cartheart"></i></button>
            </div>

            <button class="btn btn-primary buttoncart" name="Add" type="submit" id=butt value="'.$id.'"  >Add Card <i class="bi bi-plus-circle-dotted"></i></button>

        
            </form>

        </div>
    </div>';

    };
};
    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM camera WHERE Camera_name LIKE :name OR Camera_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    
    foreach ($sql as $key) {
        $id = $key['Camera_id'];
        $name = $key['Camera_name'];
        $title = $key['Camera_title'];
        $price = $key['Camera_price'];
        $rate = $key['Camera_rate'];
        $image = $key['Camera_image'];
     
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
    
    }
};


function laptops(){
    global $database;
    if(!isset($_GET['filterType'])){
        if(!isset($_GET['filterRam'])){
            if(!isset($_GET['filterColor'])){

    $sql = $database->prepare("SELECT * FROM labtops");
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

    };};};
};

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM labtops WHERE Labtops_name LIKE :name OR Labtops_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
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

    
    }
};

function mobile(){
    global $database;
    if(!isset($_GET['filterType'])){
        if(!isset($_GET['filterStorage'])){
            if(!isset($_GET['filterColor'])){

    $sql = $database->prepare("SELECT * FROM mobile");
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

    };};};}

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM mobile WHERE mobile_name LIKE :name OR mobile_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
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

    
    }
};

function PC(){
    global $database;
    
    if(!isset($_GET['filter'])){

    $sql = $database->prepare("SELECT * FROM PC");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['pc_id'];
        $name = $key['pc_name'];
        $title = $key['pc_title'];
        $price = $key['pc_price'];
        $rate = $key['pc_rate'];
        $image = $key['pc_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
        <img src="img/PC/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit" name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };
}

    if(isset($_POST['SearchButt'])){
             
             $sql=$database->prepare("SELECT * FROM PC WHERE pc_name LIKE :name OR pc_title LIKE :title");
             $result = "%".$_POST['SearchInput']."%";
             $sql->bindParam("name",$result);
             $sql->bindParam("title",$result);
             $sql->execute();
             
             foreach ($sql as $key) {
                $id = $key['pc_id'];
                $name = $key['pc_name'];
                $title = $key['pc_title'];
                $price = $key['pc_price'];
                $rate = $key['pc_rate'];
                $image = $key['pc_image'];
                echo'
                <div class="col">
                <div class="card h-100 colgr">
                <img src="img/PC/'.$image.'" class="card-img-top" alt="...">
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
        
                    <button class="btn btn-primary buttoncart" type="submit" name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
                    </form>
                </div>
            </div>';
        
        };
             
             }

};

function printer(){
    global $database;

    if(!isset($_GET['filter'])){
    $sql = $database->prepare("SELECT * FROM printer");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Printer_id'];
        $name = $key['Printer_name'];
        $title = $key['Printer_title'];
        $price = $key['Printer_price'];
        $rate = $key['Printer_rate'];
        $image = $key['Printer_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/printer/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit" name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';
    };

    };

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM printer WHERE Printer_name LIKE :name OR Printer_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    

    foreach ($sql as $key) {
        $id = $key['Printer_id'];
        $name = $key['Printer_name'];
        $title = $key['Printer_title'];
        $price = $key['Printer_price'];
        $rate = $key['Printer_rate'];
        $image = $key['Printer_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/printer/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit" name="Add" value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };
    
    }
};

function vedio(){
    global $database;

    if(!isset($_GET['filter'])){
    $sql = $database->prepare("SELECT * FROM vedio_game");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['vedio_game_id'];
        $name = $key['vedio_game_name'];
        $title = $key['vedio_game_title'];
        $price = $key['vedio_game_price'];
        $rate = $key['vedio_game_rate'];
        $image = $key['vedio_game_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/vediogame/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"   name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
            </div>
    </div>';

    };
};

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM vedio_game WHERE vedio_game_name LIKE :name OR vedio_game_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['vedio_game_id'];
        $name = $key['vedio_game_name'];
        $title = $key['vedio_game_title'];
        $price = $key['vedio_game_price'];
        $rate = $key['vedio_game_rate'];
        $image = $key['vedio_game_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/vediogame/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"   name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
            </div>
    </div>';

    };

    
    }
};

function table(){
    global $database;

    if(!isset($_GET['filter'])){
    $sql = $database->prepare("SELECT * FROM tables");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Table_id'];
        $name = $key['Table_name'];
        $title = $key['Table_title'];
        $price = $key['Table_price'];
        $rate = $key['Table_rate'];
        $image = $key['Table_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/table/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit" name="Add"  value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };
    };

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM tables WHERE Table_name LIKE :name OR Table_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Table_id'];
        $name = $key['Table_name'];
        $title = $key['Table_title'];
        $price = $key['Table_price'];
        $rate = $key['Table_rate'];
        $image = $key['Table_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/table/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit" name="Add"  value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';


    };

    
    }
};

function tv(){
    global $database;
    if(!isset($_GET['filterType'])){

    if(!isset($_GET['filterSize'])){
    $sql = $database->prepare("SELECT * FROM tv");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['tv_id'];
        $name = $key['tv_name'];
        $title = $key['tv_title'];
        $price = $key['tv_price'];
        $rate = $key['tv_rate'];
        $image = $key['tv_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/tv/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"   name="Add"  value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };
};};

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM tv WHERE tv_name LIKE :name OR tv_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['tv_id'];
        $name = $key['tv_name'];
        $title = $key['tv_title'];
        $price = $key['tv_price'];
        $rate = $key['tv_rate'];
        $image = $key['tv_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/tv/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"   name="Add"  value="'.$id.'" >Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';

    };

    
    }
};


function wireless(){
    global $database;
    if(!isset($_GET['filter'])){

    $sql = $database->prepare("SELECT * FROM wireless_device");
    $sql->execute();
    foreach ($sql as $key) {
        $id = $key['Wireless_device_id'];
        $name = $key['Wireless_device_name'];
        $title = $key['Wireless_device_title'];
        $price = $key['Wireless_device_price'];
        $rate = $key['Wireless_device_rate'];
        $image = $key['Wireless_device_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/Wirelessdevices/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"  name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';
    }

    };

    if(isset($_POST['SearchButt'])){
             
    $sql=$database->prepare("SELECT * FROM wireless_device WHERE Wireless_device_name LIKE :name OR Wireless_device_title LIKE :title");
    $result = "%".$_POST['SearchInput']."%";
    $sql->bindParam("name",$result);
    $sql->bindParam("title",$result);
    $sql->execute();
    
    foreach ($sql as $key) {
        $id = $key['Wireless_device_id'];
        $name = $key['Wireless_device_name'];
        $title = $key['Wireless_device_title'];
        $price = $key['Wireless_device_price'];
        $rate = $key['Wireless_device_rate'];
        $image = $key['Wireless_device_image'];
        echo'
        <div class="col">
        <div class="card h-100 colgr">
            <img src="./img/Wirelessdevices/'.$image.'" class="card-img-top" alt="...">
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

            <button class="btn btn-primary buttoncart" type="submit"  name="Add"  value="'.$id.'">Add Card <i class="bi bi-plus-circle-dotted"></i></button>
            </form>
        </div>
    </div>';
    

    };
    
    }
};
