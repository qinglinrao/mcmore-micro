

 <div class="recommend-news">
   <div class="recommend-news-title">电商资讯相关推荐</div>
   <div class="recommend-news-list">
       <ul>
           @foreach($items as $key => $item)
           <li>
                {{ LinkHelper::news_detail($item) }}

           </li>
           @endforeach
       </ul>
   </div>
</div>