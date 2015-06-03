@if($items)
@foreach($items as $item)
<li class="appcase-con-item">
    <div class="appcase-con-img">
        <a href="{{URL::route('cases.detail',$item->id)}}">
            {{AppHelper::img($item->images->first()->url,$item->images->first()->alt,['width'=>290,'height'=>240])}}
        </a>
        <span></span>
    </div>
    <div class="appcase-con-bottom">
        <div class="appcase-con-title"><span>名称：</span><a href="{{URL::route('cases.detail',$item->id)}}" title="{{$item->name}}">{{ $item->name  }}</a></div>
        <div class="appcase-content"><span class="label">类型：</span><span class="con">{{AppHelper::outputAttr($item->attributes,'type')}}</span>
        </div>
        <div class="appcase-content"><span class="label">功能：</span><span class="con">{{AppHelper::ellipse($item->feature,30)}}</span>
        </div>
    </div>
</li>
@endforeach
@endif
