 <?php
session_start();
$_SESSION["shopping_cart"];
session_destroy();
header("location:login.php");

exit();
?>