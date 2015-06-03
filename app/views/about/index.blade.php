@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
 @section('content')

 <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">麦多商城系统</a> >
                @if($about == 'about')<b>关于我们</b>
                @elseif($about == 'buy')<b>如何购买</b>
                @elseif($about == 'tool')<b>营销工具</b>
                @elseif($about == 'recruit')<b>诚聘英才</b>
                @elseif($about == 'law')<b>法律声明</b>
                @elseif($about == 'contact')<b>联系我们</b>
                @elseif($about == 'link')<b>友情链接</b>
                @endif
           </div>
         <div class="mainwidth aboutusbox">
         <div class="aboutus clearfix">
            @include("about.sections.$about",compact('about'))
            @if($about != 'buy' && $about != 'tool')
            @include('about.right')
          @endif
         </div>
     </div>
</div>
@stop