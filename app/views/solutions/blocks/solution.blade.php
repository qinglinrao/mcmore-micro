   <div class="hot-tags">
    <div class="quote-title">
      商城解决方案
      <p>THE Mall solution</p>
    </div>
    <div class="common-tags-con margin-top">
      <ul class="common-tag-list clearfix">
        @foreach($solutions as $solution)
            <li><a target="_blank" href="{{URL::route('fangan.detail',['id'=>$solution->id])}}">{{$solution->name}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>