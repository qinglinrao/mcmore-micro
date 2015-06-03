@extends('public.html')

@section('content')
<!--main -->
<div id="main" class="company-detail-main">
    <div class="company-detail-wrap wrap">
        <div class="crumbs"></div>
        <div class="detail-con clearfix">
            <div class="detail-left">
                <div class="detail-left-wrap">
                    <h1 class="article-title">
                        {{{ $article->name }}}
                    </h1>
                    <div class="article-info-share clearfix">
                        <div class="article-info">
                            <span class="view-count">
                                {{ $article->view_count }}
                            </span>
                            <span class="comment-count">
                                {{$comments->count()}}
                            </span>
                        </div>
                        <div class="share-icons">
                            <table>
                                <tr>
                                    <td>
                                        分享到：
                                    </td>
                                    <td>
                                        <a class="jiathis_button_tsina">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="jiathis_button_tqq">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="jiathis_button_qzone">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="jiathis_button_douban">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="jiathis_button_renren">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="jiathis_button_weixin">
                                        </a>
                                    </td>
                                    <td>
                                        <a rel="nofollow" href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis"
                                        target="_blank">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!-- JiaThis Button END -->
                        </div>
                    </div>
                    <div class="article-con" id="editor">
                        <div class="summery">【摘要】{{AppHelper::ellipse($article->brief,125)}}</div>
                        {{ $article->detail }}
                    </div>
                </div>
                <div class="recommended">
                    <h3>
                        相关阅读推荐
                    </h3>
                    <ul>
                        @include('news.partials.relate', ['items'=>$relates])
                    </ul>
                </div>
            </div>
            <div class="detail-right">
                <div class="detail-right-con">
                    <div class="detail-right-item">
                        <h3>
                            各地区APP开发公司
                        </h3>
                        <p>
                            APP DEVELOPMENT COMPANY
                        </p>
                        <ul class="clearfix">
                            @foreach($companies->articles as $company_article)
                            <li>
                                {{ LinkHelper::news_detail($company_article) }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @include('news.blocks.types')
                    @include('news.blocks.platforms')
                    <div class="related-article" id="related-article">
                        <h3>
                            APP文章推荐阅读
                        </h3>
                        <p>
                            RELATED OCCUPATION
                        </p>
                        <ul>
                            @foreach($right_relates as $right_relate)
                            <li>
                                <h5>
                                    {{ LinkHelper::news_detail($right_relate) }}
                                </h5>
                                <p>
                                    {{AppHelper::ellipse($right_relate->brief,45)}}
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('news.blocks.comments')
</div>
<!--main -end-->
@stop

@section('scripts')
@parent
<script type='text/javascript'>
    (function($){
        $.ajax({
            url: '<?php echo URL::route("news.update", array("id" => $article->id)) ?>'
        })
    })(jQuery)
</script>
@stop