<div class="cd-comment">
    <div class="comment-title" data-role="data-wrapper">热门评论</div>

    @if($comments->count())
        @include('news.partials.comment', ['items'=>$comments])
    @endif
    {{$comments->links()}}
    <div id="i-want-comment">
        <form>
            <input type="text" name="comment" placeholder="请输入点评内容">
        </form>
    </div>
</div>