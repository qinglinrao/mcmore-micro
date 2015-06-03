

<div id='other-information' class="top-information" >
<h3>常见问题推荐123</h3>
<div class="top-information-list">
    <ul>
        @foreach($rand_faqs as $faq)
        <li>
            {{ LinkHelper::news_detail($faq) }}
        </li>
        @endforeach
    </ul>
</div>
</div>