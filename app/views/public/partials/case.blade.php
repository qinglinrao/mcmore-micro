<ul class="case-con-list clearfix">

 @if(isset($cases))
@foreach($cases as $k=> $case)
    <li class="case-con-item">
         <div class="case-con-img">
              <a target="_blank" href="{{URL::route('case.detail', array('id'=> $case->id))}}">
                  {{AppHelper::img($case->images->first()->url,$case->images->first()->alt)}}
                  <span class="cover"></span>
              </a>
                  <span class="triangle"></span>
          </div>
          <div class="case-con-bottom">
              <div class="case-con-title"><span>名称：</span><a target="_blank" href="{{URL::route('case.detail', array('id'=> $case->id))}}">{{ $case->name }}</a></div>
              {{--<div class="case-content"><span class="label">类型：</span><span class="con">{{AppHelper::outputAttr($case->attributes,'type')}}</span></div>--}}
              <div class="case-content"><span class="label">评论：</span><span class="con">{{$case->latestcomment[0]->detail ? AppHelper::ellipse($case->latestcomment[0]->detail,35) : '暂无评论'}}</span></div>
          </div>
    </li>
@endforeach
@endif
</ul>