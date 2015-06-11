<div id="menu-bar-wrapper">
    <div class="logo">
        <a href="/"><img src="img/logo.png" alt=""></a>
    </div>
    <ul class="left-menu top list-unstyle">
        <li class="{{Request::is('/') ? 'active' : ''}}">
            <a class="ui-link" href="/">
                <span class="ico shouye"></span>
                <span>首页</span>
            </a>
        </li>
        <li class="{{Request::is('ydds*') ||Request::is('*shop')? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('ydds') }}">
                <span class="ico chanpin"></span>
                <span>麦多产品</span>
            </a>
        </li>
        <li class="{{Request::is('fangan*') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('fangan') }}">
                <span class="ico fangan"></span>
                <span>解决方案</span>
            </a>
        </li>
        <li class="{{Request::is('moban') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('moban') }}">
                <span class="ico moban"></span>
                <span>商城模板</span>
            </a>
        </li>
        <li class="{{Request::is('service*') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('service') }}">
                <span class="ico fuwu"></span>
                <span>电商服务</span>
            </a>
        </li>
        <li class="{{Request::is('news*') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('news') }}">
                <span class="ico zixun"></span>
                <span>电商资讯</span>
            </a>
        </li>
        <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('about.index',array('about'=>'contact')) }}">
                <span class="ico lianxi"></span>
                <span>联系我们</span>
            </a>
        </li>
        <li class="{{Request::is('dj') ? 'active' : ''}}">
            <a class="ui-link" href="{{ URL::route('dj.index') }}">
                <span class="ico shiyong"></span>
                <span>我要试用</span>
            </a>
        </li>
    </ul>
</div>