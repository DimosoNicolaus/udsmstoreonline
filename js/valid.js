function validate() {
    var x = document.myform.pass.value;
    var y = document.myform.passco.value;
    var num = document.myform.number.value;
    if (document.myform.fname.value == "") {

        alert("please enter your first name");
        document.myform.fname.focus();
        return false;
    }
    if (document.myform.mname.value == "") {
        alert("please enter your second name");
        document.myform.mname.focus();
        return false;
    }

    if (document.myform.username.value == "") {
        alert("please enter your username");
        document.myform.username.focus();
        return false;
    }

    if (isNaN(num)) {
        document.getElementById("pnumber").innerHTML = "enter numeric value only";
        return false;
    }
    if (document.myform.pnumber.value == "") {
        alert("please enter your phone number");
        document.myform.pnumber.focus();
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