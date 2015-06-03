<!doctype html>
<!--[if lt IE 7]><html class='ie lte9 lte8 lte7 ie6' ><![endif]-->
<!--[if IE 7 ]><html class="ie lte9 lte8 lte7 ie7" ><![endif]-->
<!--[if IE 8 ]><html class="ie lte9 lte8 ie8" "><![endif]-->
<!--[if IE 9 ]><html class="ie lte9 ie9" ><![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" >
        <title>mcmore</title>
        {{ HTML::style('sunnsoft/css/mainstyle.css') }}
    </head>

    <body>
        <div class="body-wrap">
            @include('public.message')
            <div id="main" >
                <div class="comment" id="#comment-wrapper">
                    <div class="post-comment">
                        <div class="post-comment-wrap">
                            <div class="comment-form" >
                                {{ Form::open(['url'=>URL::route('news.comment', ['id'=>$id]), 'id'=>'comment-form']) }}
                                <P>
                                    <span>
                                        网友：
                                    </span>
                                    {{ Form::text('name', '', array('class'=>'name t-input', 'placeholder'=>'请输入昵称'))}}
                                </P>
                                {{ Form::textarea('detail', '', array('class'=>'comment-field message-con t-input', 'placeholder'=>'请输入点评内容！')) }}
                                <input type="submit" class="message-submit" value="发表评论" />
                                <div class="captcha clearfix">
                                    <span class="tag">
                                        验证码：
                                    </span>
                                    {{ Form::text('captcha', '', array('class'=>'captch-con')) }}
                                    <span class="captch-img">
                                        {{AppHelper::captcha()}}
                                    </span>
                                    <b class="comment-limit">
                                        剩余
                                        <span class="limit-counter">200</span>
                                        /最多输入
                                        <span>200</span>
                                    </b>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{AppHelper::assets([
        'libraries/jquery-1.11.1.js',
        'sunnsoft/js/jquery.slides.min.js',
        'sunnsoft/js/jquery.colorboxmin.js',
        'sunnsoft/js/jquery.pin.min.js',
        '/libraries/sco/sco.message.js',
        '/libraries/sco/sco.modal.js',
        '/libraries/sco/sco.panes.js',
        '/libraries/sco/sco.tab.js',
        '/libraries/WriteLimit/jquery.writelimit.js'
        ], '.js')}}
        <script type="text/javascript">
            (function ($) {
                $('.comment-field').writeLimit({
                    max: 200,
                    unit: 'chars',
                    counter: $('.limit-counter'),
                    overClass: 'color-red',
                });
                $(window.parent.document).find('#comment-frame').height(250).width(840);
            })(jQuery)
        </script>
        @yield('scripts')
    </body>
</html>
