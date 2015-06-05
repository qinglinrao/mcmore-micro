@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')
    @include('public.register')

    <div id="content">
        <div id="rich-function-title">
            <div id="rf-content-title-1">麦多手机商城系统功能</div>
            <div id="rf-content-title-2">全面的商城系统功能模块</div>
        </div>

        <div class="rf-section">
            <div class="rf-title">基础功能</div>
            <div class="rf-title-en">Basic functions</div>
            <div class="rf-icon">
                <img src="/img/function-1.png" width="92%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">活动营销功能</div>
            <div class="rf-title-en">Event marketing function</div>
            <div class="rf-icon">
                <img src="/img/function-2.png" width="92%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">粉丝互动营销</div>
            <div class="rf-title-en">Fans interactive marketing</div>
            <div class="rf-icon">
                <img src="/img/function-3.png" width="90%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">CRM功能</div>
            <div class="rf-title-en">The function of CRM</div>
            <div class="rf-icon">
                <img src="/img/function-4.png" width="93%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">数据功能</div>
            <div class="rf-title-en">Data function</div>
            <div class="rf-icon">
                <img src="/img/function-5.png" width="90%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">个性定制</div>
            <div class="rf-title-en">Personality customization</div>
            <div class="rf-icon">
                <img src="/img/function-6.png" width="94%">
            </div>
        </div>
        <div class="rf-section">
            <div class="rf-title">接口拓展</div>
            <div class="rf-title-en">Interface development</div>
            <div class="rf-icon">
                <img src="/img/function-7.png" width="94%">
            </div>
        </div>
    </div>

    <div id="gotop" class="rf-up" style="display: none">
        <a href="#"><img src="/img/up.png"></a>
    </div>
@stop
@section('scripts')
    @parent
    <script>
        $(function(){
            $(window).scroll(function(){
                if($(window).scrollTop() > 100){
                    $('#gotop').css('display','block');
                }else{
                    $('#gotop').css('display','none');
                }
            });

            $("#gotop").click(function(){
                $('body,html').animate({scrollTop:0},500);
            });
        });
    </script>
@stop
