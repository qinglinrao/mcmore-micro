@if($items)
<div class="other-banner">
    <div class="banner-wrap">
        @foreach($items as $item)
            {{ HTML::image($item->image->url, $item->image->alt) }}
        @endforeach
    </div>
</div>
@endif