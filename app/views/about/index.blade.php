@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
 @section('content')

     @include("about.sections.$about")

@stop