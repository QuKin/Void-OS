$(function () {
    setInterval(function () {
        var time=new Date();
        var hours = time.getHours();
        var minutes = time.getMinutes();
        var seconds = time.getSeconds();

        var month = time.getMonth()+1;
        var dates = time.getDate();
        var full = time.getFullYear();
        var day = time.getDay();
        if(hours<10){
            hours = '0'+hours;
        }
        if(minutes<10){
            minutes = '0'+minutes;
        }
        if(seconds<10){
            seconds = '0'+seconds;
        }
        if(month<10){
            month="0"+month;
        }
        if(dates<10){
            dates="0"+dates;
        }
        var week=new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
        $('h1').text(hours+":"+minutes+":"+seconds);
        $('h3').text(full+'年 '+month+'月 '+dates+'日 '+week[day]);
    })
})