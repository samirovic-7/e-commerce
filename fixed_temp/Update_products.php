<?php include"db.php" ?>
<?php 
function labtops_update(){
global $database;
                       
if(isset($_GET['edit'])){
    $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
    $sqle->bindParam("id",$_GET['edit']);
    $sqle->execute();
    foreach ($sqle as $key) {
    echo '
    <form class="row g-3 form" method="POST" >
            <div class="mb-3">
                <label for="formFile" class="form-label">Change The Image</label>
                <input class="form-control" type="file" id="formFile"  name="image">
            </div>


            <div class="col-md-6 inplab ">
                <label for="inputName" class="form-label ">name of product</label>
                <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
            </div>


          
                <div class="col-md-12 inplab ">
                    <label for="inputTitle" class="form-label ">Title of product</label>
                    <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                </div>
    
                <div class="col-md-6 inplab ">
                    <label for="inputPrice" class="form-label ">Price of product</label>
                    <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                </div>
    
                <div class="col-md-6 inplab ">
                    <label for="inputRate" class="form-label ">Rate of product</label>
                    <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                </div>
                <div class="col-md-12 inplab">
    
                    <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                </div>
            </form>'; }}

            if(isset($_POST['UPDATE'])){
                $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                $sqla->bindParam("na",$_POST['name']);
                $sqla->bindParam("tit",$_POST['title']);
                $sqla->bindParam("pri",$_POST['price']);
                $sqla->bindParam("ra",$_POST['rate']);
                $sqla->bindParam("img",$_POST['image']);
                $sqla->bindParam("id",$_POST['UPDATE']);
                $sqla->execute();
                header("refresh:.1;url=labtops.php");
            }
};
function audio_update(){
    global $database;
                           
    if(isset($_GET['edit'])){
        $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
        $sqle->bindParam("id",$_GET['edit']);
        $sqle->execute();
        foreach ($sqle as $key) {
        echo '
        <form class="row g-3 form" method="POST" >
                <div class="mb-3">
                    <label for="formFile" class="form-label">Change The Image</label>
                    <input class="form-control" type="file" id="formFile"  name="image">
                </div>
    
    
                <div class="col-md-6 inplab ">
                    <label for="inputName" class="form-label ">name of product</label>
                    <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                </div>
    
    
              
                    <div class="col-md-12 inplab ">
                        <label for="inputTitle" class="form-label ">Title of product</label>
                        <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                    </div>
        
                    <div class="col-md-6 inplab ">
                        <label for="inputPrice" class="form-label ">Price of product</label>
                        <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                    </div>
        
                    <div class="col-md-6 inplab ">
                        <label for="inputRate" class="form-label ">Rate of product</label>
                        <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                    </div>
                    <div class="col-md-12 inplab">
        
                        <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                    </div>
                </form>'; }}
    
                if(isset($_POST['UPDATE'])){
                    $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                    $sqla->bindParam("na",$_POST['name']);
                    $sqla->bindParam("tit",$_POST['title']);
                    $sqla->bindParam("pri",$_POST['price']);
                    $sqla->bindParam("ra",$_POST['rate']);
                    $sqla->bindParam("img",$_POST['image']);
                    $sqla->bindParam("id",$_POST['UPDATE']);
                    $sqla->execute();
                    header("refresh:.1;url=labtops.php");
                }
    };
    
function camera_update(){
    global $database;
                           
    if(isset($_GET['edit'])){
        $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
        $sqle->bindParam("id",$_GET['edit']);
        $sqle->execute();
        foreach ($sqle as $key) {
        echo '
        <form class="row g-3 form" method="POST" >
                <div class="mb-3">
                    <label for="formFile" class="form-label">Change The Image</label>
                    <input class="form-control" type="file" id="formFile"  name="image">
                </div>
    
    
                <div class="col-md-6 inplab ">
                    <label for="inputName" class="form-label ">name of product</label>
                    <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                </div>
    
    
              
                    <div class="col-md-12 inplab ">
                        <label for="inputTitle" class="form-label ">Title of product</label>
                        <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                    </div>
        
                    <div class="col-md-6 inplab ">
                        <label for="inputPrice" class="form-label ">Price of product</label>
                        <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                    </div>
        
                    <div class="col-md-6 inplab ">
                        <label for="inputRate" class="form-label ">Rate of product</label>
                        <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                    </div>
                    <div class="col-md-12 inplab">
        
                        <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                    </div>
                </form>'; }}
    
                if(isset($_POST['UPDATE'])){
                    $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                    $sqla->bindParam("na",$_POST['name']);
                    $sqla->bindParam("tit",$_POST['title']);
                    $sqla->bindParam("pri",$_POST['price']);
                    $sqla->bindParam("ra",$_POST['rate']);
                    $sqla->bindParam("img",$_POST['image']);
                    $sqla->bindParam("id",$_POST['UPDATE']);
                    $sqla->execute();
                    header("refresh:.1;url=labtops.php");
                }
    };

    function mobil_update(){
        global $database;
                               
        if(isset($_GET['edit'])){
            $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
            $sqle->bindParam("id",$_GET['edit']);
            $sqle->execute();
            foreach ($sqle as $key) {
            echo '
            <form class="row g-3 form" method="POST" >
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Change The Image</label>
                        <input class="form-control" type="file" id="formFile"  name="image">
                    </div>
        
        
                    <div class="col-md-6 inplab ">
                        <label for="inputName" class="form-label ">name of product</label>
                        <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                    </div>
        
        
                  
                        <div class="col-md-12 inplab ">
                            <label for="inputTitle" class="form-label ">Title of product</label>
                            <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                        </div>
            
                        <div class="col-md-6 inplab ">
                            <label for="inputPrice" class="form-label ">Price of product</label>
                            <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                        </div>
            
                        <div class="col-md-6 inplab ">
                            <label for="inputRate" class="form-label ">Rate of product</label>
                            <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                        </div>
                        <div class="col-md-12 inplab">
            
                            <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                        </div>
                    </form>'; }}
        
                    if(isset($_POST['UPDATE'])){
                        $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                        $sqla->bindParam("na",$_POST['name']);
                        $sqla->bindParam("tit",$_POST['title']);
                        $sqla->bindParam("pri",$_POST['price']);
                        $sqla->bindParam("ra",$_POST['rate']);
                        $sqla->bindParam("img",$_POST['image']);
                        $sqla->bindParam("id",$_POST['UPDATE']);
                        $sqla->execute();
                        header("refresh:.1;url=labtops.php");
                    }
        };
        function pc_update(){
            global $database;
                                   
            if(isset($_GET['edit'])){
                $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                $sqle->bindParam("id",$_GET['edit']);
                $sqle->execute();
                foreach ($sqle as $key) {
                echo '
                <form class="row g-3 form" method="POST" >
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Change The Image</label>
                            <input class="form-control" type="file" id="formFile"  name="image">
                        </div>
            
            
                        <div class="col-md-6 inplab ">
                            <label for="inputName" class="form-label ">name of product</label>
                            <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                        </div>
            
            
                      
                            <div class="col-md-12 inplab ">
                                <label for="inputTitle" class="form-label ">Title of product</label>
                                <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                            </div>
                
                            <div class="col-md-6 inplab ">
                                <label for="inputPrice" class="form-label ">Price of product</label>
                                <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                            </div>
                
                            <div class="col-md-6 inplab ">
                                <label for="inputRate" class="form-label ">Rate of product</label>
                                <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                            </div>
                            <div class="col-md-12 inplab">
                
                                <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                            </div>
                        </form>'; }}
            
                        if(isset($_POST['UPDATE'])){
                            $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                            $sqla->bindParam("na",$_POST['name']);
                            $sqla->bindParam("tit",$_POST['title']);
                            $sqla->bindParam("pri",$_POST['price']);
                            $sqla->bindParam("ra",$_POST['rate']);
                            $sqla->bindParam("img",$_POST['image']);
                            $sqla->bindParam("id",$_POST['UPDATE']);
                            $sqla->execute();
                            header("refresh:.1;url=labtops.php");
                        }
            };
            function printer_update(){
                global $database;
                                       
                if(isset($_GET['edit'])){
                    $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                    $sqle->bindParam("id",$_GET['edit']);
                    $sqle->execute();
                    foreach ($sqle as $key) {
                    echo '
                    <form class="row g-3 form" method="POST" >
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Change The Image</label>
                                <input class="form-control" type="file" id="formFile"  name="image">
                            </div>
                
                
                            <div class="col-md-6 inplab ">
                                <label for="inputName" class="form-label ">name of product</label>
                                <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                            </div>
                
                
                          
                                <div class="col-md-12 inplab ">
                                    <label for="inputTitle" class="form-label ">Title of product</label>
                                    <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                                </div>
                    
                                <div class="col-md-6 inplab ">
                                    <label for="inputPrice" class="form-label ">Price of product</label>
                                    <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                                </div>
                    
                                <div class="col-md-6 inplab ">
                                    <label for="inputRate" class="form-label ">Rate of product</label>
                                    <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                                </div>
                                <div class="col-md-12 inplab">
                    
                                    <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                                </div>
                            </form>'; }}
                
                            if(isset($_POST['UPDATE'])){
                                $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                                $sqla->bindParam("na",$_POST['name']);
                                $sqla->bindParam("tit",$_POST['title']);
                                $sqla->bindParam("pri",$_POST['price']);
                                $sqla->bindParam("ra",$_POST['rate']);
                                $sqla->bindParam("img",$_POST['image']);
                                $sqla->bindParam("id",$_POST['UPDATE']);
                                $sqla->execute();
                                header("refresh:.1;url=labtops.php");
                            }
                };
                function table_update(){
                    global $database;
                                           
                     if(isset($_GET['edit'])){
                        $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                        $sqle->bindParam("id",$_GET['edit']);
                        $sqle->execute();
                        foreach ($sqle as $key) {
                        echo '
                        <form class="row g-3 form" method="POST" >
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Change The Image</label>
                                    <input class="form-control" type="file" id="formFile"  name="image">
                                </div>
                    
                    
                                <div class="col-md-6 inplab ">
                                    <label for="inputName" class="form-label ">name of product</label>
                                    <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                                </div>
                    
                    
                              
                                    <div class="col-md-12 inplab ">
                                        <label for="inputTitle" class="form-label ">Title of product</label>
                                        <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                                    </div>
                        
                                    <div class="col-md-6 inplab ">
                                        <label for="inputPrice" class="form-label ">Price of product</label>
                                        <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                                    </div>
                        
                                    <div class="col-md-6 inplab ">
                                        <label for="inputRate" class="form-label ">Rate of product</label>
                                        <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                                    </div>
                                    <div class="col-md-12 inplab">
                        
                                        <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                                    </div>
                                </form>'; }}
                    
                                if(isset($_POST['UPDATE'])){
                                    $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                                    $sqla->bindParam("na",$_POST['name']);
                                    $sqla->bindParam("tit",$_POST['title']);
                                    $sqla->bindParam("pri",$_POST['price']);
                                    $sqla->bindParam("ra",$_POST['rate']);
                                    $sqla->bindParam("img",$_POST['image']);
                                    $sqla->bindParam("id",$_POST['UPDATE']);
                                    $sqla->execute();
                                    header("refresh:.1;url=labtops.php");
                                }
                    };
                    function tv_update(){
                        global $database;
                                               
                        if(isset($_GET['edit'])){
                            $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                            $sqle->bindParam("id",$_GET['edit']);
                            $sqle->execute();
                            foreach ($sqle as $key) {
                            echo '
                            <form class="row g-3 form" method="POST" >
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Change The Image</label>
                                        <input class="form-control" type="file" id="formFile"  name="image">
                                    </div>
                        
                        
                                    <div class="col-md-6 inplab ">
                                        <label for="inputName" class="form-label ">name of product</label>
                                        <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                                    </div>
                        
                        
                                  
                                        <div class="col-md-12 inplab ">
                                            <label for="inputTitle" class="form-label ">Title of product</label>
                                            <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                                        </div>
                            
                                        <div class="col-md-6 inplab ">
                                            <label for="inputPrice" class="form-label ">Price of product</label>
                                            <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                                        </div>
                            
                                        <div class="col-md-6 inplab ">
                                            <label for="inputRate" class="form-label ">Rate of product</label>
                                            <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                                        </div>
                                        <div class="col-md-12 inplab">
                            
                                            <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                                        </div>
                                    </form>'; }}
                        
                                    if(isset($_POST['UPDATE'])){
                                        $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                                        $sqla->bindParam("na",$_POST['name']);
                                        $sqla->bindParam("tit",$_POST['title']);
                                        $sqla->bindParam("pri",$_POST['price']);
                                        $sqla->bindParam("ra",$_POST['rate']);
                                        $sqla->bindParam("img",$_POST['image']);
                                        $sqla->bindParam("id",$_POST['UPDATE']);
                                        $sqla->execute();
                                        header("refresh:.1;url=labtops.php");
                                    }
                        };
                        function video_update(){
                            global $database;
                                                   
                            if(isset($_GET['edit'])){
                                $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                                $sqle->bindParam("id",$_GET['edit']);
                                $sqle->execute();
                                foreach ($sqle as $key) {
                                echo '
                                <form class="row g-3 form" method="POST" >
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Change The Image</label>
                                            <input class="form-control" type="file" id="formFile"  name="image">
                                        </div>
                            
                            
                                        <div class="col-md-6 inplab ">
                                            <label for="inputName" class="form-label ">name of product</label>
                                            <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                                        </div>
                            
                            
                                      
                                            <div class="col-md-12 inplab ">
                                                <label for="inputTitle" class="form-label ">Title of product</label>
                                                <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                                            </div>
                                
                                            <div class="col-md-6 inplab ">
                                                <label for="inputPrice" class="form-label ">Price of product</label>
                                                <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                                            </div>
                                
                                            <div class="col-md-6 inplab ">
                                                <label for="inputRate" class="form-label ">Rate of product</label>
                                                <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                                            </div>
                                            <div class="col-md-12 inplab">
                                
                                                <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                                            </div>
                                        </form>'; }}
                            
                                        if(isset($_POST['UPDATE'])){
                                            $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                                            $sqla->bindParam("na",$_POST['name']);
                                            $sqla->bindParam("tit",$_POST['title']);
                                            $sqla->bindParam("pri",$_POST['price']);
                                            $sqla->bindParam("ra",$_POST['rate']);
                                            $sqla->bindParam("img",$_POST['image']);
                                            $sqla->bindParam("id",$_POST['UPDATE']);
                                            $sqla->execute();
                                            header("refresh:.1;url=labtops.php");
                                        }
                            };
                            function wireless_update(){
                                global $database;
                                                       
                                if(isset($_GET['edit'])){
                                    $sqle=$database->prepare("SELECT * FROM labtops WHERE Labtops_id=:id");
                                    $sqle->bindParam("id",$_GET['edit']);
                                    $sqle->execute();
                                    foreach ($sqle as $key) {
                                    echo '
                                    <form class="row g-3 form" method="POST" >
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Change The Image</label>
                                                <input class="form-control" type="file" id="formFile"  name="image">
                                            </div>
                                
                                
                                            <div class="col-md-6 inplab ">
                                                <label for="inputName" class="form-label ">name of product</label>
                                                <input type="text" class="form-control input "  name="name" id="inputName" value="'.$key['Labtops_name'].'">
                                            </div>
                                
                                
                                          
                                                <div class="col-md-12 inplab ">
                                                    <label for="inputTitle" class="form-label ">Title of product</label>
                                                    <input type="text" class="form-control input " name="title" id="inputTitle"  value="'.$key['Labtops_title'].'">
                                                </div>
                                    
                                                <div class="col-md-6 inplab ">
                                                    <label for="inputPrice" class="form-label ">Price of product</label>
                                                    <input type="number" class="form-control input " name="price" id="inputPrice"  value="'.$key['Labtops_price'].'">
                                                </div>
                                    
                                                <div class="col-md-6 inplab ">
                                                    <label for="inputRate" class="form-label ">Rate of product</label>
                                                    <input type="number" class="form-control input " name="rate" id="inputRate"  value="'.$key['Labtops_rate'].'">
                                                </div>
                                                <div class="col-md-12 inplab">
                                    
                                                    <button type="submit" class="btn btn-primary buttoncontact"  value="'.$key['Labtops_id'].'" name="UPDATE">Update</button>
                                                </div>
                                            </form>'; }}
                                
                                            if(isset($_POST['UPDATE'])){
                                                $sqla=$database->prepare("UPDATE labtops SET Labtops_name=:na , Labtops_title=:tit , Labtops_image=:img , Labtops_price=:pri , Labtops_rate=:ra  WHERE Labtops_id=:id");
                                                $sqla->bindParam("na",$_POST['name']);
                                                $sqla->bindParam("tit",$_POST['title']);
                                                $sqla->bindParam("pri",$_POST['price']);
                                                $sqla->bindParam("ra",$_POST['rate']);
                                                $sqla->bindParam("img",$_POST['image']);
                                                $sqla->bindParam("id",$_POST['UPDATE']);
                                                $sqla->execute();
                                                header("refresh:.1;url=labtops.php");
                                            }
                                };
                                