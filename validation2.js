var newInput = document.getElementById("newpassword");
var oldInput =document.getElementById("psw");
var conferp = document.getElementById("conferp");

// When the user clicks on the password field, show the message2 box
newInput.onfocus = function () {
    document.getElementById("message2").style.display = "block";
}

// When the user clicks outside of the password field, hide the message2 box
newInput.onblur = function () {
    document.getElementById("message2").style.display = "none";
}

// When the user starts to type something inside the password field
newInput.onkeyup = function () {
    //password match

    if (newInput.value === oldInput.value) {
        conferp.classList.remove("invalid");
        conferp.classList.add("valid");
    } else {
        conferp.classList.remove("valid");
        conferp.classList.add("invalid");
    }
}