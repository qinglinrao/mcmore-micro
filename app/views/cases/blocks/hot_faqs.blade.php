<div class="top-information margin-top">
    <div class="quote-title">
      <h3>商城系统开发常见问题</h3>
      <p>hot faq</p>
    </div>
    <div class="top-information-list">
      <ul>
      @if(isset($hot_faqs))
        @foreach($hot_faqs as $faq_article)
        <li>
            {{ LinkHelper::news_detail($faq_article)  }}
        </li>
        @endforeach
      @endif
      </ul>
    </div>
  </div>