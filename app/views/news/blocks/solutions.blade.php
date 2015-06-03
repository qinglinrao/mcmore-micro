<div class="detail-right-item">
    <h3>其他方案</h3>
    <ul class="clearfix">
        @foreach($solutions as $solution)
        <li>
            {{ LinkHelper::news_detail($solution) }}
        </li>
        @endforeach
    </ul>
</div>