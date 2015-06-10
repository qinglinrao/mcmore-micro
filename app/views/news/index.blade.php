@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    @include('news.menu')
    @include('public.register')


    <div class="content">
        @include('news.partials.news', ['type'=>$categories[0]->code, 'items'=>$categories[0]->articles])
    </div>
@stop