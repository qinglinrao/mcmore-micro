<ul>
    @foreach($items as $key => $item)
    <li>
        {{ LinkHelper::news_detail($item->article) }}
    </li>
    @endforeach
</ul>