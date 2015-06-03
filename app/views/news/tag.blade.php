@extends('public.html')

@section('title'){{AppHelper::tdk('title',$tag)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$tag)}}@stop
@section('description'){{AppHelper::tdk('description',$tag)}}@stop

@section('content')


 <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> > <b>{{ $tag->name }}</b> </div>

              <!--main  --><!--行业资讯列表  -->
              <div id="main" >
                <div class="information-list-wrap">
                  <div class="information-con clearfix">
                    <div class="information-left">
                      <div class="information-left-wrap">
                        <!--电商资讯列表页列表-->
                        <div class="information-list-title clearfix" >
                          <h1>{{{ $tag->name }}}</h1>

                        </div>
                        <div class="information-con-list-wrap">
                          <ul class="information-con-list" >
                            <li class="information-con-item">
                              <ul class="information-sec-item-list" data-role="data-wrapper">
                                     @include('news.partials.news', ['type'=>$tag->code, 'items'=>$articles])



                              </ul>
                            </li>
                          </ul>
                        </div>
                       {{ $articles->links() }}
                      </div>

                    </div>

                    <div class="information-right" >
                      <div class="right-con">

                        <!--电商最新资讯-->
                            @include('news.blocks.latests')
                        <!--电商资讯推荐阅读-->
                             @include('news.blocks.recommends')

                 <!--ATg热门标签-->
                        <div class="hot-tags">
                          <div class="quote-title">
                            <h3>电商行业热门标签</h3>
                            <p>HOT TAGS</p>
                          </div>
                          <div class="common-tags-con margin-top">
                            <ul class="common-tag-list clearfix">
                            @foreach($list_tags as $list_tag)
                              <li><a href="{{URL::route('news.tag',['id'=>$list_tag->tag->id])}}">{{$list_tag->tag->name}}</a></li>

                            @endforeach
                            </ul>
                          </div>
                        </div>

                      </div>

                    </div>


                  </div>

                </div>

              </div>

              <!--main -end-->
            </div>
            <!-- 内容区 -->




     <!-- End main -->
  @stop