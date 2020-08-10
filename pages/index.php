<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>

<title>udsm shoping store</title>
<meta charset="utf-8" />
<meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
<meta http-equiv="X-UA-compatible" content="ie">
<link rel='stylesheet' href='../css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:1000px; margin:50 auto;">

<h1 style="color:rgb(17, 152, 236);">UDSM Online Store</h1>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="../images/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div> 
<h2 style="color"><i>choose your products </i></h2>  


<?php
}

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' width=152px height=98px /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>".$row['price']. " Tshs</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />
<h1 style="padding-left: 40px;"><a href=logout.php style="text-decoration:none; color:rgb(17, 152, 236); " ><button type='submit' class="buy" style="width:45px; padding-right: 95px; float: left;">Logout</button></a></h1>

</div>
</body>
</html>