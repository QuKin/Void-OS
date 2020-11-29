$(function () {
    $('#add').click(function(){
        $('#tc').slideDown();
        $('#qx').css('display','block');
    });
    $('#qx').click(function(){
        $('#tc').slideUp();
        $(this).css('display','none');
    });

    $('li').click(function(event){
        var x=event.pageX;
        var y=event.originalEvent.y ||event.originalEvent.layerY || 0;
        $('.tp_max_img').attr('src',$(this).children('img').attr('src'));
        $('.tp_max_img').css({
            width: $(this).children('img').width()+$(this).children('img').width()/2,
            height: $(this).children('img').height()+$(this).children('img').height()/2,
        });
        $('#tp_max').css({display:'block',top:y-$(this).children('img').height()/2,left:x-$(this).children('img').width()/2});
    });

    $('#tp_max').click(function(){
        $(this).fadeOut();
    });

    $(".img_li").bind("contextmenu", function () {
        if (confirm('是否删除')){
            console.log($(this).children('img').attr('src').split('/')[1]);
            window.location.href='./del.php?del='+$(this).children('img').attr('src').split('/')[1];
        }
        return false;
    });

    if ($('body').width()>650) {
        $('.img_li').dblclick(function () {
            if (confirm('是否删除')) {
                console.log($(this).children('img').attr('src').split('/')[1]);
                window.location.href = './del.php?del=' + $(this).children('img').attr('src').split('/')[1];
            }
        });
    }

});