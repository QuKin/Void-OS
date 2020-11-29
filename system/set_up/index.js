$(function () {
    $('li').click(function () {
        $('#tc').slideDown();
        $('h2').html($(this).children('span').html());
        $('#qx').css('display','block');
    });
    $('#top').click(function () {
        $('h2').html($(this).children('p').html());
        $('#tc').slideDown();
        $('#qx').css('display','block');
    });
    $('#qx').click(function () {
        $('#tc').slideUp();
        $('#qx').css('display','none');
    });
    $('#tc p').click(function () {
        $.removeCookie('user', { path: '/' });
        window.location.href='../../index.php';
    });
});