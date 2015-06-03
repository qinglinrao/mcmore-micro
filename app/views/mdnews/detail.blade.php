 @extends('public.html')

@section('title'){{AppHelper::tdk('title',$article)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$article)}}@stop
@section('description'){{AppHelper::tdk('description',$article)}}@stop

 @section('content')


 <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> >
           <a href="http://www.mcmore.com/about.html"> 关于我们</a> >
           <a href="{{URL::route('mdnews.index')}}">公告</a> > <b>{{$article->name}}</b>
           </div>
              <!--aboutus  -->
         <div class="mainwidth aboutusbox">
         <div class="aboutus clearfix">
          <div class="au-left">
           <div class="title">
             <span>公告</span>
           </div>

             <div class="content">

                      <h1>{{$article->name}}</h1>
                       <p>{{$article->detail}}</p>

                      </div>


          </div>
          <!-- auleft -->
         @include('about.right')
          <!-- auright -->

         </div>
     </div>

              <!--aboutus -end-->
            </div>
 @stop