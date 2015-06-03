<div class="detail-right-item">
    <h3>资讯分类</h3>
    <ul class="clearfix">
        @foreach($categories as $category)
        @if($category->code != 'faq')
        <li>
            <a href="{{ URL::route('news.list',$category->code) }}">
                {{$category->name}}
            </a>
        </li>
        @endif
        @endforeach
    </ul>
</div>