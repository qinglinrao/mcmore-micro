<div class="top-information margin-top">
    <div class="quote-title">
      <h3>电商热点问题</h3>
      <p>hot issues</p>
    </div>
    <div class="top-information-list">
      <ul>
      @if(isset($faq_articles))
        @foreach($faq_articles as $faq_article)
        <li>
            {{ LinkHelper::news_detail($faq_article)  }}
        </li>
        @endforeach
      @endif
      </ul>
    </div>
  </div>