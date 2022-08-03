const titleInfo = document.querySelector(".title"),
SelectInfo = document.querySelector(".nav-stick .logo a"),
Icon = document.querySelector(".nav-stick .open i"),
CloseIcono = document.querySelector(".nav-stick .open"),
NavBody = document.querySelector(".nav-body");

window.onload = ()=>{
    let title = titleInfo.querySelector("h1").innerHTML;
    SelectInfo.innerHTML = title;
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