let gozicon = document.getElementById("goz-icon");
let shifre = document.getElementById("shifre");

gozicon.onclick = function(){
    if(shifre.type == "password"){
        shifre.type = "text";
        gozicon.src = "eye-open.png"
    }
    else{
        shifre.type = "password";
        gozicon.src = "eye-close.png"
    }
}