$(function () {
    $(document).scrollLeft(0.1);
    $('#tj').click(function(){
        $('body').css('overflow-x','auto');
        $(document).scrollLeft($(window).width());
        $(this).fadeOut();
        $('body').css('overflow-x','hidden');
    });

    $('#fh').click(function () {
        $('body').css('overflow-x','auto');
        $(document).scrollLeft(-$(window).width());
        $('#tj').fadeIn();
        $('body').css('overflow-x','hidden');
    });

    $('li').click(function () {
        $('footer').slideDown();
        var bt=$(this).children('.bt').text();
        var dz=$(this).children('.dz').text();
        var wb=$(this).children('.txt').text();
        var size=$(this).children('.size').text();
        console.log(dz);
        $('#foot_lj').val(dz);
        $('#foot_p_size').text(size);
        $('#foot_p_bt').val(bt);
        $('#foot_p_bt2').val(bt);
        $('#foot_p_wb').text(wb);
    });

    $('#qx').click(function () {
        $('footer').slideUp();
        $('#foot_lj').val('');
        $('#foot_p_size').text('');
        $('#foot_p_bt').val('');
        $('#foot_p_bt2').val('');
        $('#foot_p_wb').text('');
    });
})