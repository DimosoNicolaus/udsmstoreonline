 <?php

 $name=$_POST['fname'];
 $email=$_POST['email'];
 $regno=$_POST['regnumber'];
 $password=$_POST['pass'];

 if(!empty($name)||!empty($email)||!empty($regno)||!empty($password)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="onlinestore";

    //create connection

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    }

        $SELECT="SELECT regno From users where  regno = ?  Limit 1";
        $INSERT="INSERT INTO users (fullname,email,regno,password,) values (?,?,?,?)";

       $stmt=$conn -> prepare($SELECT);
       $stmt->bind_param("s",$regno);
       $stmt->execute();
       $stmt->bind_result($regno);
       $stmt->store_result();
       $rnum =$stmt->num_rows;

       if($rnum==0){
           $stmt ->Close();
           $stmt ->$conn->prepare($INSERT);
           $stmt ->bind_param("ssss",$name,$email,$regno,$password);
           $stmt->execute();

           echo "new record inserted successfully" ;
       } else{
           echo "someone already register using this registration number";
       }
       $stmt->close();
       $conn->close();
   
    

 }

 else{
     echo "all fields are required";
     die();
 }
 ?>