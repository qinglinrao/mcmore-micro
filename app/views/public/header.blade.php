<div id="header">
    <a class="menu-1" class="ui-link" href="#">
        <img id="menu-button" src="/img/icon/menu.png">
    </a>

    <div id="try">
        <a class="ui-link"  href="{{URL::route('dj.index')}}"  rel="nofollow">
            <p>我要试用</p>
        </a>
    </div>

        @if(Request::is('service/*'))
        <div class="navigation"><a href="{{URL::route('service')}}">电商服务</a></div>
        @elseif(Request::is('*shop'))
        <div class="navigation"><a href="{{URL::route('service')}}">定制服务</a></div>
        @elseif(Request::is('case-*'))
        <div class="navigation"><a href="{{URL::route('case')}}">成功案例</a></div>
        @elseif(Request::is('fangan-*'))
        <div class="navigation"><a href="{{URL::route('fangan')}}">解决方案</a></div>

        @else
        <div id="page-title"><a href="/"><img id="logo" src="/img/icon/logo.png"></a></div>
        @endif

</div>