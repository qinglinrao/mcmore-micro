@extends('public.html')

@section('title'){{AppHelper::tdk('title',$case)}}@stop
@section('keywords'){{AppHelper::tdk('keywords',$case)}}@stop
@section('description'){{AppHelper::tdk('description',$case)}}@stop

@section('content')

<div class="banner mainwidth">
              <div class="banimg">
                <img src="/sunnsoft/images/banner01.jpg">
              </div>
            </div><!-- banner -->


	@include("pages.sections.$code",compact('code'))

          
@stop