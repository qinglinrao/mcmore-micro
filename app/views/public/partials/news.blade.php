@if(isset($items))
@foreach($items as $k => $item)
<ul>
    @if($k==0 && $with_img=='yes')
    <li class="first clearfix">
        <div class="news-img">
        <!--  <img src="/libraries/sunnsoft/images/news-img.jpg" /> -->
        {{ AppHelper::img($item->img->url,$item->img->alt,array('width'=>120,'height'=>100)) }}
        </div>
        <div class="right">

                {{ LinkHelper::news_detail($item) }}

            <p>
                {{ AppHelper::ellipse($item->brief,46) }}
                <span class="s-time">{{ Carbon::parse($item->updated_at)->format('Y-m-d') }}</span>
            </p>
        </div>
    </li>
    @else
    <li class="clearfix">
        <div class="leftitle">

            {{ LinkHelper::news_detail($item) }}

        </div>
        <div class="rightime">{{ Carbon::parse($item->updated_at)->format('y/m/d') }}</div>
    </li>
    @endif
</ul>
@endforeach
@endif
