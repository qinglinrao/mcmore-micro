<div class="cd-comment">
    <div class="comment-title">
        全部评论({{$comment_count}})
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
    <p class="form-tip">{{$errors->first()}}</p>
    <div id="i-want-comment">

        {{--<ul class="comment-column">
            <li class="comment-column-left">取消</li>
            <li class="comment-column-middle">发表评论</li>
            <li class="comment-column-right">发表</li>
        </ul>--}}
        <div id="comment-form">
            <form method="post">
                <input type="text" class='comment-name' name="name" placeholder="请输入昵称">
                <input type="text" class='comment-detail' name="detail" placeholder="请输入点评内容">
                <input type="hidden" class='comment-id' name="comment-id" value="{{$article->id}}">
                <input type="submit" class='comment-submit' value="发表">
                <div class="comment-captcha">
                    <span class="tag">
                        验证码：
                    </span>
                    {{ Form::text('captcha', '', array('class'=>'captch-con')) }}
                    <span class="captch-img">
                       {{AppHelper::captcha()}}
                    </span>

                </div>

            </form>
        </div>
    </div>
</div>

