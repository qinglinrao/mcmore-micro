@extends('public.html')

@section('title'){{AppHelper::tdk('title',$article)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$article)}}@stop
@section('description'){{AppHelper::tdk('description',$article)}}@stop

@section('content')

            <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> >
            <a href="{{URL::route('news')}}">电商资讯</a> >
           <b>{{{$category->name}}}</b></div>
              <!--main  --><!--行业资讯列表  -->
              <div id="main" >
                <div class="information-list-wrap">
                  <div class="information-con clearfix">
                    <div class="information-left">
                      <div class="information-left-wrap">
                        <!--电商资讯列表页列表-->
                        <div class="information-list-title clearfix" >
                          <h1 style="font-size: 36px">{{{ $category->name }}}</h1>
                          <div class="title-right">
                            <span class="first"><p> {{{ $weekly }}}</p>Weekly</span>
                            <span class=""><p>{{{ $articles->getTotal() }}}</p>Total</span>
                          </div>
                        </div>
                        <div class="information-con-list-wrap">
                          <ul class="information-con-list" >
                            <li class="information-con-item">
                              <ul class="information-sec-item-list" data-role="data-wrapper" >

                                @include('news.partials.news', ['items'=>$articles])

                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="load-more">{{$articles->links()}}</div>
                      </div>

                    </div>

                    <div class="information-right" >
                      <div class="right-con">
                        <!--热门标签-->
                        @include('news.blocks.tags')
                        <!--电商最新资讯-->
                        @include('news.blocks.latest_news')
                        <!--电商资讯推荐阅读-->

                         @include('news.blocks.recommends')
                      </div>
                    </div>
                  </div>

                </div>

              </div>

              <!--main -end-->
            </div>
            <!-- 内容区 -->



@stop