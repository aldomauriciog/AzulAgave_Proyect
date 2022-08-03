const titleInfo = document.querySelector(".title"),
SelectInfo = document.querySelector(".nav-stick .logo a"),
Icon = document.querySelector(".nav-stick .open i"),
CloseIcono = document.querySelector(".nav-stick .open"),
NavBody = document.querySelector(".nav-body");

let slider = document.querySelector(".slider-banner")
let sliderIndividual = document.querySelectorAll(".banner-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5000;


window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
}, intervalo)

function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },1500)
    }
}

$(document).ready(function(){
    $('a[href^="#"]').click(function(){
        var destiny = $(this.hash);
        var altura = destiny.offset().top;
        var oficial = altura - 100;
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
            NavBody.style.display = "block"

            CloseIcono.classList.remove("open");
            CloseIcono.classList.add("close");
        }
        

        else if(CloseIcono.className == "close"){
            NavBody.style.transform = "translateX(100%)";
            NavBody.style.display = "none"

            CloseIcono.classList.add("open");
            CloseIcono.classList.remove("close");
        }
        
    });
});