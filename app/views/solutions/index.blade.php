@extends('public.html')

@section('content')
    @include('public.register')
    <div class="contet">
        <div class="section s2 solution">
            <div id="cd-s1-title">麦多商城解决方案</div>
            <div id="cd-s1-en">THE BEST SOLUTION</div>
            <div class="cd-s2-text">麦多专注于电商领域，致力于为广大企业开展电商事业出一份力。麦多拥有丰富的各行各业的电商开展经验，定能为您的企业的电商事业出谋划策，打造您专属的电商模式。</div>
            <div id="solutions" class="cd-s2-img">
                <ul data-role="data-wrapper">


                        @include('public.partials.solution', array('solutions'=>$solutions))
                </ul>
                {{$solutions->links()}}
            </div>
        </div>


    </div>
@stop