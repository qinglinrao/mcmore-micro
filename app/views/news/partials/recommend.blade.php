@if(isset($items))
@foreach($items as $key => $item)
  <li class="clearfix">
      <div class="case-sencil-left">
        <a target="_blank" href="{{ LinkHelper::news_detail($item, true) }}">
          {{AppHelper::img($item->img->url,$item->img->alt,['width'=>130,'height'=>90])}}
        </a>
      </div>
      <div class="case-sencil-right">
        <a target="_blank" href="{{ LinkHelper::news_detail($item, true)  }}">
            {{{ $item->name }}}
        </a>
        <p>{{{ AppHelper::ellipse($item->brief, 30) }}}</p>
      </div>
    </li>
@endforeach
@endif