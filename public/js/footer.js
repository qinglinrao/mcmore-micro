
$(function($) {
    $("#wechat-number a").click( function () {

        var display =$('#footer-code img').css('display');
        if(display == 'none'){
            $('#footer-code img').show();
        }else{
            $('#footer-code img').hide();
        }

    });

});