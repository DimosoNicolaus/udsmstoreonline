 <?php

include('db.php');
$id=$_REQUEST['id'];

if(mysqli_connect_errno()){
   echo "failed to connect".mysqli_connect_error();
}

if(isset($id)){
    $query="DELETE FROM products WHERE id=$id";
    $result=mysqli_query($con,$query);
    header("location:admin.php");
}

?>
