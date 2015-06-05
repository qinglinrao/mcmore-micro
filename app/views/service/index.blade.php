@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')
    @include('public.register')
    <div id="main-content">
        <div class="section">
            <h2 class="content-title">电商服务</h2>
            <div id="split-line">
                <img src="/img/icon/service-under-line.png">
            </div>
            <div class="content-intro">
                专业服务覆盖电商所需，您只需要专注销售任务即可。
            </div>

            <div id="ser-1">
                <ul>
                    <li>
                        <div class="service ser-left">
                            <div class="ser-icon">
                                <a href="{{URL::route('service.detail',array('id'=>1))}}"><img src="/img/service-1.jpg" width="100%" height="100%"></a>
                            </div>
                            <a href="{{URL::route('service.detail',array('id'=>1))}}"><p class="ser-title">开店服务</p></a>
                            <ul class="ser-detailed">
                                <li>+ 云主机部署</li>
                                <li>+ 网站备案</li>
                                <li>+ 域名购买</li>
                            </ul>
                        </div>
                        <div class="service ser-right">
                            <div class="ser-icon">
                                <a href="{{URL::route('service.detail',array('id'=>2))}}"><img src="/img/service-2.jpg" width="100%" height="100%"></a>
                            </div>
                            <a href="{{URL::route('service.detail',array('id'=>2))}}"><p class="ser-title">培训服务</p></a>
                            <ul class="ser-detailed">
                                <li>+ 商城操作指引</li>
                                <li>+ 产品上架培训</li>
                                <li>+ 专属商城小秘书</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="service ser-left">
                            <div class="ser-icon">
                                <a href="{{URL::route('service.detail',array('id'=>3))}}"><img src="/img/service-3.jpg" width="100%" height="100%"></a>
                            </div>
                            <a href="{{URL::route('service.detail',array('id'=>3))}}"><p class="ser-title">技术服务</p></a>
                            <ul class="ser-detailed">
                                <li>+ 7*24小时技术响应</li>
                                <li>+ 网站资料定期备份</li>
                                <li>+ 数据库备份</li>
                            </ul>
                        </div>
                        <div class="service ser-right">
                            <div class="ser-icon">
                                <a href="{{URL::route('service.detail',array('id'=>4))}}"><img src="/img/service-4.jpg" width="100%" height="100%"></a>
                            </div>
                            <a href="{{URL::route('service.detail',array('id'=>4))}}"><p class="ser-title">营销服务</p></a>
                            <ul class="ser-detailed">
                                <li>+ SEO优化推广</li>
                                <li>+ 短信接口申请</li>
                                <li>+ 400电话申请</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2 class="content-title">其他商城系统定制服务</h2>
            <div id="split-line">
                <img src="/img/icon/custom-under-line.png">
            </div>
            <div class="content-intro">
                专业服务覆盖电商所需，您只需要专注销售任务即可。
            </div>
            <div id="cus">
                <ul>
                    <li>
                        <div class="custom cus-left">
                            <div class="cus-icon">
                                <a href="{{URL::route('pages',array('page_code'=>'o2o'))}}">
                                    <img src="/img/service-5.png" width="100%" height="100%">
                                </a>
                            </div>
                            <p class="cus-title">O2O商城系统</p>
                        </div>
                        <div class="custom cus-right">
                            <div class="cus-icon">
                                <a href="{{URL::route('pages',array('page_code'=>'dyh'))}}">
                                    <img src="/img/service-6.jpg" width="100%" height="100%">
                                </a>
                            </div>
                            <p class="cus-title">多用户商城系统</p>
                        </div>
                    </li>

                    <li>
                        <div class="custom cus-left">
                            <div class="cus-icon">
                                <a href="{{URL::route('pages',array('page_code'=>'pc'))}}">
                                    <img src="/img/service-7.jpg" width="100%" height="100%">
                                </a>
                            </div>
                            <p class="cus-title">网上商城系统</p>
                        </div>
                        <div class="custom cus-right">
                            <div class="cus-icon">
                                <a href="{{URL::route('pages',array('page_code'=>'wx'))}}">
                                    <img src="/img/service-8.jpg" width="100%" height="100%">
                                </a>
                            </div>
                            <p class="cus-title">微信商城系统</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@stop