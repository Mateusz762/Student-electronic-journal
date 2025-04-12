var a =document.getElementById("loginBtn");
var b =document.getElementById("registerBtn");
var x =document.getElementById("login");
var y =document.getElementById("register");

function login(){
    x.style.left = "4px";
    y.style.right = "520px";
    a.className += "white-btn";
    b.className = "btn";
    x.style.opacity =1;
    y.style.opacity =0;
}
function register(){
    x.style.left = "-510px";
    y.style.right = "5px"
    a.className = "btn";
    b.className += "white-btn";
    x.style.opacity =0;
    y.style.opacity =1;
}
//Eye-icon//
var eye = document.getElementById("eye-icon");
var password = document.getElementById("password");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "eye-icon-open.png";
    }else{
        password.type = "password";
        eyeicon.src = "eye-close.png";
    }
}