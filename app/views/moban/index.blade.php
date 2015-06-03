@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')

<div class="banner mainwidth">
              <div class="banimg">
                <img src="/sunnsoft/images/banner01.jpg" alt="购物商城网站模版，涵盖多个行业的商城网站模版，模版设计精美">
              </div>
            </div><!-- banner -->
            
<div class="main-content">
            <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> > <b>商城模板</b></div>

                 <div class="lr-mablock">
                     <div class="block-top-mess pb60">
                       <div class="tm-title"><h1>麦多商城模板设计</h1></div>
                       <div class="en-title">McMore model gallery</div>
                       <div class="tm-content nobd pt10">麦多不仅仅为您提供海量商城模板，我们更为您提供过千上万种个性化商城的可能覆盖服装、建材、数码、家具、鞋靴等多个行业；手机购物商城模版，微信商城模版，购物网站模版，商城网站模版，网上商城模板（仅适合应用于麦多移动商城系统）
                       </div>
                     </div><!-- 区块头部文字描述 -->
                 </div>


                 <div class="lr-mablock gray-bg">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-left"><img src="/sunnsoft/images/template-01.png" alt="海量的行业商城网站模版"></div>
                          <div class="lc-word lc-right  pt130">
                            <h2>海量行业商城模版，自定义组合</h2>
                            <p>
                             麦多移动商城系统在移动商城网站建设方面，采用了电商行业领先的网店可视化编辑模式，可以充分满足您对移动商城建设的自主性和独特的奇思妙想，并且在使用方面可视化编辑容易操作，搭建网店不费力气，轻轻松松建设好您的购物商城，所见即所得。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块01 -->

                 <div class="lr-mablock">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-right"><img src="/sunnsoft/images/template-02.png" alt="网上购物商城模版样式丰富"></div>
                          <div class="lc-word lc-left  pt130">
                            <h2>商城模版样式丰富，搭配百变</h2>
                            <p>
                              麦多移动商城系统在装修购物商城方面支持随意拖拽商城模块，您的移动购物商城模块可以自定义布局，哪里不对拖哪里。根据自身行业的特殊需求和个人创意，更能方便快捷地打造专属于您的个性化手机商城网站。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块02 -->

                 <div class="lr-mablock gray-bg">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-left"><img src="/sunnsoft/images/template-03.png"  alt="购物网站模版，响应式设计"></div>
                          <div class="lc-word lc-right  pt130">
                            <h2>响应式设计</h2>
                            <p>
                              针对移动端的特性，采用最新的响应式页面设计，无论采用的是什么类型的手机查看，都可以获得最优质的操作体验。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块03 -->

                 <div class="lr-mablock">
                     <div class="lr-content clearfix">
                          <div class="lc-img lc-right"><img src="/sunnsoft/images/template-04.png" alt="网上商城模版良好的购物体验"></div>
                          <div class="lc-word lc-left  pt130">
                            <h2>良好的购物体验</h2>
                            <p>
                              麦多拥有一支由专业的产品经理、UX设计师组成的团队，为整个系统进行体验优化，让操作如同习惯般的购物体验，减少用户思考操作的过程，在不知不觉中促成成交。
                            </p>
                          </div>
                     </div>
                 </div>
                 <!-- 区块04 -->


                <div class="lr-mablock template-bl">
                    <div class="block-top-mess pb60">
                       <div class="tm-title">麦多商城网站优秀模板设计</div>
                     </div>
                     <div class="tm-content">
                       <ul class="tm-cul">
                         <li><img src="/sunnsoft/images/template-tu01.jpg" alt="手机购物商城模版，移动商城模版"></li>
                         <li><img src="/sunnsoft/images/template-tu02.jpg" alt="购物网站模版、购物商城模版"></li>
                         <li><img src="/sunnsoft/images/template-tu03.jpg" alt="商城系统模版网站，手机商城模版网站"></li>
                         <li><img src="/sunnsoft/images/template-tu04.jpg" alt="网上商城模版，微商城模版"></li>
                       </ul>
                     </div>

                 </div>


                @include('public.zhuce')

            </div>
            <!-- 内容区 -->
@stop