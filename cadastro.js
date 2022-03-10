
alert("hfklrh")


var loginform = document.getElementById("loginform");
var registerform = document.getElementById("registerform");
var indicador = document.getElementById("indicator");

function register(){
    loginform.style.transform = "translateX(0px)";
    registerform.style.transform = "translateX(0px)";
}

function login(){
    loginform.style.transform = "translateX(300px)";
    registerform.style.transform = "translateX(300px)";
}