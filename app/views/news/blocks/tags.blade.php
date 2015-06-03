  <div class="hot-tags">
     <div class="quote-title">
       电商行业热门标签
       <p>HOT TAGS</p>
     </div>

    <div class="common-tags-con margin-top">
          <ul class="common-tag-list clearfix">
              @foreach($hot_tags as $item)
                <li><a target="_blank" href="{{URL::ROUTE('news.tag',['id'=>$item->tag->id])}}">{{$item->tag->name}}</a></li>
              @endforeach
           </ul>
         </div>
   </div>