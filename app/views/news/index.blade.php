@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')

<!-- Main -->


<div class="main-content gray-bg">
<div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> > <b>电商资讯</b></div>
<!--main  --><!--行业资讯首页  -->
<div id="main" >
<div class="information-wrap">
  <div class="information-con clearfix">
    <!--左边内容-->
    <div class="information-left">
      <div class="information-left-wrap">
        <!--左边选项卡标题-->
        <div class="information-title-list">
          <ul class="title-list clearfix tabs" id="tabs2">
          @foreach($categories as $key => $category)
              <li class="{{$key ===4 ? 'item-tag':''}} item-{{{ $category->code }}}">
                  <a target="_blank" href="{{ URL::route('news.list', $category->code) }}">
                     <h2>{{{ $category->name }}}</h2>
                  </a>
              </li>
              @endforeach
          </ul>
        </div>

    <div class="information-con-list-wrap">
      <!--左边选项卡列表-->
      <ul class="information-con-list tab_conbox2" id="tab_conbox2">

         @foreach($categories as $category)
              <li class="information-con-item " id="{{{ $category->code }}}{{ $key===0 ? ' active' : '' }}">
                  <ul class="information-sec-item-list">
                      @include('news.partials.news', ['type'=>$category->code, 'items'=>$category->articles])
                  </ul>
              </li>
              @endforeach

      </ul>
      <!--左边选项卡列表 end-->
    </div>
      </div>

    </div>

    <!--右边内容-->
    <div class="information-right" >
      <div class="right-con">

        <!--文章排行-->
         @include('news.blocks.charts')

        <!--电商资讯推荐阅读-->
          @include('news.blocks.recommends')

            <!--热门标签-->
        @include('news.blocks.tags')

      </div>
    </div>
  </div>

</div>
</div>
</div>

@stop