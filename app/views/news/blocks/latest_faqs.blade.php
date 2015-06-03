<div class="top-information">
    <div class="quote-title">
      <h3>最新问题</h3>
      <p>latest  issue</p>
    </div>
    <div class="top-information-list">
      <ul>

            @foreach($latest_faqs as $latest_faq)
		        <li>
		            {{ LinkHelper::news_detail($latest_faq) }}
		        </li>
        	@endforeach

      </ul>
    </div>
  </div>