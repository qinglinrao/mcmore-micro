@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')
    @include('public.register')

    <div class="section s2">
        <div class="cd-s2-title">最懂SEO的商城系统,源源不断的流量</div>
        <div class="cd-s2-text">麦多懂得独立商城最重要的数流量来源就是百度、360等搜索引擎，因此在SEO搜索优化上做的更为全面，麦多商城系统支持商城全局SEO设置及每个详细页的标题、描述、关键字SEO设置，为您的商城引入源源不断的流量。</div>
        <div class="cd-s2-img">
            <img src="/img/marketing-1.jpg" width="95%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">丰富的粉丝互动营销工具</div>
        <div class="cd-s2-text">移动端电商制胜法宝唯有互动营销，麦多为用户专门研发了各种主流的互动营销工具，H5炫酷的动态营销杂志，派红包，大转盘抽奖，刮刮卡。</div>
        <div class="marketing">
            <ul>
                <li>
                    <div class="mt mt-left">
                        <div class="mt-title">炫酷动态杂志</div>
                        <div class="mt-img"><img src="/img/marketing-2-1.png" width="" height="auto"></div>
                        <div class="mt-text">画报式宣传品牌</div>
                        <div class="mt-detailed">查看详情&gt;&gt;</div>
                    </div>
                    <div class="mt mt-right">
                        <div class="mt-title">拼手气，抢红包</div>
                        <div class="mt-img"><img src="/img/marketing-2-2.png" width="" height="auto"></div>
                        <div class="mt-text">发红包，抢人气</div>
                        <div class="mt-detailed">查看详情&gt;&gt;</div>
                    </div>
                </li>
                <li>
                    <div class="mt mt-left">
                        <div class="mt-title">大转盘抽奖</div>
                        <div class="mt-img"><img src="/img/marketing-2-3.jpg" width="" height="auto"></div>
                        <div class="mt-text">转一转，好运即来</div>
                        <div class="mt-detailed">查看详情&gt;&gt;</div>
                    </div>
                    <div class="mt mt-right">
                        <div class="mt-title">刮刮卡</div>
                        <div class="mt-img"><img src="/img/marketing-2-4.jpg" width="" height="auto"></div>
                        <div class="mt-text"> 刮彩票一样的快感</div>
                        <div class="mt-detailed">查看详情&gt;&gt;</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">一键分销，海量流量滚滚而来</div>
        <div class="cd-s2-text">麦多分销功能致力于打造一个商品快速销售和流通的平台，结合麦多手机商城，帮助中小买家解决快速清仓出货问题。</div>
        <div class="cd-s2-img">
            <img src="/img/marketing-3.jpg" width="83%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">坐拥强大CRM系统，让您与顾客之间零距离</div>
        <div class="cd-s2-text">通过强大的CRM分析系统，让您可以发展并积累真正属于您自己商城的忠实会员，掌握会员的手机号、邮件、地址等详细信息形成您强大CRM系统，可以进行分组营销。为您吸引更多新客户、留住老客户以及将已有客户转为忠实客户。</div>
        <div class="cd-s2-img">
            <img src="/img/marketing-4.jpg" width="83%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">详尽的手机商城数据分析系统</div>
        <div class="cd-s2-text">详尽的数据分析系统，为您时刻关注消费者在商城的线上购物行为，通过购物频次、商品被收藏、浏览次数等多角度数据，发现对企业商业决定有益的数据信息，帮助企业改善产品或服务。</div>
        <div class="cd-s2-img">
            <img src="/img/marketing-5.jpg" width="83%" height="auto">
        </div>
    </div>
    <div class="section s2">
        <div class="cd-s2-title">麦多自主研发，移动端在线客服</div>
        <div class="cd-s2-text">商城未来将内嵌麦多自主研发的移动端在线客服，有助于帮助移动端的商城打破无法为用户提供即时服务的困境。</div>
        <div class="cd-s2-img">
            <img src="/img/marketing-6.jpg" width="83%" height="auto">
        </div>
    </div>
@stop
