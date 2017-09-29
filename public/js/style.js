$(document).ready(function () {
    $(".xs_icon").hover(
        function(){
            $(this).css('color','#1a7bb9');
        },function(){
            $(this).css('color','#00b3ee');
        }
    )
    $('.carousel').carousel({
        interval: 4000
    });
    $('#collapseOne').collapse('hide');
    $('#collapseTwo').collapse('hide');
    $('#collapseThree').collapse('hide');
    $('#collapseFour').collapse('hide');
    $('#collapseFive').collapse('hide');
    $( '#professor_panel .panel-title>a').click(function() {
        $(this).find('.icon-angle').toggleClass("down");
    });
})

$(function () {
    $(window).scroll(function () {
        var t = $(this).scrollTop();
        if(t>200){
            $('.returnTop').stop().fadeIn();
        }else {
            $('.returnTop').stop().fadeOut();
        }
    })
    $('.returnTop').click(function () {
        $('body,html').stop().animate({scrollTop:0},300)
    })
})
