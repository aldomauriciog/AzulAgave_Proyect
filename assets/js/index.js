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
        if(destiny.length == 0){
            destiny = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if(destiny.length == 0){
            destiny = $('html');
        }
        $('html, body').animate({ scrollTop: destiny.offset().top }, 500);
        return false;
    });
});