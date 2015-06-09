@foreach($items as $key => $item)
<div class="user-comment">
    <div class="comment-top">
        <div class="user-name">{{$item->name}}</div>
        <div class="comment-time">{{Carbon::parse($item->updated_at)->format('Y-m-d')}} 发表</div>
    </div>
    <div class="comment-detailed">{{{$item->detail}}}</div>
</div>
@endforeach