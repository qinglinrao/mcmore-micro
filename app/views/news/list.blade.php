@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    @include('news.menu')
    @include('public.register')


    <div class="content"  data-role="data-wrapper" >

        @include('news.partials.news', ['items'=>$articles])
    </div>
    {{$articles->links()}}
@stop