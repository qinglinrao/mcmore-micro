@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')

 <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">麦多商城系统</a> > 麦多试用活动</div>
            <div  id="main">
                <div class="common-title"><!-- 标题-->
                  <img src="/sunnsoft/images/event/try_00.jpg">
				  <img src="/sunnsoft/images/event/try_01.jpg">
				  <img src="/sunnsoft/images/event/try_02.jpg">
				  <img src="/sunnsoft/images/event/try_03.jpg">
				  <img src="/sunnsoft/images/event/try_04.jpg">
				  <img src="/sunnsoft/images/event/try_05.jpg">
				  <img src="/sunnsoft/images/event/try_06.jpg">
				  <img src="/sunnsoft/images/event/try_07.jpg">
				  <a target="_blank" href="{{URL::route('dj.index')}}"><img src="/sunnsoft/images/event/try_08.jpg">
				  </a>
                </div>
            </div>
</div>

@stop