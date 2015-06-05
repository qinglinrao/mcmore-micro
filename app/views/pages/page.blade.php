@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop

@section('content')
@include('public.menu3')
@include('public.register')
@include("pages.micro.$code",compact('code'))
@include('public.contact')
  @stop