@extends('public.html')
@section('title'){{AppHelper::tdk('title',$article)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$article)}}@stop
@section('description'){{AppHelper::tdk('description',$article)}}@stop
@section('scripts')
@parent
<script type="text/javascript">
    (function($) {
        $.ajax({
            url: '<?php echo URL::route("news.update", array("id" => $article->id)) ?>'
        })
    })(jQuery)
</script>
@stop
@section('content')
  <div class="banner mainwidth">
              <div class="banimg">
                <img src="sunnsoft/images/solutions-banner.jpg" alt="麦多为您提供各种行业商城解决方案服务">
              </div>
            </div><!-- banner -->

<div class="main-content gray-bg">
            <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> >
            <a href="{{URL::route('pages','fangan')}}">行业解决方案</a> >
            <b>{{ $article->name }}</b></div>
                <div id="main" >
                  <div class="information-wrap">
                    <div class="information-con clearfix">
                      <div class="information-left">
                        <!--左边文章详情-->
                        <div class="article-wrap">
                          <h1 class="article-title">{{ $article->name }}</h1>
                          <div class="article-info clearfix">
                            <div class="info-left">
                              <span class="time">{{ date("Y-m-d H:i:s",strtotime($article->created_at)) }}</span>

                            </div>
                            <div class="info-right">
                              <span class="view-count">{{$article->view_count}}</span>
                              <span class="comment-count">{{ $article_num }}</span>
                            </div>
                          </div>
                          <div class="article-con" id="editor">
                            <div class="article-sum">
                              <p><span>摘要：</span>{{AppHelper::ellipse($article->brief,100,'')}}</p>

                            </div>
                            <div class="article-con-text">
                              {{ $article->detail }}
                            </div>
                          </div>

                          <div class="article-bottom">
                            <div class="article-bottom-wrap clearfix">

                               <div class="share-icons">
                              <table>
                                  <tr>
                                <td>分享到：</td>
                                <td><a class="jiathis_button_tsina"></a></td>
                                <td><a class="jiathis_button_tqq"></a></td>
                                <td><a class="jiathis_button_qzone"></a></td>
                                <td><a class="jiathis_button_douban"></a></td>
                                <td><a class="jiathis_button_renren"></a></td>
                                <td><a class="jiathis_button_weixin"></a></td>
                                <td><a rel="nofollow" href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a></td>
                                  </tr>
                              </table>
                            <!-- JiaThis Button END -->
                            </div>
                            </div>

                            <div class="next-previous">
                              <p class="prev">上一篇：{{$prev ? HTML::link(URL::route('fangan.detail',array('id'=>$prev->id)),AppHelper::ellipse($prev->name,40),[ 'target'=>'_blank']) : '没有了'}}</p>
                              <p class="next">下一篇：{{$next ? HTML::link(URL::route('fangan.detail',array('id'=>$next->id)),AppHelper::ellipse($next->name,40),[ 'target'=>'_blank']) : '没有了'}}</p>
                            </div>
                          </div>
                        </div>
                            @include('news.blocks.comments')
                        </div>

                      <div class="information-right" >
                        <div class="right-con">
                            @include('solutions.blocks.solution')
                            @include('solutions.blocks.consult')
                            @include('news.blocks.recommends')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
@stop