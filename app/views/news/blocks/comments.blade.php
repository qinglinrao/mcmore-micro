
 <div class="comment margin-top">
 @if($comments->count())
<div class="top-comment">
      <div class="top-comment-wrap">
        <div class="detail-title" ><span>热门评论<i class="line"></i></span></div>
        <div class="top-comment-con">
          <ul   data-role="data-wrapper">

            @include('news.partials.comment', ['items'=>$comments])

          </ul>
          <div class="top-comment-more">
           {{$comments->links()}}
          </div>
        </div>
      </div>
</div>
@endif
    <iframe scrolling="no" seamless id="comment-frame" src="{{URL::route('news.comment',$article->id)}}"></iframe>

</div>


