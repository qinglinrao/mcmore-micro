@foreach($items as $key => $item)
<div class="dynamics">
    <div class="dynamics-title"> {{ LinkHelper::news_detail($item) }}</div>
    <div class="dynamics-detailed">
        {{{AppHelper::ellipse($item->brief,120) }}}
    </div>

    <div id="read-all">
        <a href="{{ LinkHelper::news_detail($item, true)}}">阅读全文</a>
    </div>
    <div id="dynamics-other">
        <div id="dynamics-time">{{Carbon::parse($item->updated_at)->format('Y-m-d H:i')}}</div>
        <div id="dynamics-comment">{{{ $item->comments->count() }}}</div>
        <div id="dynamics-browse">{{{ $item->view_count }}}</div>
    </div>
</div>
@endforeach