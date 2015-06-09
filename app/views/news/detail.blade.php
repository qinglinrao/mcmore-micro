@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    <div id="main">
        <div id="dynamics-detailed-header">
            <div class="ddh-back-arrow">
                <a href="">
                    <img src="/img/icon/left-arrow.png">
                </a>
            </div>
            <div class="ddh-title"><p>百度密谋O2O 不曾对电商死心</p></div>
            <div class="ddh-share">
                <a href="">
                    <img src="/img/icon/share.png">
                </a>
            </div>
        </div>

        <div id="dynamics-brief">
            <div class="dynamics-brief-title">
                百度密谋O2O 不曾对电商死心
            </div>
            <div class="dynamics-brief-text"><b>摘要：</b>据麦多商城系统获悉，百度将开通电商O2O商城系统平台“百度MALL”。看到这里，小编忍不住想说，电商虐百度千百遍,百度待电商入初恋呢。回归百度这些年来的电商发展历史，可谓是屡战屡败，没有任何起色。</div>
            <div id="dynamics-brief-other">
                <div id="dynamics-brief-time">2014-10-13 12:10</div>
                <div id="dynamics-brief-comment">56</div>
                <div id="dynamics-brief-browse">112</div>
            </div>
        </div>
        <div class="dynamics-details-detailed">
            <div class="dynamics-detailed-text">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;据麦多商城系统获悉，百度将开通电商O2O商城系统平台“百度MALL”。看到这里，小编忍不住想说，电商虐百度千百遍,百度待电商入初恋呢。回归百度这些年来的电商发展历史，可谓是屡战屡败，没有任何起色。</p>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;早在2208年，百度就已经推出了O2O网购平台百度有啊，期间有啊曾关闭，也曾上线，但是百度有啊在这些年里一直也没有给百度在O2O电商带来实质的发展。2010年，百度也和日本电商巨头乐天合作过，建设了网上购物商城系统，品牌是“乐酷天”，但是在2012年就夭折了。直到2014年，百度的爱乐活再次向B2C电商转型，但是也没有很大的发展，甚至在行业内的影响和存在感都急剧下降。百度此次的O2O项目主要是通过邀请商家入驻，经营模式主要是以线上销售品牌产品，与线下实体店结合的方式。</p>
            </div>
        </div>

        <div class="last-next sd-last-next">
            <a href="">
                <div class="last-one"><b>上一篇：</b>“小日子”获千万天使投资 打造O2O文艺平台</div>
            </a>
            <a href="">
                <div class="next-one"><b>下一篇：</b>劲霸男装总经理转战女装电商 加入Lily女装</div>
            </a>
        </div>

        <div class="recommend-news">
            <div class="recommend-news-title">电商资讯相关推荐</div>
            <div class="recommend-news-list">
                <ul>
                    <li>
                        <a href="">
                            用独立微信商城系统创业的优势
                        </a>
                    </li>
                    <li>
                        <a href="">
                            php商城系统相关知识普及
                        </a>
                    </li>
                    <li>
                        <a href="">
                            建立在商城系统上的o2o餐饮品牌出路在哪？
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="cd-comment">
            <div class="comment-title">
                全部评论
                <span></span>
            </div>
            <div id="comment-list">
                <ul>
                    <li>
                        <div class="user-comment">
                            <div class="comment-top">
                                <div class="user-name">遇见</div>
                                <div class="comment-time">2015-03-25 发表</div>
                            </div>
                            <div class="comment-detailed">多种团购服务集于一体，使用起来非常的方便。尤其是一些高频次的团购服务内容，像是美食、电影、KTV等，是很赞的一个团购商城。</div>
                        </div>
                    </li>
                    <li>
                        <div class="user-comment">
                            <div class="comment-top">
                                <div class="user-name">流连忘返</div>
                                <div class="comment-time">2015-03-25 发表</div>
                            </div>
                            <div class="comment-detailed">商城网站案例棒棒哒！</div>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="i-want-comment">
                <form>
                    <input type="text" name="comment" placeholder="请输入点评内容">
                </form>
            </div>
        </div>

    </div>


@stop