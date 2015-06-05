@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')

   @include('public.register')

    <div class="section cd-s1">
        <div id="cd-s1-title">麦多商城系统</div>
        <div id="cd-s1-en">Online Mall system</div>
        <div class="cd-s1-text"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;麦多手机商城系统采用行业先进的HTML5技术，与传统意义上的WAP手机商城不同，麦多手机电商系统使你的手机网店更加接近手机APP界面，界面交互完美而且功能完善。支持二维码快速扫码访问手机商城，支持手机商城可视化编辑，能随意拖拽商城模块，个性化装修手机商城网店。</div>
        <div id="cd-s1-img">
            <img src="/img/quick-build-1.png" width="90%" height="auto">
        </div>
    </div>

    <div class="section s2">
        <div class="cd-s2-title">快速、免搭建移动商城系统</div>
        <div class="cd-s2-text">    采用SAAS模式，即开即用，无需开发，无需等待，即可开启您的电商之旅。</div>
        <div class="cd-s2-img">
            <img src="/img/quick-build-2.png" width="95%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">灵活拓展，未来拥有更多可能</div>
        <div class="cd-s2-text">      麦多手机商城系统将在未来推出丰富的可拓展插件，您可以根据自身手机商城发展需求灵活选择合适自己的商城插件进行拓展，再也不必被平台框住，想拓就拓。</div>
        <div class="cd-s2-img">
            <img src="/img/quick-build-3.png" width="83%" height="auto">
        </div>
    </div>
@stop
