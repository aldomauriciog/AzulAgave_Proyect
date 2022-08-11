const titleInfo = document.querySelector(".title"),
SelectInfo = document.querySelector(".nav-stick .logo a"),
Icon = document.querySelector(".nav-stick .open i"),
CloseIcono = document.querySelector(".nav-stick .open"),
NavBody = document.querySelector(".nav-body");

window.onload = ()=>{
    let title = titleInfo.querySelector("h1").innerHTML;
    SelectInfo.innerHTML = title;
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

const nameSpan = document.querySelector(".spanName"),
emailSpan = document.querySelector(".spanEmail"),
phoneSpan = document.querySelector(".spanPhone"),
msgSpan = document.querySelector(".spanMessage"),
inputname = document.getElementById("name"),
inputemail = document.getElementById("email"),
inputphone = document.getElementById("phone"),
inputmsg = document.getElementById("msg");

function validarFormulario(evento){
    evento.preventDefault();
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let msg = document.getElementById("msg").value;

    //Name
    if(name.length == 0){
        nameSpan.innerHTML = "Please write your name";
        // return;
    }
    else{
        inputname.onfocus = ()=>{
            nameSpan.innerHTML = "";
        }
    }

    //Email
    if(email.length == 0){
        emailSpan.innerHTML = "Please write your email";
        // return;
    }
    // else{
    //     inputemail.onfocus = ()=>{
    //         emailSpan.innerHTML = "";
    //     }
    // }

    //Phone
    if(phone.length == 0){
        phoneSpan.innerHTML = "Please write your phone";
        // return;
    }
    // // else{
    //     inputphone.onfocus = ()=>{
    //         phoneSpan.innerHTML = "";
    //     }
    // }

    //Message
    if(msg.length == 0){
        msgSpan.innerHTML = "Please write your message";
        return;
    }
    // else{
    //     inputmsg.onfocus = ()=>{
    //         msgSpan.innerHTML = "";
    //     }
    // }

    this.submit();
}

$(document).ready(function(){
    $(Icon).click(function(){
        if (CloseIcono.className == "open") {
            NavBody.style.transform = "translateX(0%)";

            CloseIcono.classList.remove("open");
            CloseIcono.classList.add("close");
        }
        

        else if(CloseIcono.className == "close"){
            NavBody.style.transform = "translateX(100%)";

            CloseIcono.classList.add("open");
            CloseIcono.classList.remove("close");
        }
        
    });
});