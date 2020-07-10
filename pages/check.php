<?php
session_start();
$userName = $_POST['name'];
$pass = $_POST['pass'];

//database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "onlinestore";

$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
//====================================================================
$userName = $mysql_obj->real_escape_string($_REQUEST['name']);
$pass = $mysql_obj->real_escape_string($_REQUEST['pass']);
//=======================================================================================
$sql = "SELECT * FROM users WHERE fullname='$userName' AND password='$pass'";
$result = $mysql_obj->query($sql) or die("An error occured!" . $mysql_obj->error);
$row = mysqli_fetch_array($result);
//=======================================================================================
if (mysqli_num_rows($result) == 1) { // user found
	//echo "Successfull loged in";
	$_SESSION['regno'] = $row['regno'];
	header("Location: user.php");
} else {
	echo "Unexpected error" . $mysql_obj->error;
}

$mysql_obj->close();
