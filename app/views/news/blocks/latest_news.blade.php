<div class="top-information margin-top">
  <div class="quote-title">
   电商行业热点资讯
    <p>The latest news reviews</p>
  </div>
  <div class="top-information-list">
    <ul>
      @foreach($latest_news as $latest_new)
        <li>
         <a target="_blank" href="{{ LinkHelper::news_detail($latest_new, true) }}" title="{{$latest_new->name}}">{{AppHelper::ellipse($latest_new->name,20)}}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>