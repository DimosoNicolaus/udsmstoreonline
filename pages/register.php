<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewpoint" contents="width=device-width,initial-scle=1.0">
    <meta http-equiv="X-UA-compatible" content="ie">
    <link rel="stylesheet" type="text/css" href="../css/onlineshop.css">
   
    <title>register</title>
   
   
    <script type="text/javascript">
    var divs = new Array();
    divs[0] = "errFirst";
    divs[1] = "errLast";
    divs[2] = "errEmail";
    divs[3] = "errUid";
    divs[4] = "errPassword";
    divs[5] = "errConfirm";
    function validate()
	{
      var inputs = new Array();
      inputs[0] = document.getElementById('fname').value;
      
      inputs[2] = document.getElementById('email').value;
      inputs[3] = document.getElementById('regnumber').value;
      inputs[4] = document.getElementById('password').value;
      inputs[5] = document.getElementById('confirm').value;
      var errors = new Array();
      errors[0] = "<span style='color:red'> enter your full name!</span>";
     
      errors[2] = "<span style='color:red'> enter your email!</span>";
      errors[3] = "<span style='color:red'> enter your registration number</span>";
      errors[4] = "<span style='color:red'> enter your password!</span>";
      errors[5] = "<span style='color:red'> confirm your password!</span>";
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
        	document.getElementById(div).innerHTML = errMessage;
        else if (i==2)
        {
          var atpos=inputs[i].indexOf("@");
          var dotpos=inputs[i].lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
        	document.getElementById('errEmail').innerHTML = "<span style='color: red'>wrong input!</span>";
          else
        	document.getElementById(div).innerHTML = "";
        }
        else if (i==5)
        {
          var first = document.getElementById('password').value;
          var second = document.getElementById('confirm').value;
          if (second != first)
        	document.getElementById('errConfirm').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
          else
       		document.getElementById(div).innerHTML = "";
        }
        else
        	document.getElementById(div).innerHTML = "";
       }
     }
        function finalValidate()
        {
          var count = 0;
          for(i=0;i<6;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == "")
            count = count + 1;
          }
          if(count == 6)
          	document.getElementById("errFinal").innerHTML = " data  entered is correct!!!";
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
                    <input type="text" name="fname" id="fullname" onkeyup="validate();" required>
                </div>

                <div style=" width:30%">
                    <label>Email:</label><br>
                    <input type="email" name="email" id="email" onkeyup="validate();" required>
                </div>
                <div style="width:30%">
                    <label>registration number:</label><br>
                    <input type="text" name="regnumber" id="regnumber" onkeyup="validate();" required>
                </div>

                <div style="width:30%;">
                    <label>password:</label><br>
                    <input type="password" name="pass" id="password" onkeyup="validate();" required>
                </div>
                <div style=" width:30%">
                    <label>verify password:</label><br>
                    <input type="password" name="confirm" id="confirm"  onkeyup="validate();" required>
                    <h4><a href="login.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='green'" style="text-decoration:none">Signin?</a></h4>
                </div>
                <div style="width:30%;">
                    <input type="submit" name="signin" value="submit" onclick="validate();finalvalidate()" style="background-color:rgb(59, 179, 63); color:white;  width:80px; cursor:pointer; padding:16px 20px; margin:8px 0; opacity:0.9;">
                    
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