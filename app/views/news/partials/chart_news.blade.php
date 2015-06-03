@foreach($items as $key => $item)
    @if($key === 0)
    <li class="first">
        <a>
            {{ LinkHelper::news_detail($item) }}
        </a>
        <p>
            {{{ AppHelper::ellipse($item->brief, 40) }}}
        </p>
    </li>
    @else
    <li>
        <a>
            {{ LinkHelper::news_detail($item) }}
        </a>
    </li>
    @endif
@endforeach