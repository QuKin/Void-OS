
var cs=0;
function dj(event){
    var x=event.offsetX;
    var y=event.offsetY;
    $('main').stop().animate({
        left:x,
        top:y
    },2000);
    cs++;
    $('#djcs').text(cs);
    if($('main').css('width').split('px')[0]>=450){
        alert('你通关了，你点了：'+cs);
    }
}
$(function(){
    setInterval(() => {
        sj();
    }, 1000);
    setInterval(() => {
        bf();
    }, 10000);
    var s=setInterval(() => {
        zd();
        die();
    }, 5000);
    var yd=50;
    $(document).keydown(function (e) { 
        // console.log(e.keyCode);
        if(e.keyCode==13){
            if($('main').css('width').split('px')[0]>80){
                $('#all').append('<main id="main"><p>QuKin</p></main>');
                $('main').css('width',$('main').css('width').split('px')[0]/2-10);
                $('main').css('height',$('main').css('height').split('px')[0]/2-10);
            }
        }
        if(e.keyCode==32){
            if($('main').css('width').split('px')[0]>50){
                var t=$('main').css('top').split('px')[0]-50;
                var l=parseInt($('main').css('left').split('px')[0])+parseInt($('main').css('width').split('px')[0])/2;
                $('#all').append('<div class="xq al" style="left:'+l+'px;top:'+t+'px"></div>');
                $('main').css({'width':'-=5px','height':'-=5px'});
                $('main').children().css('line-height',$('main').css('height'));
                if($('main').css('width').split('px')[0]<90 && $('main').css('width').split('px')[0]>50){
                    yd+=5;
                    console.log(yd);
                }
            }
        }
        if(e.keyCode==37){
            if($('main').css('left').split('px')[0]>=10){
                $('main').stop().animate({left:'-='+yd+'px'});
            }
        }
        if(e.keyCode==38){
            if($('main').css('top').split('px')[0]>=10){
                $('main').stop().animate({top:'-='+yd+'px'});
            }
        }
        if(e.keyCode==39){
            if($('main').css('left').split('px')[0]<=530){
                $('main').stop().animate({left:'+='+yd+'px'});
            }
        }
        if(e.keyCode==40){
            if($('main').css('top').split('px')[0]<=530){
                $('main').stop().animate({top:'+='+yd+'px'});
            }
        }
    });
    function sj(){
        var x=Math.random()*600;
        var y=Math.random()*600;
        $('#all').append('<div class="xq" style="left:'+x+'px;top:'+y+'px"></div>');
        // console.log(x,y);
    }
    function zd(){
        var x=Math.random()*600;
        var y=Math.random()*600;
        $('#all').append('<div class="zd" style="left:'+x+'px;top:'+y+'px"></div>');
        // console.log(x,y);
    }
    function bf(){
        var x=Math.random()*600;
        var y=Math.random()*600;
        $('#all').append('<div class="bf" style="left:'+x+'px;top:'+y+'px"></div>');
        // console.log(x,y);
    }
    function die(){
        $('main').css('width',$('main').css('width').split('px')[0]-3);
        $('main').css('height',$('main').css('height').split('px')[0]-3);
        console.log($('main').css('width').split('px')[0]);
        if($('main').css('height').split('px')[0]<45){
            alert('你输了');
            clearInterval(s);
            window.location.reload();
        }
    }
    setInterval(() => {
        $('main').each(function(){
            let enemy=this;
            $('.xq').each(function(){
                let bullet = this;
                if (calc(enemy, bullet) || calc(bullet, enemy)) {
                    $(this).css({display:'none'});
                    $('main').stop().animate({'width':'+=5','height':'+=5',});
                    $('main').children().css('line-height',$('main').css('height'));
                    if(yd>10){
                        yd--;
                    }
                }
            });
            $('.zd').each(function(){
                let bullet = this;
                if (calc(enemy, bullet) || calc(bullet, enemy)) {
                    $(this).css({display:'none'});
                    $('main').stop().animate({'width':'-=5','height':'-=5',});
                    $('main').children().css('line-height',$('main').css('height'));
                    if(yd>10){
                        yd++;
                    }
                }
            });
            $('.bf').each(function(){
                let bullet = this;
                if (calc(enemy, bullet) || calc(bullet, enemy)) {
                    $(this).css({display:'none'});
                    $('main').stop().animate({'width':'-=20','height':'-=20',});
                    $('main').children().css('line-height',$('main').css('height'));
                    if(yd>10){
                        yd++;
                    }
                }
            });
            $('main').each(function(){
                let bullet = this;
                if (calc(enemy, bullet) || calc(bullet, enemy)) {
                    $(this).css({display:'none'});
                    $('main').stop().animate({'width':'+='+$('main').css('width').split('px')[0]+'','height':'+='+$('main').css('width').split('px')[0]+'',});
                    $('main').children().css('line-height',$('main').css('height'));
                }
            });
        });
    }, 100);
    function getLTRB(node) {
        return {
            l: node.offsetLeft,
            t: node.offsetTop,
            r: node.offsetLeft + node.offsetWidth,
            b: node.offsetTop + node.offsetHeight
        }
    }
  
    //获取上下左右位置
     function calc(a, b) {
        a = getLTRB(a)
        b = getLTRB(b)
        //判断是否相撞
        if (a.l > a.l && b.l < a.r && b.t > a.t && b.t < a.b) return true
        else if (b.l > a.l && b.l < a.r && b.b > a.t && b.b < a.b) return true
        else if (b.r > a.l && b.r < a.r && b.b > a.t && b.b < a.b) return true
        else if (b.r > a.l && b.r < a.r && b.t > a.t && b.t < a.b) return true
        else return false
    }
});