 @extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

 @section('content')

            <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> >
           <a href="http://www.mcmore.com/about.html"> 关于我们</a> > <b>公告</b></div>
              <!--aboutus  -->
         <div class="mainwidth aboutusbox">
         <div class="aboutus clearfix">
          <div class="au-left">
           <div class="title">
             <span>公告</span>
           </div>

           <div class="content">
              <ul class="aboutus-list">
                @foreach($mdnews as $mdnew)

                 <li><a href="{{URL::route('mdnews.detail',['id'=>$mdnew->id])}}">{{$mdnew->name}} <span class="times">{{$mdnew->updated_at}}</span></a></li>
                @endforeach
               </ul>

           </div>

           {{--<div class="page-list">--}}
              {{--<a href="javascript:void(0)" class="pre-next previous-page"></a><a href="javascript:void(0)" class="on">1</a><a href="#">2</a><a href="#">3</a><span>......</span><a href="#">99</a><a href="#" class="pre-next next-page go"></a><span class="gray">到</span><span class="inputspan"><input type="text" class="pageinput" /></span><span class="gray">页</span><a href="#" class="enter">跳转</a>--}}
            {{--</div><!-- 翻页 -->--}}

          </div>
          <!-- auleft -->
         @include('about.right')
          <!-- auright -->

         </div>
     </div>

              <!--aboutus -end-->
            </div>

 @stop