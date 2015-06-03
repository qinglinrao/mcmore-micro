
@foreach($items as $key => $item)
    <li>
        <div class="item-wrap clearfix">
            <div class="item-sec-left">
                <a target="_blank" href="{{ LinkHelper::news_detail($item, true)  }}">
                    {{ AppHelper::img($item->img->url, $item->img->alt, ['width'=>240, 'height'=>180]) }}
                </a>
            </div>
            <div class="item-sec-right item-sec-right2">
                {{ LinkHelper::news_detail($item) }}
                <p>{{{AppHelper::ellipse($item->brief,120) }}}
                    <a target="_blank" href="{{ LinkHelper::news_detail($item, true)  }}">[阅读全文]</a></p>
                <div class="right-bottom clearfix">
                    @if(!Request::is('tag-*'))
                        @if(count($item->tags))
                            <div class="tag">
                                @foreach($item->tags as $tag)
                                    <a target="_blank" href="{{ URL::route('news.tag', $tag->id) }}">{{{ $tag->name }}}</a>
                                @endforeach
                            </div>
                        @endif
                    @endif
                    <div class="info">
                        <span style="margin-right: 10px;">{{Carbon::parse($item->updated_at)->format('Y-m-d H:i')}}</span>
                        <span class="view-count">{{{ $item->view_count }}}</span>
                        <span class="comment-count">{{{ $item->comments->count() }}}</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
@endforeach