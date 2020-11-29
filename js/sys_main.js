$(function(){
    // console.log(returnCitySN['cname']);
    function time(){
        var time=new Date();
        var hour=time.getHours();
        var min=time.getMinutes();
        var month=time.getMonth()+1;
        var date=time.getDate();
        var day=time.getDay();
        var dayArray = new Array(7);
        dayArray[0] = "星期日";
        dayArray[1] = "星期一";
        dayArray[2] = "星期二";
        dayArray[3] = "星期三";
        dayArray[4] = "星期四";
        dayArray[5] = "星期五";
        dayArray[6] = "星期六";
        var day1=dayArray[day];
        if (hour<9){
            hour='0'+hour;
        }
        if (min<10){
            min='0'+min;
        }
        if (hour<12){
            $('#top_positioning_time_p').text('早上');
        } else if (hour<17){
            $('#top_positioning_time_p').text('中午');
        } else{
            $('#top_positioning_time_p').text('晚上');
        }
        $('#top_time_max_p').text(hour+':'+min);
        $('#head_p').text(hour+':'+min);
        $('#top_positioning_p').text(returnCitySN['cname'].split('省')[1]);
        $('#top_time_min_p').text(month+'月'+date+'日'+day1);
    }
    time();
    setInterval(function () {
        time();
    },1000);
    var divS=document.getElementById("s");
    var divM=document.getElementById("m");
    var divH=document.getElementById("h");
    /*时、分、秒针转动度数计算*/
    function task(){
        var now=new Date();
        var s=now.getSeconds();
        var sDeg=s/60*360;
        var m=now.getMinutes();
        var mDeg=(m*60+s)/3600*360;
        var h=now.getHours();
        var hDeg=(h*3600+m*60+s)/(3600*12)*360;
        divS.style.transform=`rotate(${sDeg}deg)`;
        divM.style.transform=`rotate(${mDeg}deg)`;
        divH.style.transform=`rotate(${hDeg}deg)`;
    }
    task();
    /*事件间隔事件*/
    setInterval(task,1000);

    /*
    var p=0,t=0;
    $(window).scroll(function(e){
        p=$(this).scrollLeft();
        if(t<=p && p>=100){
            // $(this).scrollLeft($(window).width());
            // $(this).animate({scrollLeft:0},1000);
        }
        else{
            console.log('上滚');
        }
        t = p;
    });
    */

    // var timeout ;
    //
    // $("#two li").mousedown(function() {
    //     timeout = setTimeout(function() {
    //         console.log($(this).attr('id'));
    //     }, 2000);
    // });
    //
    // $("#two li").mouseup(function() {
    //     clearTimeout(timeout);
    //     console.log($(this).attr('id'));
    // });
    //
    // $("#two li").mouseout(function() {
    //     clearTimeout(timeout);
    //     console.log($(this).attr('id'));
    // });


    // $("#two li").on({
    //     touchstart: function (e) {
    //         // 长按事件触发
    //         timeOutEvent = setTimeout(function () {
    //             timeOutEvent = 0;
    //             alert('你长按了');
    //         }, 400);
    //         //长按400毫秒
    //         // e.preventDefault();
    //     },
    //     touchmove: function () {
    //         clearTimeout(timeOutEvent);
    //         timeOutEvent = 0;
    //     },
    //     touchend: function () {
    //         clearTimeout(timeOutEvent);
    //         if (timeOutEvent != 0) {
    //             // 点击事件
    //             // location.href = '/a/live-rooms.html';
    //             alert('你点击了');
    //         }
    //         return false;
    //     }
    // });

    $("#two li").bind("contextmenu", function () {
        if ($(this).attr('id')!='kf'){
            if (confirm('是否删除'+$(this).children('p').text())){
                console.log(parseInt($(this).attr('id').split('app')[1])+1);
                window.location.href='../system/del.php?del='+parseInt($(this).attr('id').split('app')[1]);
            }
            return false;
        }
    });

    $('li').click(function(e){
        $('#fh').fadeIn();
        if ($(this).children('span').text()=='./lock_screen/index.html'){
            $('#fh').fadeOut();
        }
        if ($(this).children('span').text()!='Y') {         // 集合main2弹窗
            var span = $(this).children('span').text();
            var id = $(this).attr('id') + '_ht';
            var y = $(this).offset().top;
            var x = $(this).offset().left;
            if (!$('#' + id)[0]) {
                // class：ht是后台
                $('body').append('<div id="' + id + '" class="abs dj ht"><span>' + $(this).children('p').text() + '</span><span>' + id + '</span><iframe src=' + span + ' frameborder="0" width="100%" height="100%"></iframe></div>');
            } else {
                $('#' + id).fadeIn();
            }
            $('#' + id).css({top: y, left: x + 25});
            $('#' + id).animate({
                top: '0',
                left: $(window).scrollLeft(),
                width: '100%',   //因为有两页
                height: '100%'
            });
        }else{
            $('#two').fadeIn();
            var ya = $(this).offset().top;
            var xa = $(this).offset().left;
            $('#two').css({top: ya, left: xa + 25,background: 'rgba(52, 62, 60, 0.75)'});
            $('#two').animate({
                top: '0',
                left: $(window).scrollLeft(),
                width: '100%',   //因为有两页
                height: '100%'
            });
        }
        $('body').css('overflow','hidden');
    });
    $('#fh').click(function () {
        $('body').css('overflow','auto');
        // $('.dj').remove();
        // $(this).fadeOut();
        if ($(window).width()/2<$(window).scrollLeft()){
            // 第二页
            $('.dj').animate({
                top:'50%',
                left:$(window).scrollLeft()+$(window).scrollLeft()/2,
                width:'0%',
                height:'0%'
            },function () {
                $('.dj').fadeOut();
            });
        }else{
            // 第一页
            $('.dj').animate({
                top:'50%',
                left:$(window).width()/4+$(window).width()/4,
                width:'0%',
                height:'0%'
            },function () {
                $('.dj').fadeOut();
            });
        }
    });

    var htnum=0;        // 后台第几位
    //	移动端的手势切换   左滑  右滑
    var $banner = $("#fh");
    var startY = 0;
    var moveY = 0;
    var distanceY = 0;
    var isMove = false;
    //手势触屏开始事件
    $banner.on("touchstart", function(e) {
        // console.log(e);
        startY = e.originalEvent.touches[0].clientY;
        //手势触屏移动事件
    }).on("touchmove", function(e) {
        moveY = e.originalEvent.touches[0].clientY - startY;
        isMove = true;
        //手势离开屏幕事件
    }).on("touchend", function(e){
        // 手势事件的条件
        /*
        * 1.滑动过的
        * 2.移动的距离大于30px 认为是手势
        * */
        if (isMove && Math.abs(moveY) >= 30){
            //	满足条件
            if (moveY > 0){
                //	下滑
                console.log('下滑，删除所有后台');
                del();
            } else {
                //	上滑
                console.log('上滑，打开后台管理');
                ht();
            }
        }
        startY = 0;
        moveY = 0;
        distanceY = 0;
        isMove = false;
    });

    if ($('body').width()>650){
        $('#bj').attr('src','../img/bg_com2.jpg');
        $('#fh').click(function () {
            $('#two').animate({
                top:'95%',
                left:$(window).width()/4+$(window).width()/4,
                width:'0%',
                height:'0%'
            },function () {
                $('#two').css('display','none');
            });
        });
        $('#fh').dblclick(function () {
            console.log('双击，删除所有后台');
            del();
        });
        $("div").bind("contextmenu", function(){
            return false;
        })
        $("#fh").mousedown(function(e) {
            //右键为3
            if (3 == e.which) {
                console.log('右键，打开后台管理');
                ht();
            }
        })
    }
    for (var i=0;i<$('#two li').length;i++){
        if ($('#two li').eq(i).children('p').text()==''){
            $('#two li').eq(i).css('display','none');
        }
    }

    function del() {
        $('body').css('overflow','auto');
        $('.ht').remove();
        $('#qcht').fadeIn();
        setTimeout(function () {
            $('#qcht').fadeOut();
        },1000);
    }

    function ht() {
        $('#ht').slideDown();

        // var  i = 0;
        // function appendSomeItems() {
        //     $('#ht ul').append('<div class="ht_li"><h2>×</h2><h1>'+$('.ht').eq(i).children('span').text()+'</h1></div>');
        //     i++;
        //     if (i < $('.ht').length) window.setTimeout(appendSomeItems, 0);
        // }
        // appendSomeItems();

        for (i=0;i<$('.ht').length;i++){
            $('#ht ul').append('<div class="ht_li"><div class="ht_li_qx"></div><h2>×</h2><h1>'+$('.ht').eq(i).children('span').eq(0).text()+'</h1><span>'+$('.ht').eq(i).children('span').eq(1).text()+'</span></div>');
        }

        $('#ht_qx').click(function () {
            $('body').css('overflow','auto');
            $('#ht').slideUp();
            $('#ht ul').children('div').remove();   // 删除后台所有列表先，以访后面重复
        });

        $('#ht_x').click(function () {
            $('body').css('overflow','auto');
            $('#ht').slideUp();
            $('#ht ul').children('div').remove();
            $('.ht').remove();
            $('#qcht').fadeIn();
            setTimeout(function () {
                $('#qcht').fadeOut();
            },1000);
        });

        // $('#ht h2').click(function () {
        //     $('body').css('overflow','hidden');
        //     $('.ht').eq($('#ht h2').index(this)).remove();
        //     // console.log($('#ht h2').index(this));
        //     $('#ht ul').children('div').remove();
        //     $('#ht').slideUp();
        // });

        $('.ht_li_qx').click(function () {
            $('body').css('overflow','hidden');
            $('#ht ul').children('div').remove();
            $('#ht').slideUp();
            $('.ht').css({
                'z-index': '1',
                top:'50%',
                left:$(window).scrollLeft()+$(window).scrollLeft()/2,
                width:'0%',
                height:'0%'
            });
            // console.log($('#'+$(this).siblings('span').text()));
            $('#'+$(this).siblings('span').text()).css({'display': 'block','z-index':'2'});
            $('#'+$(this).siblings('span').text()).animate({
                top:'0',
                left:$(window).scrollLeft(),
                width:'100%',
                height:'100%'
            },function () {
                // $('.dj').fadeIn();
            });
        });
    }
});