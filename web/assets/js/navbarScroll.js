$(document).ready(function(){

    function checkScroll(){
        var startY = $('nav').height() * 2; //The point where the navbar changes in px

        if($(window).scrollTop() > startY){
            $('nav').addClass("scrolled");
            $('a').css('color', 'black');
        }else{
            $('nav').removeClass("scrolled");
            $('navbar-main').css('color', 'white');
            $('.navbar-main li a').css('color', 'white');
        }
    }
        $(window).on("scroll", function(){
            checkScroll();
        });

});