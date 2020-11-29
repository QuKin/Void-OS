$(document).ready(function(){
    $('#head_right').click(function(){
        if($(this).hasClass("rotate")){
            $(this).removeClass("rotate").addClass("rotate1");
            $('#head_right_one').animate({top:'-5px'});
            $('#head_right_three').animate({top:'25px'});
            $(this).animate({top: '25px', right: '30px'},function(){
                $('#menu').fadeIn();
            });
        }else{
            $('#menu').fadeOut();
            $(this).animate({top: '12px', right: '15px'});
            $('#head_right_three').animate({top:'18px'});
            $('#head_right_one').animate({top:'2px'});
            $(this).removeClass("rotate1").addClass("rotate");
        }
    });
    $('.menu_li').click(function(){
        $('footer').css('z-index','5');
        $('body').css('background','linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(./img/bg.jpg) no-repeat');
        $('body').css('background-size','100%');
        $('#alert').fadeIn();
        $('#alert_h3').text($(this).children('p').eq(0).text());
        $('#alert_p').text($(this).children('p').eq(1).text());
    });
    $('#alert_button').click(function(){
        $(this).parent().fadeOut();
    });
    $('footer').click(function(){
        $('body').css('background','url("./img/bg.jpg") no-repeat');
        $('body').css('background-size','100%');
        $('#menu').css('display','none');
        $('#head_right').animate({top: '12px', right: '15px'});
        $('#head_right_three').animate({top:'18px'});
        $('#head_right_one').animate({top:'2px'});
        $('#head_right').removeClass("rotate1").addClass("rotate");
        $(this).css('z-index','-1');
    });

});