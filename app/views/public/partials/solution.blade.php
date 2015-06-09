@foreach($solutions as $k => $solution)
    <li>
    <div id="solution-content" class="solu-left">
    <a href="{{URL::route('fangan.detail', ['id'=> $solution->id])}}">
        {{AppHelper::img($solution->thumb->url,$solution->thumb->alt)}}
        <p>{{ $solution->name }}</p>
    </a>
</div>
    </li>
@endforeach