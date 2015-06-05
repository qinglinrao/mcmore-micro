@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')
    @include('public.register')
    <div class="contet">
        <div class="section cd-s1">
            <div id="cd-s1-title">麦多商城模板设计</div>
            <div id="cd-s1-en">MCMORE MODEL GALERY</div>
            <div class="cd-s1-text">麦多不仅仅为您提供海量商城模板，我们更为您提供过千上万种个性化商城的可能覆盖服装、建材、数码、家具、鞋靴等多个行业；商城模版，购物商城模板，购物网站模板，商城网站模板，手机购物网站模板，网上商城模板<br>（仅适合应用于麦多移动商城系统）</div>
        </div>

        <div class="section s2 model">
            <div class="cd-s2-title">海量行业商城模版，自定义组合</div>
            <div class="cd-s2-text ">麦多移动商城系统在移动商城网站建设方面，采用了电商行业领先的网店可视化编辑模式，可以充分满足您对移动商城建设的自主性和独特的奇思妙想，并且在使用方面可视化编辑容易操作，搭建网店不费力气，轻轻松松建设好您的购物商城，所见即所得。</div>
            <div class="cd-s2-img">
                <img src="/img/model-1.jpg" width="90%" height="auto">
            </div>
        </div>
        <div class="section s2">
            <div class="cd-s2-title">商城模版样式丰富，搭配百变</div>
            <div class="cd-s2-text ">麦多移动商城系统在装修购物商城方面支持随意拖拽商城模块，您的移动购物商城模块可以自定义布局，哪里不对拖哪里。根据自身行业的特殊需求和个人创意，更能方便快捷地打造专属于您的个性化手机商城网站。</div>
            <div class="cd-s2-img">
                <img src="/img/model-2.jpg" width="95%" height="auto">
            </div>
        </div>
        <div class="section s2">
            <div class="cd-s2-title">响应式设计</div>
            <div class="cd-s2-text ">针对移动端的特性，采用最新的响应式页面设计，无论采用的是什么类型的手机查看，都可以获得最优质的操作体验。</div>
            <div class="cd-s2-img">
                <img src="/img/model-3.jpg" width="94%" height="auto">
            </div>
        </div>
        <div class="section s2">
            <div class="cd-s2-title">良好的购物体验</div>
            <div class="cd-s2-text ">麦多拥有一支由专业的产品经理、UX设计师组成的团队，为整个系统进行体验优化，让操作如同习惯般的购物体验，减少用户思考操作的过程，在不知不觉中促成成交。</div>
            <div class="cd-s2-img">
                <img src="/img/model-4.jpg" width="100%" height="auto">
            </div>
        </div>
    </div>
@stop