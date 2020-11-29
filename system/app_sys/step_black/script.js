$(function(){
    var gps=['2.5%','34.3%','66%'];
    function box(){
        var time=Math.ceil(Math.random()*3);
        if(time==1){
            $('#all').append('<div class="box"></div>');
            $('.box').css('left',gps[0]);
        } else if(time==2){
            $('#all').append('<div class="box"></div>');
            $('.box').css('left',gps[1]);
        } else if(time==3){
            $('#all').append('<div class="box"></div>');
            $('.box').css('left',gps[2]);
        }
        return time;
    }
    box();
    var fs=0;
    var xl=setInterval(() => {
        var time=Math.random()*1500;
        $('.box').animate({top:'80%'},time);
    }, 100);
    var cj=setInterval(() => {
        $('.box').remove();
        box();
    }, 1000);
    function pd(){
        var tp=parseInt($('.box').css('top').split('px')[0]);
        var all=$('#all').height()-300;
        if(tp>all){
            $('.box').remove();
            fs++;
            parseInt($('span').text(fs));
        }else{
            fs--;
            parseInt($('span').text(fs));
        }
    }
    $('#y_box1').click(function(){
        if($('.box').css('left').split('px')[0]<=20){
            pd();
        }
    });
    $('#y_box2').click(function(){
        if($('.box').css('left').split('px')[0]<=150 && $('.box').css('left').split('px')[0]>=20){
            pd();
        }
    });
    $('#y_box3').click(function(){
        if($('.box').css('left').split('px')[0]<=280 && $('.box').css('left').split('px')[0]>=150){
            pd();
        }
    });
});