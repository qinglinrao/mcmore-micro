{{--FAQ--}}
<div class="home-block07 graylit-bg">
      <div class="faq-comment mainwidth">
        <div class="faq-comment-wrap clearfix">
          <div class="left-faq">
            <h2 class="title"><a href="http://www.mcmore.com/faq/">商城系统常见问题</a>FAQ</h2>
              <ul>
              @if($appissues)
                @foreach($appissues as $appissue)
                  <li>
                      <span></span>
                          {{ LinkHelper::news_detail($appissue) }}
                      <p>{{AppHelper::ellipse($appissue->brief, 71)}}</p>
                  </li>
                  @endforeach
                @endif
              </ul>
          </div>

{{--最新点评--}}
          <div class="right-comment">
            <h2 class="title">系统最新点评COMMENT</h2>
            <div class="comment-wrap" id="com-zp">
              <div class="comment-top">
                  <ul class="comment-top-list clearfix tabs" id="tabs2">
                      <li class="comment-top-item current">
                          <div class="user-pic">
                            <a>
                            <img src="sunnsoft/images/comment01.jpg " alt="商城网站开发点评">
                            <span></span>
                            </a>
                          </div>
                          <span class="btm-ch"></span>
                          </li>
                      <li class="comment-top-item">
                          <div class="user-pic">
                            <a>
                            <img src="sunnsoft/images/comment02.jpg" alt="最新商城系统开发点评">
                            <span></span>
                            </a>
                          </div>
                          <span class="btm-ch"></span>
                      </li>
                      <li class="comment-top-item">
                          <div class="user-pic">
                            <a>
                            <img src="sunnsoft/images/comment03.jpg" alt="网店系统点评">
                            <span></span>
                            </a>
                          </div>
                          <span class="btm-ch"></span>
                      </li>
                      <li class="comment-top-item">
                          <div class="user-pic">
                            <a>
                            <img src="sunnsoft/images/comment01.jpg" alt="手机网上商城系统点评">
                            <span></span>
                            </a>
                          </div>
                          <span class="btm-ch"></span>
                      </li>
                  </ul>
              </div>
              <div class="comment-bottom">
                  <ul class="tab_conbox2" id="tab_conbox2">

        @foreach($latest_comments as $key => $comment)
            <li class="tab_con2" style="{{$key===0 ? 'display: list-item;' : 'display: none;'}}">
                <div class="com-title">
                      @if($comment->resource_type == 'articles')
                      {{LinkHelper::news_detail($comment->article)}}
                      @else
                      <a target="_blank" href="{{URL::route('case.detail',[$comment->work->id])}}" title="{{$comment->work->name}}">{{$comment->work->name}}</a>
                      @endif
                      <span class="com-time">{{Carbon::parse($comment->updated_at)->format('Y-m-d')}}</span></div>
                  <p>{{{$comment->detail}}}</p>
              </li>
         @endforeach

                  </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
 </div>

{{--<div class="faq-comment">--}}
	{{--<div class="faq-comment-wrap clearfix">--}}
		{{--<div class="left-faq">--}}
			{{--<h3 class="title"><b>APP开发常见问题</b>FAQ</h3>--}}
			{{--<ul>--}}
                {{--@include('public.partials.issue', array('appissues'=>$appissues))--}}
			{{--</ul>--}}
		{{--</div>--}}
		{{--<div class="right-comment" >--}}
			{{--<h3 class="title"><b>APP最新点评</b>COMMENT</h3>--}}
			{{--<div class="comment-wrap" id="com-zp">--}}
				{{--<div class="comment-top">--}}
					{{--<ul class="comment-top-list clearfix tabs" id="tabs2">--}}
						{{--<li class="comment-top-item current">--}}
							{{--<div class="user-pic">--}}
							  {{--<img src="sunnsoft/images/comment01.jpg" />--}}
							  {{--<span></span>--}}
                            {{--</div>--}}
							{{--<span class="btm-ch"></span>--}}
						{{--</li>--}}
						{{--<li class="comment-top-item">--}}
							{{--<div class="user-pic">--}}
							  {{--<img src="sunnsoft/images/comment02.jpg" />--}}
							  {{--<span></span>--}}
                            {{--</div>--}}
							{{--<span class="btm-ch"></span>--}}
						{{--</li>--}}
						{{--<li class="comment-top-item">--}}
							{{--<div class="user-pic">--}}
							  {{--<img src="sunnsoft/images/comment03.jpg" />--}}
							  {{--<span></span>--}}
                            {{--</div>--}}
							{{--<span class="btm-ch"></span>--}}
						{{--</li>--}}
						{{--<li class="comment-top-item">--}}
							{{--<div class="user-pic">--}}
							  {{--<img src="sunnsoft/images/comment01.jpg" />--}}
							  {{--<span></span>--}}
                            {{--</div>--}}
							{{--<span class="btm-ch"></span>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
				{{--<div class="comment-bottom">--}}
					 {{--<ul class="tab_conbox2" id="tab_conbox2">--}}
                        {{--@foreach($latest_comments as $comment)--}}
						{{--<li class="tab_con2">--}}
							{{--<div class="com-title">--}}
                                {{--@if($comment->resource_type == 'articles')--}}
                                {{--{{LinkHelper::news_detail($comment->article)}}--}}
                                {{--@else--}}
                                {{--<a href="{{URL::route('cases.detail',[$comment->work->id])}}" title="{{$comment->work->name}}">{{$comment->work->name}}</a>--}}
                                {{--@endif--}}
                                {{--<span class="com-time">{{Carbon::parse($comment->updated_at)->format('Y-m-d')}}</span></div>--}}
                            {{--<p>{{{$comment->detail}}}</p>--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
					{{--</ul>--}}
				{{--</div>--}}

			{{--</div>--}}
		{{--</div>--}}

	{{--</div>--}}
	{{--<div class="faq-comment-bg">--}}
	{{--</div>--}}
      {{--</div>--}}


