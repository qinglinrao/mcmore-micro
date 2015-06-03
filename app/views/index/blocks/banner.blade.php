    <div class="home-banner mainwidth">
                  <div class="banimg">
                     @foreach($items as $item)
                         @if($item->url !== '#')
                                {{ HTML::image($item->image->url, $item->image->alt) }}
                            @endif
                     @endforeach
                    <img src="sunnsoft/images/home-banner.jpg">
                  </div>
                </div><!-- banner -->

{{--<div class="banner">--}}
    {{--<div class="slides container">--}}
        {{--<ul class="slides-list" id="slides">--}}
            {{--@foreach($items as $item)--}}
            {{--<li class="slides-item">--}}
                {{--@if($item->url !== '#')--}}
                    {{--<a rel="nofollow" href="{{ URL::to($item->url) }}" target="_blank" class="slides-link">--}}
                        {{--{{ HTML::image($item->image->url, $item->image->alt) }}--}}
                    {{--</a>--}}
                {{--@else--}}
                    {{--{{ HTML::image($item->image->url, $item->image->alt) }}--}}
                {{--@endif--}}
            {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}

