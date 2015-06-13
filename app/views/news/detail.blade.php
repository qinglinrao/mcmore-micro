@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
        <div id="dynamics-detailed-header">
            <div class="ddh-back-arrow">
                <a href="javascript:history.go(-1)">
                    <img src="/img/icon/left-arrow.png">
                </a>
            </div>
            <div class="ddh-title"><p>{{AppHelper::ellipse($article->name,15)}}</p></div>
            <div class="ddh-share">
                <a href="">
                    <img src="/img/icon/share.png">
                </a>
            </div>
        </div>

        <div id="editor">
            <div id="dynamics-brief">
                <div class="dynamics-brief-title">
                    {{{ $article->name }}}
                </div>
                <div class="dynamics-brief-text"><b>摘要：</b>{{AppHelper::ellipse($article->brief,125)}}</div>
                <div id="dynamics-brief-other">
                    <div id="dynamics-brief-time">{{ Carbon::parse($article->updated_at)->format('Y-m-d H:i') }}</div>
                    <div id="dynamics-brief-comment">{{$comment_count}}</div>
                    <div id="dynamics-brief-browse">{{ $article->view_count }}</div>
                </div>
            </div>
            <div class="dynamics-details-detailed">
                <div class="dynamics-detailed-text">
                    {{ $article->detail }}
                </div>
            </div>
        </div>

        <div class="last-next sd-last-next">
            <a href="">
                <div class="last-one"><b>上一篇：</b>{{ isset($previous->id) ? HTML::link(LinkHelper::news_detail($previous, true), AppHelper::ellipse($previous->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
            </a>
            <a href="">
                <div class="next-one"><b>下一篇：</b>{{ isset($next->id) ? HTML::link(LinkHelper::news_detail($next, true), AppHelper::ellipse($next->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
            </a>
        </div>



        @include('news.partials.relate', ['items'=>$relates])

        @include('solutions.comments')




@stop