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
});