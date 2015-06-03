<div class="top-filter clearfix">
    <div class="filter-left">
        @foreach($attrGroups as $group)
        <div class="filter-list-wrap clearfix">
            <div class="filter-title">{{{ $group->name }}}&nbsp;:</div>
            <div class="filter-list">
                <ul class="clearfix">
                    <li><a href="{{AppHelper::filterUrl($filter_ids,0,$group->attributes)}}" rel="nofollow" class="{{!array_intersect($filter_ids,$group->attributes->lists('id')) ? 'active' : ''}}">全部</a></li>
                     @foreach($group->attributes as $attr)
                    <li>
                        <a class="{{ in_array($attr->id,$filter_ids) ? 'active' : '' }}" href="{{AppHelper::filterUrl($filter_ids,$attr->id,$group->attributes)}}">
                            {{{ $attr->name }}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <div class="filter-right">
        <i>Total</i>
        <p>{{$cases->getTotal()}}</p>
    </div>
</div>