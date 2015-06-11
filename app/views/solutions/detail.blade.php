@extends('public.html')

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
    <div id="solution-detailed-header">
        <div class="sdh-back-arrow">
            <a href="">
                <img src="./img/icon/left-arrow.png">
            </a>
        </div>
        <div class="sdh-title"><p></p></div>
        <div class="sdh-share">
            <a href="">
                <img src="./img/icon/share.png">
            </a>
        </div>
    </div>
    <div id="editor">
        <div id="solution-brief">
            <div class="solution-brief-title">
                {{ $article->name }}
            </div>
            <div class="solution-brief-text"><b>摘要：</b>{{AppHelper::ellipse($article->brief,100,'')}}</div>
            <div id="solution-brief-other">
                <div id="solution-brief-time">{{ date("Y-m-d H:i:s",strtotime($article->created_at)) }}</div>
                <div id="solution-brief-comment">{{ $article_num }}</div>
                <div id="solution-brief-browse">{{$article->view_count}}</div>
            </div>
        </div>
        <div class="solution-detailed">
           {{-- <div class="solution-detailed-img">
                <img src="./img/solution-detailed-1.jpg">
            </div>--}}
            <div class="solution-detailed-text">
                {{ $article->detail }}
            </div>
        </div>
    </div>
    <div class="last-next sd-last-next">
        <a href="">
            <div class="last-one"><b>上一篇：</b>{{$prev ? HTML::link(URL::route('fangan.detail',array('id'=>$prev->id)),AppHelper::ellipse($prev->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
        </a>
        <a href="">
            <div class="next-one"><b>下一篇：</b>{{$next ? HTML::link(URL::route('fangan.detail',array('id'=>$next->id)),AppHelper::ellipse($next->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
        </a>
    </div>

    {{--<div class="recommend-news">
        <div class="recommend-news-title">电商资讯相关推荐</div>
        <div class="recommend-news-list">
            <ul>
                <li>
                    <a href="">
                        用独立微信商城系统创业的优势
                    </a>
                </li>
                <li>
                    <a href="">
                        php商城系统相关知识普及
                    </a>
                </li>
                <li>
                    <a href="">
                        建立在商城系统上的o2o餐饮品牌出路在哪？
                    </a>
                </li>

            </ul>
        </div>
    </div>--}}
    @include('news.partials.relate', ['items'=>$relates])

    @include('solutions.comments');
@stop