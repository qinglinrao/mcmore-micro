@extends('public.html')

@section('content')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

 <div class="banner mainwidth">
   <div class="banimg">
            <img src="../sunnsoft/images/solutions-banner.jpg" alt="麦多商城系统一站式行业解决方案服务">
          </div>
        </div>
        <!-- banner -->
<!-- Main -->
<div class="main-content gray-bg">
            <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">商城系统</a> > <b>麦多商城解决方案</b></div>
                <div  id="main"><!--商城解决方案页面  -->
                  <div class="solutions-main-wrap">

                    <div class="common-title">
                      <h1>麦多商城解决方案</h1><!--商城解决方案标题  -->
                      <p class="one">the best solution</p>
                      <P class="two">麦多专注于电商领域，致力于为广大企业开展电商事业出一份力。麦多拥有丰富的各行各业的电商<br/>
                开展经验，定能为您的企业的电商事业出谋划策，打造您专属的电商模式。</P>
                    </div>

                    <div class="solutions-con">
                      <!--商城解决方案列表  -->
                      <div class="solutions-con-wrap" data-role="data-wrapper">
                        @include('public.partials.solution', array('solutions'=>$solutions))
                      </div>
                      	
                      	{{$solutions->links()}}
                    </div>


                  </div>
                </div>

                <!--main -end-->
            </div>

            
@stop