<div class="menu-1" class="clearfix">
    <ul class="list-unstyle">
        <li>
            <a class="{{Request::is('/') ? 'active' : ''}} ui-link" href="/">麦多优势</a>
        </li>
        <li>
            <a class="{{Request::is('function*') ? 'active' : ''}} ui-link" href="{{URL::route('system.function')}}">系统功能</a>
        </li>
        <li>
            <a class="{{Request::is('service*') ? 'active' : ''}} ui-link" href="{{URL::route('service')}}">电商服务</a>
        </li>
        <li>
            <a class="{{Request::is('case*') ? 'active' : ''}} ui-link" href="{{URL::route('case')}}">成功案例</a>
        </li>
    </ul>
</div>