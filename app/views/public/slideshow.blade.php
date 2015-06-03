<div id="slideshow" style="{{isset($options) ? 'width: 1920px; height:'.$options['height'].'px' : ''}}">
<div class="banner">  

	<div class="slides container">
@if($slide)
  @foreach($slide->items as $item)
		<ul class="slides-list" id="slides">
			<li class="slides-item">

      @if($item->url!=='#')
				<a rel="nofollow" href="{{URL::to($item->url)}}" targer="_blank" class="slides-link">
        {{AppHelper::img($item->image->url,$item->image->alt,isset($options) ? $options : array())}}
				</a>
        @else
          {{AppHelper::img($item->image->url,$item->image->alt,isset($options) ? $options : array())}}
        @endif
			</li>

		</ul>
 @endforeach
 @endif

	</div>
	<!--<div class="banner-wrap">       
            <span class="prev"></span>
            <span class="next"></span>
        </div>-->

	@section('scripts') 
	@parent
	{{HTML::script('/libraries/sunnsoft/js/jquery.slides.min.js')}}
	<script>
    
    $(document).ready(function() {
  
    $(".t-input").focus(function(){  
        var input_txt = $(this).val();  
        if (input_txt == this.defaultValue) {  
            $(this).val("");
        
        }  
    })
    
    $(".t-input").blur(function(){  
        var input_txt = $(this).val();  
        if (input_txt == "") {  
            $(this).val(this.defaultValue);
        
        }  
    })
    
  });
    $(document).ready(function() {
    var isScroll = false;
    jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
    if (isScroll) {
        return; 
    }
    isScrolls = true;
    $(tab_conbox).find("li").hide();
    $(tabtit).find("li:first").addClass("current").show(); 
    $(tab_conbox).find("li:first").show();

    $(tabtit).find("li").bind(shijian,function(e){
      e.preventDefault();
      $(this).addClass("current").siblings("li").removeClass("current"); 
        var activeindex = $(tabtit).find("li").index(this);
        $(tab_conbox).children().eq(activeindex).fadeIn(500).siblings().hide();
        isScrolls = false;
        return false;
    });

};
/*调用方法如下：*/
    $.jqtab("#tabs","#tab_conbox","click");
$.jqtab("#tabs2","#tab_conbox2","mouseenter");

  
  $("#slides").slidesjs({
    //navigation: false,
    width:1920,
    height:697,
    pagination: false,
    play: {
          active: false,
        //  effect: "fade",
          auto: true,
          interval: 3500,
          swap: false,
          pauseOnHover: true,
          restartDelay: 2500
        }
   
  });
  
  
  
  var windowW = $(window).width();
  if (windowW < 1920) {
    var Left = (windowW -1200) / 2 ;
    $('.slidesjs-previous').css( "left" , Left );
    $('.slidesjs-next').css( "right" , Left );
  }
  
  //关于我们弹框
  
  $(".designer").colorbox({rel:'designer'});
  $(".marketing").colorbox({rel:'marketing'});
  $(".research").colorbox({rel:'research'});
  $(".seo").colorbox({rel:'seo'});
  
  
  //开发流程
  $('.process-choose-link').hover(function(){
    
    var Parent = $(this).parent(),
        Sec = $('.sec-item');
        Parent.find(Sec).stop().fadeIn(800);    
    },function(){   
    $('.sec-item').stop().fadeOut(800); 
    });
  

});

</script>

	@stop
</div>
</div>