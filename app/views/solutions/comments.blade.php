<div class="cd-comment">
    <div class="comment-title">
        全部评论
        <span></span>
    </div>
    <div id="comment-list">
        <ul data-role="data-wrapper">
            @if($comments->count())
                @include('news.partials.comment', ['items'=>$comments])
            @endif
        </ul>
        {{$comments->links()}}
    </div>

    <div id="i-want-comment">
        <form>
            <input type="text" name="comment" placeholder="请输入点评内容">
        </form>
    </div>
</div>