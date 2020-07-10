<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
    <meta http-equiv="X-UA-compatible" content="ie">
    <link rel="stylesheet" type="text/css" href="../css/onlineshop.css">
    <script src="./js/validator.js" type="text/javascript"></script> 

    <title>register</title>
    
    <script type="text/javascript">
    function validate() {
    var x = document.myform.pass.value;
    var y = document.myform.passco.value;
    var num = document.myform.regno.value;
    if (document.myform.fname.value == "") {

        alert("please enter your full name");
        document.myform.fname.focus();
        return false;
    }
  
    

    if (isNaN(num)) {
        document.getElementById("regnumber").innerHTML = "enter numeric value only";
        return false;
    }
    if (document.myform.regnumber.value == "") {
        alert("please enter your phone number");
        document.myform.regnumber.focus();
        return false;
    }

    if (document.myform.email.value == "") {
        alert("please enter your email");
        document.myform.email.focus();
        return false;
    }

    if (document.myform.pass.value == "") {
        alert("please enter your password");
        document.myform.pass.focus();
        return false;
    }
    if (document.myform.passco.value = document.myform.value) {
        alert("please re-enter your password");
        document.myform.passco.focus();
        return false;
    }
    if (x == y) {
        return true;
    } else {
        alert("your password didnt match!");
        document.myform.pass.style.bordercolor = "#E34234";
        document.myform.passco.style.bordercolor = "#e34234";
        return false;
    }
    return (true);

}

    </script>
    
</head>

<body style="background-image:url(../images/background-2462431_1920.jpg)">
    <div class="box">
        <div class="nav">
            <a class="active" href="../home.php" style="font-size: 20px;">udsm store</a>
            <a href="">register</a>

        </div>



        <div class="container">
            <form  name="myform" action="insert_.php" method="POST" onsubmit="return(validate());">
                <div style=" width:10%;">
                    <label>fullname:</label><br>
                    <input type="text" name="fname" required>
                </div>

                <div style=" width:30%">
                    <label>Email:</label><br>
                    <input type="email" name="email"  required>
                </div>
                <div style="width:30%">
                    <label>registration number:</label><br>
                    <input type="text" name="regnumber"  required>
                </div>

                <div style="width:30%;">
                    <label>password:</label><br>
                    <input type="password" name="pass" id="pass" required>
                </div>
                <div style=" width:30%">
                    <label>verify password:</label><br>
                    <input type="password" name='passco' id="passco" id="passco"  required>
                    <h4><a href="login.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='green'" style="text-decoration:none">Signin?</a></h4>
                </div>
                <div style="width:30%;">
                    <input type="submit" name="signin" value="submit" style="background-color:rgb(59, 179, 63); color:white;  width:80px; cursor:pointer; padding:16px 20px; margin:8px 0; opacity:0.9;">
                    
                </div>


            </form>



        </div>



        </form>

        <div class="bottom">
            <P>all rights reserved.udsm &copy2020</P>
        </div>
    </div>
    </div>

</body>


</html>