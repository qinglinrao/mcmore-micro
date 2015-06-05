@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')

    @include('public.register')

    <div class="section s2">
        <div class="cd-s2-title">专为移动端而生</div>
        <div class="cd-s2-text">麦多商城系统主打主流趋势移动端市场，采用响应式网站设计，无论您在哪个型号手机访问，都可以流畅、清晰，拥有良好的手机浏览和使用体验。</div>
        <div class="cd-s2-img">
            <img src="/img/experience-1.jpg" width="95%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">自由拖拽，操作简易随性</div>
        <div class="cd-s2-text">手机商城网站的所有模块组件块，拖拽入内即可开启使用，如玩游戏般的操作，无需费时学习，使用即上手。</div>
        <div class="cd-s2-img">
            <img src="/img/experience-2.jpg" width="83%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">精美丰富的商城模板供您选择</div>
        <div class="cd-s2-text">麦多移动商城系统为用户准备过百套免费的手机商城模版，供用户使用，未来也将会陆续发布更多精美、有个性的商城模版，没有美工也能与众不同。</div>
        <div class="cd-s2-img">
            <img src="/img/experience-3.jpg" width="83%" height="auto">
        </div>
    </div>
@stop
