$(document).ready(function () {
    setInterval(function () {
        var time=new Date();
        var hour=time.getHours();
        var min=time.getMinutes();
        if (hour<10){
            hour='0'+hour;
        }
        if (min<10){
            min='0'+min;
        }
        $('#time_hour_p').text(hour);
        $('#time_minute_p').text(min);
    },1000);

    $('#main_one').click(function(){
        alert('登录成功');
        // window.open('./system/main.html');
        window.location.href='./system/main.php';
    });
});