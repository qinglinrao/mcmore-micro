 <div class="home-block08 dblue-bg">

    <div class="block-top-mess">
       <div class="tm-title"><h2><a href="http://www.mcmore.com/news/">电商最新资讯</a></h2></div>
       <div class="red-piece"></div>
       <div class="tm-content">
       <div class="en-dis">NEWS</div>
       </div>
    </div><!-- 区块头部文字描述 -->

   <div class="top-news mainwidth">
        <div class="top-news-wrap">
            <div class="top-news-con">
                <div class="top-news-con-wrap clearfix">

                    <div class="top-news-con-item">
                        <h3><a href="http://www.mcmore.com/ghnews/">行业动态/电商干货</a></h3>
                        @include('......public.partials.news', array('with_img'=>'yes', 'items'=>$gh_news))
                    </div>

                    <div class="top-news-con-item">
                        <h3><a href="http://www.mcmore.com/ydnews/">移动电商资讯</a></h3>
                        @include('......public.partials.news', array('with_img'=>'yes', 'items'=>$yd_news))
                    </div>

                    <div class="top-news-con-item">
                        <h3><a href="http://www.mcmore.com/yxnews/">商城运营技巧</a></h3>
                        @include('......public.partials.news', array('with_img'=>'yes', 'items'=>$yx_news))
                    </div>


                </div>
            </div>
        </div>
    </div><!-- 区块内容 -->
 </div>


{{--<div class="top-news">--}}
    {{--<div class="top-news-wrap">--}}
        {{--<div class="title-top">--}}
            {{--<div class="title-con">--}}
                {{--<h2><a href="{{URL::route('news')}}">APP最新资讯</a></h2>--}}
                {{--<p>NEWS</p>--}}
                {{--<span class="title-btn"><span></span></span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="top-news-con">--}}
            {{--<div class="top-news-con-wrap clearfix">--}}
                {{--<div class="top-news-con-item">--}}
                    {{--<h3><b> 行业动态/电商干货</b></h3>--}}
                    {{--@include('......public.partials.news', array('with_img'=>'yes', 'items'=>$android_news))--}}
                {{--</div>--}}
                {{--<div class="top-news-con-item">--}}
                    {{--<h3><b>Android APP开发资讯</b></h3>--}}
                    {{--@include('......public.partials.news', array('with_img'=>'yes', 'items'=>$android_news))--}}
                {{--</div>--}}
                {{--<div class="top-news-con-item">--}}
                    {{--<h3><b>Html5/微信/网站开发资讯</b></h3>--}}
                    {{--@include('......public.partials.news',array('with_img'=>'yes', 'items'=>$html5_news))--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="top-news-bg">--}}
    {{--</div>--}}
{{--</div>--}}