var main = function(){
    $('.ab').click(function(){
        $('.slide1').fadeOut(600).removeClass('active-slide');
        //$('.slide3').fadeOut(600).removeClass('active-slide');
        $('.slide4').fadeOut(600).removeClass('active-slide');
        
        $('.slide2').fadeIn(600).addClass('active-slide');
    });
    /*$('.my').click(function(){
        $('.slide1').fadeOut(600).removeClass('active-slide');
        $('.slide2').fadeOut(600).removeClass('active-slide');
        $('.slide4').fadeOut(600).removeClass('active-slide');
        
        //$('.slide3').fadeIn(600).addClass('active-slide');
    });
    */
	$('.co').click(function(){
        $('.slide1').fadeOut(600).removeClass('active-slide');
        $('.slide2').fadeOut(600).removeClass('active-slide');
    //    $('.slide3').fadeOut(600).removeClass('active-slide');
        
        $('.slide4').fadeIn(600).addClass('active-slide');
    });
    $('.ab, .my, .co').mouseenter(function(){
        $(this).addClass('font-effect-anaglyph');
    });
    $('.ab, .my, .co').mouseleave(function(){
        $(this).removeClass('font-effect-anaglyph');
    });
        
};
    
$(document).ready(main);
