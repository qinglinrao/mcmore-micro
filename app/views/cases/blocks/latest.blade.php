<div class="top-information margin-top">
    <div class="quote-title">
        <h3>案例最新点评</h3>
        <p>latest  information</p>
    </div>
    <div class="top-information-list">
        <ul>
            @foreach($comments_latest as $work)
                <li>
                    <a style="margin-right: 15px;" target="_blank" href="{{URL::route('case.detail', array('id'=> $work->resource_id))}}">{{ $work->work->name }}</a>
                    <span><a href="javascript:void(0)">{{AppHelper::ellipse($work->detail,40)}}</a></span>
                </li>
            @endforeach
        </ul>
    </div>
</div>