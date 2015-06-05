@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')

    @include('public.register')


    <div id="main-content">
        <h2 class="content-title">麦多商城系统优势</h2>
        <div id="split-line"><img src="/img/icon/sup-under-line.png"></div>
        <div class="content-intro">麦多移动电商系统拥有领先于行业的三大秘诀，快、顶尖设计、丰富的营销方案，我们关注用户的需求，让我们做的更好，更接地气。</div>
        <div class="section">
            <div class="section-intro backgroup-white">
                <h2 class="intro-title">快</h2>
                <h4 class="intro-title-en">Quickly create</h4>
                <div class="intro-icon-list">
                    <div class="intro-icon"><img src="/img/icon/home1-1.png" width="auto" height="100%" alt="免开发"></div>
                    <div class="intro-icon"><img src="/img/icon/home1-2.png" width="auto" height="100%" alt="一键导入商品"></div>
                    <div class="intro-icon last-icon"><img src="/img/icon/home1-3.png" width="auto" height="100%" alt="SAAS服务"></div>
                </div>
                <div class="intro-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有别于传统商城开发商的需要2-3个月的开发时间，麦多移动商城系统具备即开即用即上线销售的优势，让更多想要尝试电商的企业，能够更为迅速地进入销售，大大缩减了企业的时间成本。</div>
                <div class="intro-img"><img src="/img/home1.jpg" width="100%" height="auto"></div>
            </div>
            <div class="section-intro backgroup-white">
                <h2 class="intro-title">顶尖设计</h2>
                <h4 class="intro-title-en">Top design</h4>
                <div class="intro-icon-list">
                    <div class="intro-icon"><img src="/img/icon/home2-1.png" width="auto" height="100%" alt="自定义界面"></div>
                    <div class="intro-icon"><img src="/img/icon/home2-2.png" width="auto" height="100%" alt="丰富组件样式"></div>
                    <div class="intro-icon last-icon"><img src="/img/icon/home2-3.png" width="auto" height="100%" alt="精美商城模板"></div>
                </div>
                <div class="intro-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;麦多深知电商企业之痛，为麦多移动商城的商家准备了海量的商城模板，以及丰富的组件样式，商家可以根据自己的品牌调性，和促销需求，随意个性化地调整商城的外观设计，灵活、百变，拥有过万种个性化组合，随时随地满足您的个性化需求，不需要美工，不需要开发技术人员，一个普通的文员都能轻松搞定商城装修。</div>
                <div class="intro-img"><img src="/img/home2.jpg" width="100%" height="auto"></div>
            </div>
            <div class="section-intro backgroup-white">
                <h2 class="intro-title">丰富营销手段</h2>
                <h4 class="intro-title-en">Marketing means</h4>
                <div class="intro-icon-list home3-list">
                    <div class="intro-icon home3"><img src="/img/icon/home3-1.png" width="auto" height="100%" alt="大转盘"></div>
                    <div class="intro-icon home3"><img src="/img/icon/home3-2.png" width="auto" height="100%" alt="摇一摇"></div>
                    <div class="intro-icon home3"><img src="/img/icon/home3-3.png" width="auto" height="100%" alt="发红包"></div>
                    <div class="intro-icon last-icon home3"><img src="/img/icon/home3-4.png" width="auto" height="100%" alt="众筹"></div>
                </div>
                <div class="intro-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;迎合时代潮流，麦多移动商城系统拥有丰富的营销基因，丰富的粉丝互动营销，大转盘、发红包、摇一摇、众筹等，并且还在不断的迭代增加更多具有创意创新的互动玩法，帮助商家们宣传做得更好，销售做得更多！</div>
                <div class="intro-img"><img src="/img/home3.jpg" width="100%" height="auto"></div>
            </div>
        </div>
    </div>
@stop