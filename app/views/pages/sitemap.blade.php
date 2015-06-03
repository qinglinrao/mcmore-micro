@extends('public.html')

@section('content')

@section('title'){{AppHelper::tdk('title',$arti)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$arti)}}@stop
@section('description'){{AppHelper::tdk('description',$arti)}}@stop


<!--main	-->
	
<div id="main">
  <div class="map-wrap wrap">
	
	<div class="map-content">
		<ul class="map-list">
			<li class="clearfix">
				<h4 class="left-title"><a href="http://www.mcmore.com/">首页</a><span class="line"></span></h4>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a >麦多商城产品</a><span class="line"></span></h4>
				<div class="right-con">
					<a href="javascript:void(0)">手机商城系统</a>
					<a href="{{URL::route('pages','o2oshop')}}">O2O商城系统定制</a>
					<a href="{{URL::route('pages','dyhshop')}}">多用户商城系统定制</a>
					<a href="{{URL::route('pages','pcshop')}}">网上商城系统定制</a>
					<a href="{{URL::route('pages','wxshop')}}">微信商城系统定制</a>
					<a href="{{ URL::route('about.index', array('about'=>'tool'))}}">营销工具</a>
				</div>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a href="{{URL::route('pages','fangan')}}">行业解决方案</a><span class="line"></span></h4>
				<div class="right-con">
					@foreach($solutions as $k => $solution)
					<a href="{{URL::route('fangan.detail', ['id'=> $solution->id])}}">{{ $solution->name }}</a>
					@endforeach
				</div>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a href="{{URL::route('pages','case')}}">商城案例</a><span class="line"></span></h4>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a href="{{URL::route('pages','fangan')}}">电商资讯</a><span class="line"></span></h4>
				<div class="right-con">
					@foreach($categories as $key => $category)
					<a href="{{ URL::route('news.list', $category->code) }}">{{{ $category->name }}}</a>
					@endforeach
				</div>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a href="http://www.mcmore.com/about.html">关于麦多</a><span class="line"></span></h4>
				<div class="right-con">
					<a href="{{URL::route('mdnews.index')}}">麦多公告</a>
					<a href="http://www.mcmore.com/law.html">法律声明</a>
                    <a href="http://www.mcmore.com/recruit.html">人才招聘</a>
                    <a href="http://www.mcmore.com/recruit.html">联系我们</a>
                    <a href="http://www.mcmore.com/link.html">友情链接</a>
                    <a href="http://www.mcmore.com/buy.html">购买流程</a>
				</div>
			</li>
			
			<li class="clearfix">
				<h4 class="left-title"><a href="{{ URL::route('about.index', array('about'=>'about'))}}">Tag标签集</a><span class="line"></span></h4>
				<div class="right-con">
					<a href="http://www.mcmore.com/tag-1.html">java商城系统</a>
					<a href="http://www.mcmore.com/tag-2.html">php商城系统</a>
                    <a href="http://www.mcmore.com/tag-3.html">php开源商城系统</a>
                    <a href="http://www.mcmore.com/tag-4.html">php网上商城系统</a>
                    <a href="http://www.mcmore.com/tag-5.html">b2b2c商城系统</a>
                    <a href="http://www.mcmore.com/tag-6.html">b2b商城系统</a>
					<a href="http://www.mcmore.com/tag-7.html">b2b商城网站</a>
					<a href="http://www.mcmore.com/tag-8.html">b2b商城建设</a>
                    <a href="http://www.mcmore.com/tag-9.html">b2c商城</a>
                    <a href="http://www.mcmore.com/tag-10.html">b2c商城系统</a>
                    <a href="http://www.mcmore.com/tag-11.html">b2c网上商城</a>
                    <a href="http://www.mcmore.com/tag-12.html">o2o电子商务平台</a>
					<a href="http://www.mcmore.com/tag-13.html">o2o商城</a>
					<a href="http://www.mcmore.com/tag-14.html">o2o商城系统</a>
                    <a href="http://www.mcmore.com/tag-15.html">o2o网上商城</a>
                    <a href="http://www.mcmore.com/tag-16.html">本地o2o商城</a>
                    <a href="http://www.mcmore.com/tag-17.html">电商系统</a>
                    <a href="http://www.mcmore.com/tag-18.html">商城网站报价</a>
					<a href="http://www.mcmore.com/tag-19.html">网上商城系统哪家好</a>
					<a href="http://www.mcmore.com/tag-20.html">微商城是什么</a>
                    <a href="http://www.mcmore.com/tag-21.html">微商城怎么开</a>
                    <a href="http://www.mcmore.com/tag-22.html">电商网站建设</a>
                    <a href="http://www.mcmore.com/tag-23.html">app商城制作</a>
                    <a href="http://www.mcmore.com/tag-24.html">购物网站建设</a>
					<a href="http://www.mcmore.com/tag-25.html">商城网站建设</a>
					<a href="http://www.mcmore.com/tag-26.html">商城网站制作</a>
                    <a href="http://www.mcmore.com/tag-27.html">网上商城建设</a>
                    <a href="http://www.mcmore.com/tag-28.html">网上商城网站建设</a>
                    <a href="http://www.mcmore.com/tag-29.html">网上商城制作</a>
                    <a href="http://www.mcmore.com/tag-30.html">微商城开发</a>
					<a href="http://www.mcmore.com/tag-31.html">免费网店系统</a>
					<a href="http://www.mcmore.com/tag-32.html">电子商务系统</a>
                    <a href="http://www.mcmore.com/tag-33.html">独立网店系统</a>
                    <a href="http://www.mcmore.com/tag-34.html">独立商城系统</a>
                    <a href="http://www.mcmore.com/tag-35.html">分销系统</a>
                    <a href="http://www.mcmore.com/tag-36.html">购物系统</a>
					<a href="http://www.mcmore.com/tag-37.html">开源商城系统</a>
					<a href="http://www.mcmore.com/tag-38.html">开源网店系统</a>
                    <a href="http://www.mcmore.com/tag-39.html">商城网站系统</a>
                    <a href="http://www.mcmore.com/tag-40.html">网店系统</a>
                    <a href="http://www.mcmore.com/tag-41.html">网上购物系统</a>
                    <a href="http://www.mcmore.com/tag-42.html">移动b2b商城</a>
					<a href="http://www.mcmore.com/tag-43.html">微商城系统</a>
					<a href="http://www.mcmore.com/tag-37.html">开源商城系统</a>
					<a href="http://www.mcmore.com/tag-44.html">手机app商城</a>
                    <a href="http://www.mcmore.com/tag-45.html">手机商城网站</a>
                    <a href="http://www.mcmore.com/tag-46.html">手机网站建设</a>
                    <a href="http://www.mcmore.com/tag-47.html">手机网站开发</a>
                    <a href="http://www.mcmore.com/tag-48.html">手机网站设计</a>
					<a href="http://www.mcmore.com/tag-49.html">手机网站制作</a>
				</div>
			</li>
			
			
		</ul>
	</div>
	<div class="contact-us-bg">	
	</div>
  </div>
</div>
<!--main -end	-->


@stop
