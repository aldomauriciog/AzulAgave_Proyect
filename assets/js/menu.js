const titleInfo = document.querySelector(".title"),
SelectInfo = document.querySelector(".nav-stick .logo a"),
Icon = document.querySelector(".nav-stick .open i"),
CloseIcono = document.querySelector(".nav-stick .open"),
NavBody = document.querySelector(".nav-body"),
RapidAccess = document.querySelector(".rp-phone a"),
popup = document.querySelector(".rp-pop-up"),
closePopup = document.querySelector(".icon");

window.onload = ()=>{
    let title = titleInfo.querySelector("h1").innerHTML;
    SelectInfo.innerHTML = title;
}

$(RapidAccess).click(function(){
    popup.style.visibility = "visible";
});

$(closePopup).click(function(){
    popup.style.visibility = "hidden";
    
});

$('.btn1').click(function(){
    popup.style.visibility = "hidden";
});

$(document).ready(function(){
    $('a[href^="#"]').click(function(){
        var destiny = $(this.hash);
        var altura = destiny.offset().top;
        var oficial = altura - 250;
        if(destiny.length == 0){
            destiny = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if(destiny.length == 0){
            destiny = $('html');
        }
        $('html, body').animate({ scrollTop: oficial }, 500);
        return false;
    });

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

