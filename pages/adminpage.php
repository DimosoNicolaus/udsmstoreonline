
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
    <meta http-equiv="X-UA-compatible" content="ie">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>additem</title>
</head>

<body>

    <div class="box">
        <div class="nav">
     <h1 style="color:rgb(17, 152, 236);">add item to the store</h1><hr>
          <h4>  <a href="admin.php" style="text-decoration:none; color:rgb(17, 152, 236);">view items</a></h4>

        </div>

        <?php
        $confi="";
        if(isset($_POST['submit'])){
           
            include('db.php');



        try{
            

            $name=($_POST['pname']);
            $price=($_POST['price']);
            $code=($_POST['code']);
            
            $target_dir="product-images/";
           $target_file=$target_dir.basename($_FILES['image']['name']);
           move_uploaded_file($_FILES['image']["tmp_name"],$target_file);
           
            $query="INSERT INTO products (name ,code, price,image) VALUES ('$name','$code','$price','$target_file')";
            $stmt=$con->prepare($query);

           
            if($stmt->execute()){
            echo "record was saved";
            }
            else{
               echo "unable to save" ;
            }
        }

        catch(PDOException $exception){
            die('ERROR:'.$exception->getMessage());
        }
    }

    

        ?>

        <div class="lgn">
    

            <div action="">
                <div class="container">
                <form action="" method="POST"  enctype="multipart/form-data">
                  <table border="0" width=100% height=100%>
                      
                  <tr>
                   <td> <label><h2>name of the product</h2></label></td>
                  <td>  <input type="text" name='pname'  required><br></td></tr>
                   <tr>
                  <td>  <label><h2> product detail </h2></label></td>
                   <td> <input type="text" name='code'  required><br></td></tr>
                    <tr>
                    <td><label><h2>price of the product</h2></label></td>
                    <td><input type="text" name='price' required><br></td></tr>
                    
                    <tr>
                   <td> <label><h2>image of the product</h2></label></td>
                    <td><input type="file" name="image" required><br>
                        <label for="customfile"></td>
                      </tr>
                    


                   
                   
                    <tr>
                      <td><button type="submit" name="submit"  class="add" >add</a></button></td>
                     </tr>

                    
                    </table>
                    </form>
                </div>
                









                
            </div>
        </div>
</body>