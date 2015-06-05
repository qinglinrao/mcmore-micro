<div class="menu-1" class="clearfix">
    <ul class="list-unstyle">
        <li>
            <a class="{{Request::is('service/1')?'active':''}} ui-link" href="{{URL::route('service.detail',array('id'=>1))}}">开店服务</a>
        </li>
        <li>
            <a class="{{Request::is('service/2')?'active':''}} ui-link" href="{{URL::route('service.detail',array('id'=>2))}}">培训服务</a>
        </li>
        <li>
            <a class="{{Request::is('service/3')?'active':''}} ui-link" href="{{URL::route('service.detail',array('id'=>3))}}">技术服务</a>
        </li>
        <li>
            <a class="{{Request::is('service/4')?'active':''}} ui-link" href="{{URL::route('service.detail',array('id'=>4))}}">营销服务</a>
        </li>
    </ul>
</div>