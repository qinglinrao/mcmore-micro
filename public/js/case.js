(function ($) {
    $(document).ready(function () {
        $('#comment-case form').submit(function () {
            var consulting = false;
            var id = $('.comment-id').val();
            var url = $(this).attr('action');
            $submitField = $('#comment-case .comment-submit')
            $.ajax({
                url: 'case-'+id+'/comment',
                data: $('#comment-case form').serialize(),
                type: 'post',
                dataType: 'json',

                success: function (result) {
                    if (result.state == 1) {
                        $.scojs_message('评论成功，等待后台审核！', $.scojs_message.TYPE_OK);
                        $('#comment-case form')[0].reset()
                    } else if (result.state == 0) {
                        $.scojs_message(result.msg, $.scojs_message.TYPE_ERROR);
                    }
                }
            })
            refresh_captcha();
            return false;
        })
    })
})(jQuery)


/*
$('#comment-form').submit(function(e) {
//            e.preventDefault();
//            var url = $(this).attr('action');
//            var $submitField = $(this).find('.message-submit');
//            var consulting = false;
//
//            $.ajax({
//                url: url,
//                data: $(this).serialize(),
//                type: 'post',
//                dataType: 'json',
//                beforeSend: function() {
//                    if (consulting == true)
//                        return;
//                    consulting = true;
//                    $submitField.val('提交中...');
//                },
//                complete: function() {
//                    consulting = false;
//                    $submitField.val('发表评论');
//                },
//                success: function(result) {
//                    if (result.state == 1) {
//                        $.scojs_message('发表成功！', $.scojs_message.TYPE_OK);
//                        $('#comment-form').reset();
//                        $('#consult-form-wrapper').fadeOut(200)
//                    } else if (result.state == 0) {
//                        $.scojs_message(result.msg, $.scojs_message.TYPE_ERROR);
//                    }
//                }
//            });
//
//            refresh_captcha()
//        });


*/
