$(function(){
    // 跳跃
    function dy(){
        $('#kl').stop().css({
            width:'46px',
            height:'50px',
            backgroundPosition:'-847px -1px'
        });
        $('#kl').stop().animate({
            bottom:'60px'
        },250,function(){
            $('#kl').stop().animate({bottom:'8px'});
        });
    }

    // 下趴
    function px1(){
        $('#kl').stop().css({
            width:'55px',
            height:'29px',
            backgroundPosition:'-1114px -22px',
            bottom:'8px'
        });
    }

    // 下趴
    function px2(){
        $('#kl').stop().css({
            width:'46px',
            height:'50px',
            backgroundPosition:'-847px -1px',
            bottom:'8px'
        });
    }

    $('#cx').click(function(){window.location.reload();});
    $('#cx2').click(function(){
        var timeS=1;    // 时间
        $('p').text(timeS);
        $('#gameOver').css('display','none');
        $('#cx').css('display','none');
        $('#cx2').css('display','none');
        $('.yun').css('display','block');
        $('#kl').css('display','block');
        $('.zd').css('display','block');
        $('footer').css('display','block');

        // 恐龙跳跃
        $(document).keydown(function (e) { 
            if(e.keyCode==32||e.keyCode==38){   // 空格或者上键
                dy();
            }
        });

        // 恐龙下趴
        $(document).keydown(function (e) { 
            if(e.keyCode==40){   // 下键
                px1();
            }
        });

        // 恐龙下趴
        $(document).keyup(function (e) { 
            if(e.keyCode==40){   // 下键
                px2();
            }
        });
        $('#up').mousedown(function () { 
            dy();
        });
        $('#down').mousedown(function () { 
            px1();
        });
        // $('#down').mouseup(function () { 
        //     px2();
        // });

        // 地面移动
        setInterval(() => {
            yun();
            zd();
            $('footer').animate({
                backgroundPositionX:'-=800px'
            },300,function(){   // 如果设置的时间太慢，要不然中间会有一段空白
                $('footer').css({
                    backgroundPositionX:'-1px'
                });
            });
        }, 1);

        // 云移动
        function yun(){
            // 运用了动画时间的特性，所以会显示出不一样的效果
            $('.yun1').animate({left:'-=650px'},1500,function(){$('.yun').css({left:'600px'})});
            $('.yun2').animate({left:'-=650px'},2000,function(){$('.yun').css({left:'600px'})});
            $('.yun3').animate({left:'-=650px'},2500,function(){$('.yun').css({left:'600px'})});
        }

        // 子弹移动
        function zd(){
            var time=Math.random()*3000;
            if(time>=1000){
                $('.zd').animate({left:'-=650px'},time,function(){$('.zd').css({left:'610px'})});
            }
        }

        // 碰撞算法
        var pz=setInterval(() => {
            var box1 = document.querySelector('#kl');
            var box2 = document.querySelector('.zd');
            pzjcFunc(box1,box2);
            function pzjcFunc(obj1, obj2){
                var obj1Left = obj1.offsetLeft;
                var obj1Width = obj1Left + obj1.offsetWidth;
                var obj1Top = obj1.offsetTop;
                var obj1Height = obj1Top + obj1.offsetHeight;
                var obj2Left = obj2.offsetLeft;
                var obj2Width = obj2Left + obj2.offsetWidth;
                var obj2Top = obj2.offsetTop;
                var obj2Height = obj2Top + obj2.offsetHeight;
            
                if ( !(obj1Left > obj2Width || obj1Width < obj2Left || obj1Top > obj2Height || obj1Height < obj2Top) ) {
                    $('#gameOver').css('display','block');
                    $('#cx').css('display','block');
                    $('.yun').css('display','none');
                    $('#kl').css('display','none');
                    $('div').remove('.zd');
                    $('footer').css('display','none');
                    clearInterval(pz);
                } else{
                    // 时间
                    $('p').text(timeS);
                    timeS++;
                }
            }
        }, 100);
    });
});