$(function () {
    $('img').click(function () {
        var span=$(this).next('span').text();
        var logo=$(this).siblings('div').css('background-image').split('url("')[1].split('")')[0];
        var p=$(this).siblings('p').text();
        console.log(logo);
        window.location.href='./tj.php?wz='+span+'&logo='+logo+'&bt='+p;
    });
})