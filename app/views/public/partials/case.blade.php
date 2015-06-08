@foreach($cases as $k=>$case)
<li>
    <div class="case-box case-left">

        <a href="{{URL::route('case.detail', array('id'=> $case->id))}}" target="_blank">
            <div class="case-img">
                {{--<img src="/img/case-1.jpg" width="100%" height="100%">--}}
                {{AppHelper::img($case->images->first()->url,$case->images->first()->alt,array('width'=>'100%','height'=>'100%'))}}
            </div>
            <div class="case-text">
                <p class="case-title"><a href="{{URL::route('case.detail', array('id'=> $case->id))}}">{{ $case->name }}</a></p>
                <div class="summary">摘要: <b>团购商城是中国知名的中国团购网站团购商城是中国知名的中国团购网站团购商城是中国知名的中国团购网站</b></div>
                <div class="comment">评论: <b>因为工作，我们经常要到外地出差，现在因为工作，我们经常要到外地出差，现在因为工作，我们经常要到外地出差，现在</b></div>
            </div>
        </a>
    </div>
<li>
@endforeach