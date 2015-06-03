@extends('public.html')
@section('title'){{AppHelper::tdk('title',$case)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$case)}}@stop
@section('description'){{AppHelper::tdk('description',$case)}}@stop


@section('content')
    <div id="case-detailed">
        <div id="case-detailed-img">
            <a id="back-arrow" href="#">
                <img id="back-arrow-icon" src="/img/icon/left-arrow.png">
            </a>

            <div  class="yiz-slider-2">
                <ul style="width: 100%;  left: 0px;">
                    <li style="width: 100%; height: 18.75rem;">
                        <img src="/img/case-detailed-1.jpg" width="100%" border="0" alt="案例图片">
                    </li>
                    <li style="width: 100%; height: 18.75rem;">
                        <img src="/img/case-detailed-1.jpg" width="100%" border="0" alt="案例图片">
                    </li>
                    <li style="width: 100%; height: 18.75rem;">
                        <img src="/img/case-detailed-1.jpg" width="100%" border="0" alt="案例图片">
                    </li>
                    <li style="width: 100%; height: 18.75rem;">
                        <img src="/img/case-detailed-1.jpg" width="100%" border="0" alt="案例图片">
                    </li>
                </ul>
            </div>
        </div>
        <div class="case-detailed-title">
            手机团购商城网站系统案例
        </div>
        <div class="case-detailed-text">手机团购商城网站是全国知名的手机端团购网站，采用了麦多多用户电商系统，能够支持多个商家进驻团购商城网站，包括美食、KTV、电影票、酒店、婚纱摄影等各个服务行业的商家，为人们的休闲生活提供了美食、KTV、电影票、酒店、婚纱摄影、美容等团购服务。</div>
        <div class="case-detailed-sys">
            <p><b>采用系统：</b>麦多多用户商城</p>
            <p><b>系统特色：</b></p>
        </div>
        <div class="case-detailed-other">
            <div class="case-detailed-time">  2014-10-13 12:10</div>
            <div class="case-detailed-comment">56</div>
            <div class="case-detailed-browse">112</div>
        </div>
    </div>

    <div class="last-next">
        <a href="">
            <div class="last-one"><b>上一篇：</b>倍护儿母婴APP商城案例</div>
        </a>
        <a href="">
            <div class="next-one"><b>下一篇：</b>带啥儿网上手机购物商城案例</div>
        </a>
    </div>

    <div class="cd-comment">
        <div class="comment-title">热门评论</div>
        <div class="user-comment">
            <div class="comment-top">
                <div class="user-name">遇见</div>
                <div class="comment-time">2015-03-25 发表</div>
            </div>
            <div class="comment-detailed">多种团购服务集于一体，使用起来非常的方便。尤其是一些高频次的团购服务内容，像是美食、电影、KTV等，是很赞的一个团购商城。</div>
        </div>
        <div class="user-comment">
            <div class="comment-top">
                <div class="user-name">流连忘返</div>
                <div class="comment-time">2015-03-25 发表</div>
            </div>
            <div class="comment-detailed">商城网站案例棒棒哒！</div>
        </div>
        <div class="user-comment">
            <div class="comment-top">
                <div class="user-name">流连忘返</div>
                <div class="comment-time">2015-03-25 发表</div>
            </div>
            <div class="comment-detailed">商城网站案例棒棒哒！</div>
        </div>
        <div class="user-comment">
            <div class="comment-top">
                <div class="user-name">流连忘返</div>
                <div class="comment-time">2015-03-25 发表</div>
            </div>
            <div class="comment-detailed">商城网站案例棒棒哒！</div>
        </div>

        <div id="i-want-comment">
            <form>
                <input type="text" name="comment" placeholder="请输入点评内容">
            </form>
        </div>
    </div>
@stop
@section('script')
    @parent
    <script type="text/javascript">
        $(function(){
            $('.yiz-slider-2').ScrollPic({
                Time: '3000',
                speed: '1000',
                autoscrooll: true
            });
        })
    </script>
@stop
