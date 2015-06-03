@foreach($items as $key => $item)
    <li>
        <div class="clearfix name-time">
            <p class="name">{{$item->name}}</p>
            <p class="time"><span>{{Carbon::parse($item->updated_at)->format('Y-m-d')}} </span>发表</p> </div>
            <p class="con">{{{$item->detail}}}</p>

    </li>
@endforeach