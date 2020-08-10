 
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
     <h1 style="color:rgb(17, 152, 236);">update items</h1><hr/>
          <h4>  <a href="admin.php" style="text-decoration:none; color:rgb(17, 152, 236);">view items</a></h4>

        </div>

        <?php
        include('db.php');
        $id=$_GET['id'];
        $name="";
        $code="";
        $price="";
        
        $query="SELECT name, code, price FROM products WHERE code='$id'"; 
        $result=mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($result)){
          $name=$row["name"];
          $code=$row["code"];
          $price=$row["price"];
        
        }
        
        
        
        
        
        ?>

        <div class="lgn">
    

            <div action="">
                <div class="container">
                <form action="updatep.php" method="POST">
                  <table border="0" width=100% height=100%>
                      
                  <tr>
                   <td> <label><h2>name of the product</h2></label></td>
                  <td>  <input type="text" name="name" value="<?php echo $name; ?>"   required><br></td></tr>
                   <tr>
                  <td>  <label><h2> product detail </h2></label></td>
                   <td> <input type="text" name="code" value="<?php echo $code; ?>" required><br></td></tr>
                    <tr>
                    <td><label><h2>price of the product</h2></label></td>
                    <td><input type="text" name="price" value="<?php echo $price; ?>" required><br></td></tr>
                    
                  

                   
                   
                    <tr>
                      <td><button type="submit" name="update" value="Login" class="update">update</a></button></td>
                     </tr>


                    </table>



                     
                    </form>
                  

                </div>
                









                
            </div>
        </div>
</body>