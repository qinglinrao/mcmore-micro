@extends('public.html')
@section('title'){{AppHelper::tdk('title',$case)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$case)}}@stop
@section('description'){{AppHelper::tdk('description',$case)}}@stop

@section('scripts')
    @parent
    <script type="text/javascript">
        (function($) {
            $.ajax({
                url: '<?php echo URL::route("case.update", array("id" => $case->id)) ?>'
            })
        })(jQuery)
    </script>
@stop
@section('content')
    <div id="case-detailed">
        <div id="case-detailed-img">
            <a id="back-arrow" href="#">
                <img id="back-arrow-icon" src="/img/icon/left-arrow.png">
            </a>

            <div  class="yiz-slider-2">
                <ul style="width: 100%;  left: 0px;">
                    @foreach($case->images as $k => $img)
                        @if(isset($k) && $k>0)
                    <li style="width: 100%; height: 18.75rem;">
                        {{AppHelper::img($img->url,$img->alt,array('width'=>300,'height'=>540))}}
                    </li>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>
        <div class="case-detailed-title">
            {{ $case->name }}
        </div>
        <div class="case-detailed-text">{{ $case->detail }}</div>
        <div class="case-detailed-sys">
            <p><b>采用系统：</b>麦多多用户商城</p>
            <p><b>系统特色：{{ $case->feature }}</b></p>
        </div>
       {{-- <div class="case-detailed-other">
            <div class="case-detailed-time">{{Carbon::parse($case->updated_at)->format('Y-m-d H:i')}}</div>
            <div class="case-detailed-comment">{{$comments_num}}</div>
            <div class="case-detailed-browse">{{$case->view_count }}</div>
        </div>--}}
        <div id="case-detailed-other">
            <div id="case-detailed-time">{{Carbon::parse($case->updated_at)->format('Y-m-d H:i')}}</div>
            <div id="case-detailed-comment">{{$comments_num}}</div>
            <div id="case-detailed-browse">{{$case->view_count }}</div>
        </div>

    </div>

    <div class="last-next">
        <a href="">
            <div class="last-one"><b>上一篇：</b>{{$prev ? HTML::link(URL::route('case.detail',array('id'=>$prev->id)),AppHelper::ellipse($prev->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
        </a>
        <a href="">
            <div class="next-one"><b>下一篇：</b>{{$next ? HTML::link(URL::route('case.detail',array('id'=>$next->id)),AppHelper::ellipse($next->name,40),[ 'target'=>'_blank']) : '没有了'}}</div>
        </a>
    </div>
    @include('cases.comments')

@stop
@section('scripts')
    @parent
    <script type="text/javascript">
        $(function(){
            $('.yiz-slider-2').ScrollPic({
                Time: '3000',
                speed: '1000',
                autoscrooll: true
            });
        })
    </script>
@stop
