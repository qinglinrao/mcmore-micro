<div class="menu-1" class="clearfix">
    <ul class="list-unstyle">
        <li>
            <a class="{{Request::is('o2o') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'o2o'))}}">O2O商城</a>
        </li>
        <li>
            <a class="{{Request::is('dyh') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'dyh'))}}">多用户商城</a>
        </li>
        <li>
            <a class="{{Request::is('pc') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'pc'))}}">网上商城</a>
        </li>
        <li>
            <a class="{{Request::is('wx') ? 'active' : ''}} ui-link" href="{{URL::route('pages',array('page_code'=>'wx'))}}">微信微商城</a>
        </li>
    </ul>
</div>