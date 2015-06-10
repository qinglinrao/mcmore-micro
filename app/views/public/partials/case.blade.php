@foreach($cases as $k=>$case)
<li>
    <div class="case-box case-left">

        <a href="{{URL::route('case.detail', array('id'=> $case->id))}}">
            <div class="case-img">
                {{--<img src="/img/case-1.jpg" width="100%" height="100%">--}}

                {{AppHelper::img($case->images->first()->url,$case->images->first()->alt,array('width'=>'100%','height'=>'100%'))}}

            </div>
            <div class="case-text">
                <p class="case-title"><a href="{{URL::route('case.detail', array('id'=> $case->id))}}">{{ $case->name }}</a></p>
                <div class="summary">摘要: <b>@if(isset($case->brief)){{AppHelper::ellipse($case->brief,40)}}@else暂无摘要@endif</b></div>
                <div class="comment">评论: <b>@if(isset($case->latestcomment[0])){{AppHelper::ellipse($case->latestcomment[0]->detail,40)}}@else暂无评论@endif</b></div>
            </div>
        </a>
    </div>
<li>
@endforeach