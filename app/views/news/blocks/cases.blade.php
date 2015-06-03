<div class="case-sencil">
    <h3>相关案例推荐</h3>
    <ul>
        @foreach($relate_cases as $case)
        <li class="clearfix">
            <div class="case-sencil-left">
                <a href="{{URL::route('cases.detail',$case->id)}}">
                    {{AppHelper::img($case->images->first()->url,$case->images->first()->alt,['width'=>130,'height'=>80])}}
                </a>
            </div>
            <div class="case-sencil-right">
                <h4><a href="{{URL::route('cases.detail',$case->id)}}" title="{{$case->name}}">
                    {{$case->name}}
                </a></h4>
                <p>类型：<span>{{AppHelper::outputAttr($case->attributes,'type')}}</span></p>
            </div>
        </li>
        @endforeach
    </ul>
</div><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

