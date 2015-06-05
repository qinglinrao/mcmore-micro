<div class="menu-2" class="clearfix">
    <ul class="list-unstyle">
        <li>
            <a class="{{Request::is('ydds')|| Request::is('ydds/1') ? 'active' : ''}} ui-link" href="{{URL::route('ydds')}}">快速搭建</a>
        </li>
        <li>
            <a class="{{Request::is('ydds/2') ? 'active' : ''}} ui-link" href="{{URL::route('ydds',2)}}">极致体验</a>
        </li>
        <li>
            <a class="{{Request::is('ydds/3') ? 'active' : ''}} ui-link" href="{{URL::route('ydds',3)}}">强大营销</a>
        </li>
        <li>
            <a class="{{Request::is('ydds/4') ? 'active' : ''}} ui-link" href="{{URL::route('ydds',4)}}">丰富功能</a>
        </li>
        <li>
            <a class="{{Request::is('ydds/5') ? 'active' : ''}} ui-link" href="{{URL::route('ydds',5)}}">贴心服务</a>
        </li>
    </ul>
</div>