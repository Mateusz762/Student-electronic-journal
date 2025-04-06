let eyeicon  = document.getElementById("eyeicon");
let password  = document.getElementById("password");

eyeicon.onlcik = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "eye-open.png";
    }else{
        password.type = "password";
    }
}