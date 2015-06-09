<div class="menu-1" class="clearfix">
    <ul class="list-unstyle">
        <li>
            <a class="{{Request::is('o2oshop') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'o2oshop'))}}">O2O商城</a>
        </li>
        <li>
            <a class="{{Request::is('dyhshop') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'dyhshop'))}}">多用户商城</a>
        </li>
        <li>
            <a class="{{Request::is('pcshop') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'pcshop'))}}">网上商城</a>
        </li>
        <li>
            <a class="{{Request::is('wxshop') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'wxshop'))}}">微信微商城</a>
        </li>
    </ul>
</div>