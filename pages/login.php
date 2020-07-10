

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
    <meta http-equiv="X-UA-compatible" content="ie">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <title>login</title>
</head>

<body style="background-image:url(../images/background-2462431_1920.jpg)">

    <div class="box">
        <div class="nav">
            <a class="active" href="../home.php">udsm store</a>
            <a href="">login</a>

        </div>

        <div class="lgn">


            <div action="">
                <div class="container">
                <form action="check.php" method='POST'>

                    <label><h4>Username:</h4></label>
                    <input type="text" name='name' id="name"><br>



                    <label><h4>password:</h4></label>
                    <input type="password" name='pass' id="pass"><br>


                    <button type="submit" name="signin" value="Login" class="loginbtn" ><a href="user.php">login</a></button>



                    <center>
                        <h4><a href="register.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='green'">dont have acount?..signup</a></h4>
                    </center>
                    </form>
                </div>
                









                <div class="bottom">
                    <P>all rights reserved.udsm &copy2020</P>
                </div>
            </div>
        </div>
</body>