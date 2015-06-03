 <div class="top-information">
      <div class="quote-title">
        电商最新资讯
        <p>latest  information</p>
      </div>
      <div class="top-information-list">
        <ul>

         @foreach($latests as $latest)
            <li>
                {{ LinkHelper::news_detail($latest) }}
            </li>

            @endforeach
        </ul>
      </div>
    </div>

{{--<div class="top-information">--}}
    {{--<h3>最新资讯</h3>--}}
    {{--<div class="top-information-list">--}}
        {{--<ul>--}}
            {{--@foreach($latests as $latest)--}}
            {{--<li>--}}
                {{--{{ LinkHelper::news_detail($latest) }}--}}
            {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}