function UserName() {
    var User = myform.fullname.value;
    var i;

    if (fullname.length == 0)
        alert("Please Enter Full name");

    else if (fullname.length < 10)
        alert("your name must have a minimum of 6 digits/charachters");
}

function Passw() {
    var Pass = document.getElementById("pass");
    var SCharCount = 0;
    var LCharCount = 0;
    var NCount = 0;
    var special = 0;
    var i;

    if (Pass == "")
        alert("Please enter a Password");


    else if (Pass.length > 5 && Pass.length < 15) {
        for (i = 0; i < Pass.length; i++) {
            if ((Pass.charAt(i) >= 'a') && (Pass.charAt(i) <= 'z'))
                SCharCount++;

            else if ((Pass.charAt(i) >= 'A') && (Pass.charAt(i) <= 'Z'))
                LCharCount++;

            else if ((Pass.charAt(i) >= '0') && (Pass.charAt(i) <= '9'))
                NCount++;

            else if ((Pass.charAt(i) >= '!') && (Pass.charAt(i) <= '?'))
                special++;
        }
    }

    if ((SCharCount == 0) || (LCharCount == 0) || (NCount == 0) || (special == 0)) {
        alert("Your password weak please notes that you most have at least 5-15 digits providen by one of each keys :1-9 , !-? , a-z , A-Z");
    } else
        return true;
}

function ConfPassw() {
    var Pass = document.getElementById("pass");
    var CPass = document.getElementById("passco");
    if (Pass === CPass) {
        alert("the password must match okay");
    }

}


function regid() {
    var reg = myform.regno.value;
    if (reg.length == 0)
        alert("Enter Address");
}


function Mail() {
    var mail = myform.email.value;
    var lastApos = email.lastIndexOf('@');
    var lastDotPos = email.lastIndexOf('.');

    if (email.length == 0)
        alert("Please enter your Email");
    else if (!(lastApos < lastDotPos && lastApos > 0 && email.indexOf('@@') == -1 && (email.length - lastDotPos) > 2))
        alert("The Email was write in wrong way");
    else if (lastDotPos - email.indexOf('@') > 2)
        return true;
    else
        alert("The Email was write in wrong way");
}







function validation() {
    UserName();
    Passw();
    ConfPassw();
    regid();
    Mail();

}