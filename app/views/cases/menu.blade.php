<div class="menu-2" class="clearfix">
    <ul class="list-unstyle">
        @foreach($categories as $key => $category)
        <li>
            <a class="{{$code == 'hynews' ? 'active' : ''}} ui-link" href="{{ URL::route('news.list', $category->code) }}">{{ $category->name }}</a>

        </li>
        @endforeach
    </ul>
</div>


