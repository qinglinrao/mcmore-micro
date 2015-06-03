@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')

<div class="banner mainwidth">
  <div class="banimg">
    <img src="../sunnsoft/images/banner01.jpg" alt="营销工具">
  </div>
</div><!-- banner -->

<div class="main-content">

                 <div class="crumbs mainwidth">您现在的位置：
                 <a href="http://www.mcmore.com/">麦多商城系统</a> > <b>营销工具</b></div>
                 <div class="lr-mablock">
                     <div class="block-top-mess">
                       <div class="tm-title"><h2>粉丝互动营销工具</h2></div>
                       <div class="en-title">A fan interactive marketing tool</div>
                       <div class="tm-content nobd pt10">玩、有趣！更能带来极速传播，轻松提高粉丝互动率，利用微信等热门移动端渠道，为您的品牌带来更多曝光量！
                       </div>
                     </div><!-- 区块头部文字描述 -->
                     <div class="lr-con-img pb10">
                        <img src="/sunnsoft/images/tool-01.png">
                     </div><!-- 区块大图 -->
                 </div>


                 <div class="lr-mablock gray-bg">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-left"><img src="/sunnsoft/images/tool-02.png"></div>
                          <div class="lc-word lc-right  pt130">
                            <h2>大转盘抽奖</h2>
                            <div class="lw-en">Roulette</div>
                            <p>
                              拟真大转盘，商家可以设置用户在消费前或者消费后，满足指定金额才可拉动大转盘抽奖，亦可开放面向全部进入商城的用户，设置灵活自主。根据商家设定的概率以及规则，用户有一定机会获得大转盘的奖品，奖品支持设置实物奖品、虚拟货币、优惠券、红包等多种形式。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块01 -->

                 <div class="lr-mablock">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-right"><img src="/sunnsoft/images/tool-03.png"></div>
                          <div class="lc-word lc-left  pt130">
                            <h2>刮刮卡</h2>
                            <div class="lw-en">Scratch card</div>
                            <p>
                              商家可以对消费者发放刮刮卡，刮开内容可以设置为实物奖品、优惠券、红包等，根据商家设置的获取条件，消费者进行获取，刮开随机得奖，增添玩游戏的刺激感同时，让用户对品牌倍增好感。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块02 -->

                 <div class="lr-mablock gray-bg">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-left"><img src="/sunnsoft/images/tool-04.png"></div>
                          <div class="lc-word lc-right  pt130">
                            <h2>拼手机，抢红包</h2>
                            <div class="lw-en">Splicing mobile phone, grab a red envelope</div>
                            <p>
                              巧妙地利用了拼手气抢红包的功能来做传播，最实际的目的却是引导参与者在未抢领道红包的情况下，进店消费促销产品；在参与者抢到“红包”的时候，由于派发的红包仅能在自家商城中抵现试用，因此将更多潜在顾客转化为商城顾客。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块03 -->

                 <div class="lr-mablock">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-right"><img src="/sunnsoft/images/tool-05.png"></div>
                          <div class="lc-word lc-left  pt130">
                            <h2>炫酷H5动态 品牌杂志</h2>
                            <div class="lw-en">Cool H5 dynamic brand magazine</div>
                            <p>
                              用精美图片和音乐来介绍你的品牌和商品，相比于传统APP和在线应用Ta无需下载，没有等待。
全面支持图文、视频、音频、GPS导航、LBS定位、3D重力感应、在线预约、在线购买、一键拨号、一键分享、后台数据统计和商业数据分析等交互体验是社交网络里连接企业和用户的营销利器，让你和顾客直面沟通、身临其境
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块04 -->



               @include('public.zhuce')

            </div>
            <!-- 内容区 -->

@stop