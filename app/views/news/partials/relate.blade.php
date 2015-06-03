@foreach($items as $key => $item)
<li class="clearfix">
    <div class="recommended-left">
      <a href="{{ LinkHelper::news_detail($item, true)  }}">
        {{AppHelper::img($item->img->url,$item->img->alt,['width'=>130,'height'=>85])}}
      </a>
    </div>
    <div class="recommended-right">
      <a>{{ LinkHelper::news_detail($item) }}</a>
      <p> {{{ AppHelper::ellipse($item->brief,72) }}}</p>
    </div>
  </li>
@endforeach