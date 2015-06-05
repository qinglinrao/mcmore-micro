@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    @include('news.menu')
    @include('public.register')

    <div class="content">
        <div class="dynamics">
            <div class="dynamics-title">百度密谋O2O 不曾对电商死心</div>
            <div class="dynamics-detailed">
                <p>据麦多商城系统获悉，百度将开通O2O商城系统平台“百度MALL”。看到这里，小编不禁想到啦啦啦啦啦</p>
                <a href="">阅读全文</a>
            </div>
            <div class="dynamics-time">2014-10-13 12:10</div>
            <div class="dynamics-other">
                <div class="browse">
                    <img src="/img/icon/browse.png">
                    <span class="num">112</span>
                </div>
                <div class="comment">
                    <img src="/img/icon/comment.png">
                    <span class="num">56</span>
                </div>
            </div>
        </div>
    </div>



@stop