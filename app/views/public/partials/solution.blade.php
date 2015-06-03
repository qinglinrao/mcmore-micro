<ul class="solutions-list clearfix">
                        	
      @foreach($solutions as $k => $solution)	
         <li class="solutions-item">
             <a target="_blank" href="{{URL::route('fangan.detail', ['id'=> $solution->id])}}" class="top-img-link">
                  {{AppHelper::img($solution->thumb->url,$solution->thumb->alt)}}
                          
                  <span class="cover"></span>
             </a>
            <div class="bottom">
            	<a target="_blank" href="{{URL::route('fangan.detail', ['id'=> $solution->id])}}">{{ $solution->name }}</a>
            </div>
        </li>
     @endforeach
                          
</ul>