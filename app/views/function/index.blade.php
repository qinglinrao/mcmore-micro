@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    <div id="register">
        <a href=""><img id="reg-img" src="/img/icon/register.png"></a>
    </div>


    <div id="main-content">
        <h2 class="content-title">系统功能</h2>
        <div id="split-line"><img src="/img/icon/func-under-line.png"></div>
        <div class="content-intro">丰富的功能不断新增迭代，麦多移动电商系统，是您电商触电 的首选商城系统。</div>

        <div class="section">
            <ul id="func-list">
                <li>
                    <div class="func left-icon">
                        <img src="/img/icon/func-1.png" height="100%" width="auto">
                    </div>
                    <div class="func center-icon">
                        <img src="/img/icon/func-2.png" height="100%" width="auto">
                    </div>
                    <div class="func right-icon">
                        <img src="/img/icon/func-3.png" height="100%" width="auto">
                    </div>
                </li>
                <li>
                    <div class="func left-icon">
                        <img src="/img/icon/func-4.png" height="100%" width="auto">
                    </div>
                    <div class="func center-icon">
                        <img src="/img/icon/func-5.png" height="100%" width="auto">
                    </div>
                    <div class="func right-icon">
                        <img src="/img/icon/func-6.png" height="100%" width="auto">
                    </div>
                </li>
                <li >
                    <div class="func left-icon">
                        <img src="/img/icon/func-7.png" height="100%" width="auto">
                    </div>
                    <div class="func center-icon">
                        <img src="/img/icon/func-8.png" height="100%" width="auto">
                    </div>
                    <div class="func right-icon">
                        <img src="/img/icon/func-9.png" height="100%" width="auto">
                    </div>
                </li>
                <li id="last-li">更多系统功能阶段性迭代增加</li>
            </ul>
        </div>
    </div>
@stop