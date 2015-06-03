<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>麦多</title>
    {{ HTML::style('assets/weixin/css/phone.css') }}
    {{ HTML::script('sunnsoft/js/jquery.min.js') }}
    @if($success)
        <script>
            alert('登记成功')
        </script>
    @endif
</head>

<body>
<div class="mcmore-wrapper phone">
    <div class="consulting-main-wrap ">
        <div class="common-title">
            <div class="logo">
                {{ HTML::image('assets/weixin/images/logo1.png') }}
            </div>
            <h1>试用申请</h1>
            <a class="contact-us-tel" href="tel:4008388381">{{ HTML::image('assets/weixin/images/contact-us-top-tel.png') }}</a >
        </div>
        <div class="contact-us-wrap">
            <div class="contact-us"><!-- 表单 -->
                @if ($errors->any())
                    <div class="ui error message">
                        <ul>
                            {{ implode('', $errors->all('<li>:message</li>')) }}
                        </ul>
                    </div>
                @endif
                {{ Form::open(['class'=>'message-form']) }}
                {{ Form::text('name', null, ['class'=>'message-name', 'placeholder'=>'您的姓名:']) }}
                {{ Form::text('mobile', null, ['class'=>'message-tel', 'placeholder'=>'您的联系电话:']) }}
                {{ Form::text('email', null, ['class'=>'message-email', 'placeholder'=>'您的邮箱:']) }}
                {{ Form::textarea('detail', null, ['class'=>'message-con', 'placeholder'=>'请输入咨询内容']) }}
                {{ Form::submit('提交申请', ['class'=>'message-submit']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
