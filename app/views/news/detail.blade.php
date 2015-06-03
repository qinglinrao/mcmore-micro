@extends('public.html')
@section('title'){{AppHelper::tdk('title',$article)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$article)}}@stop
@section('description'){{AppHelper::tdk('description',$article)}}@stop

@section('scripts')
<script type="text/javascript">
    (function($) {
        $.ajax({
            url: '<?php echo URL::route("news.update", array("id" => $article->id)) ?>'
        })
    })(jQuery)
</script>
@stop
@section('content')
    <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> >
           <a href="{{URL::route('news')}}">电商资讯</a> >
           <a href="{{ URL::route('news.list', $article->category->code) }}">
            {{{ $article->category->name }}}</a> >
            <b>{{{ $article->name }}}</b>

           </div>
              <!--main  --><!--行业资讯详情页 -->
              <div id="main" >
                <div class="information-wrap">
                  <div class="information-con clearfix">
                    <div class="information-left">
                      <!--左边文章详情-->
                      <div class="article-wrap">
                        <h1 class="article-title"> {{{ $article->name }}}</h1>
                        <div class="article-info clearfix">
                          <div class="info-left">
                            <span class="time">{{ Carbon::parse($article->updated_at)->format('Y-m-d H:i') }}</span>

                          </div>
                          <div class="info-right">
                            <span class="view-count"> {{ $article->view_count }}</span>
                            <span class="comment-count"> {{$comments->count()}}</span>
                          </div>
                        </div>
                        <div class="article-con" id="editor">
                          <div class="article-sum">
                              @if($article->category_id == 8)
                            <p><span>问题补充：</span>
                                {{AppHelper::ellipse($article->instruction,125)}}
                            </p>
                             @else
                             <p><span>摘要：</span>
                                 {{AppHelper::ellipse($article->brief,125)}}
                             </p>
                              @endif


                          </div>
                          <div class="article-con-text">
                            {{ $article->detail }}
                          </div>
                        </div>
                        <div class="caveat"><i>声明：</i>文章"<span>{{{ $article->name }}}</span>"为<麦多<a href="http://www.mcmore.com/">商城系统</a>>原创文章，转载请注明出处,谢谢合作！</div>
                        <!--左边分享及标签-->
                        <div class="article-bottom">
                          <div class="article-bottom-wrap clearfix">
                            <div class="article-bottom-left">
                              @if(count($article->tags))
                                 <span>
                                     标签：
                                 </span>
                                 @foreach($article->tags as $tag)
                                 <a href="{{ URL::route('news.tag', $tag->id) }}">{{{ $tag->name }}}</a>
                                 @endforeach
                                 @endif

                            </div>
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
                            <p class="prev">上一篇：<span>
                            {{ $previous->id ? HTML::link(LinkHelper::news_detail($previous, true), AppHelper::ellipse($previous->name,40),[ 'target'=>'_blank']) : '没有了'}}
                            </span>
                            </p>
                            <p class="next">下一篇： {{ $next->id ? HTML::link(LinkHelper::news_detail($next, true), AppHelper::ellipse($next->name,40),[ 'target'=>'_blank']) : '没有了'}}</p>
                          </div>
                        </div>
                      </div>
                      <!--相关阅读推荐-->
                      <div class="recommended">
                        <div class="detail-title" ><span>相关阅读推荐<i class="line"></i></span></div>

                        <ul>
                          @include('news.partials.relate', ['items'=>$relates])
                        </ul>
                      </div>
                      <!--评论-->
                    @include('news.blocks.comments')


                    </div>

                    <div class="information-right" >
                      <div class="right-con">
                        <!--电商最新资讯-->

                        @if(!in_array($type, ['faq','fangan']))
                            @include('news.blocks.latests')
                            @include('news.blocks.charts')
                            @include('news.blocks.recommends')
                        @elseif($type === 'fangan')
                            @include('news.blocks.platforms')
                            @include('news.blocks.solutions')
                            @include('news.blocks.types')
                            @include('news.blocks.cases')
                        @else
                            @include('news.blocks.latest_faqs')
                            @include('news.blocks.hot_faqs')
                             @include('news.blocks.recommends')
                        @endif
     <!--电商资讯推荐阅读-->
             </div>
                  </div>


                  </div>

                </div>

              </div>
 </div>


             <!--main -end-->
@stop
@stop