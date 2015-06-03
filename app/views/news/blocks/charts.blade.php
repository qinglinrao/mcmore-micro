 <div class="top-articles margin-top">
          <div class="quote-title" style="margin-bottom: 25px;">
                文章排行

            <p>TOP ARTICLES</p>
          </div>
         {{-- <div class="top-time">
            <ul class="clearfix tabs" id="tabs">
              <li class="current">
                <a href="javascript:void(0)">周榜</a>
              </li>
              <li>
                <a href="javascript:void(0)">月榜</a>
              </li>
            </ul>
          </div>--}}
          <div class="bottom-content">
            <ul class="tab_conbox" id="tab_conbox">
              <li class="tab_con content-sec" id="week-list">
                <ul>
                 @include('news.partials.chart_news', ['items'=>$weekly_list])
                </ul>
              </li>

              <li class="tab_con content-sec" id="month-list">
                <ul>
                  @include('news.partials.chart_news', ['items'=>$monthly_list])
                </ul>
              </li>


            </ul>
          </div>
        </div>





{{--<div class="top-articles">--}}
    {{--<h3>--}}
        {{--@if ($type)--}}
        {{--{{Lang::get('charts_block_title.'.$type)}}--}}
        {{--@else--}}
        {{--文章排行--}}
        {{--@endif--}}
    {{--</h3>--}}
    {{--<div class="top-time">--}}
        {{--<ul class="clearfix top-tabs">--}}
            {{--<li class="active">--}}
                {{--<a href="#week-list">--}}
                    {{--周榜--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#month-list">--}}
                    {{--月榜--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="bottom-content">--}}
        {{--<ul class="tab_conbox">--}}
            {{--<li class="tab_con content-sec tab-pane active" id="week-list">--}}
                {{--<ul>--}}
                   {{--@include('news.partials.chart_news', ['items'=>$weekly_list])--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="tab_con content-sec tab-pane" id="month-list">--}}
                {{--<ul>--}}
                    {{--@include('news.partials.chart_news', ['items'=>$monthly_list])--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}