<?php

include('db.php');

?>


<!doctype html>
<html>
<head>
<title>udsm shoping store</title>
<meta charset="utf-8" />
<meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
<meta http-equiv="X-UA-compatible" content="ie">
<link rel='stylesheet' href="../css/style.css" type='text/css' media='all' />
</head>
<body>
    <h1 style="color:rgb(17, 152, 236);"><i>Welcome to the administartor dashboard</i></h1><hr>
    <?php
    $result = mysqli_query($con,"SELECT * FROM `products`"); ?>

<?php while($row = mysqli_fetch_assoc($result)){  ?>
          <div class='product_wrapper'>
          <form method='POST' action=''>
          <input type='hidden' name='code' value="<?php echo $row['id']; ?>" />
          <div class='image'><img src="<?php echo $row['image']; ?>" width=152px height=98px /></div>
          <div class='name'><?php echo $row['name'];?></div>
             <div class='price'><?php echo $row['price']?>  Tshs</div>
          <input type='hidden' name='action' value='remove' />
           <a href="delete.php?id=<?php echo $row['id']; ?>"  style="text-decoration:none;" class='delete' name='delete'>delete</a>
           <!--<a href="edit.php?id=<?php echo $row['id']; ?>"  style="text-decoration:none;" class='edit' name='edit'>edit</a>-->
          </form>
          
          </div>
   <?php         
    }
mysqli_close($con);



?>




<a href="adminpage.php" style="text-decoration:none;"><button type='submit' class='add'>add new product</button>
<div style="width:100%; clear:both;">
<br><br>
<h1><a href=logout.php style="text-decoration:none; color:rgb(17, 152, 236);" >logout</a></h1>
</div>




</body>
</html>