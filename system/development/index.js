$(function () {
    $('#image_file').attr('disabled','disabled');
    $('#image_one').click(function () {
        $('#image_file').attr('disabled','disabled');
        $('#image_txt').removeAttr('disabled');
    });
    $('#image_two').click(function () {
        $('#image_file').removeAttr('disabled');
        $('#image_txt').attr('disabled','disabled');
    });
})