@extends('public.html')

@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    @include('public.register')

    <div id="main-content">
        <ul id="case" data-role="data-wrapper">

                @include('public.partials.case', array('cases'=>$cases))
        </ul>
        {{$cases->links()}}

    </div>
@stop
