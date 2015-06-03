;(function ($) {
    $(document).ready(function () {
        alert(8);
        $('#register-form form').submit(function () {
            var consulting = false;
            $submitField = $('#register-form .message-submit')
            $.ajax({
                url: '/zixun',
                data: $('#register-form form').serialize(),
                type: 'post',
                dataType: 'json',
                beforeSend: function () {
                    if (consulting == true)
                        return;
                    consulting = true;
                    $submitField.val('提交中...');

                },
                complete: function () {
                    consulting = false;
                    $submitField.val('提交留言');
                },
                success: function (result) {

                	if (result.state == 1) {
                        $.scojs_message('留言成功！', $.scojs_message.TYPE_OK);
                        $('#register-form form')[0].reset()
                    } else if (result.state == 0) {
                        $.scojs_message(result.msg, $.scojs_message.TYPE_ERROR);
                    }
                }
            })
            return false;
        })
    })
})(jQuery)


