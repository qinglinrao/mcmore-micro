/*
* //2015-02-14
* //sunnsoft
*/



$(window).ready(function(){
	mywh();
	myclick();
	mybanner();
})

$(window).resize(function(){
	mywh();
})

function mywh(){
	var winh=$(window).height();
	$(".pages-cover").css("height",winh);
}

function myclick(){
	
	
	$('#navbutton').click(function(){
		var ndleft=$("#navdown").offset().left;
		if(ndleft < 0){
			$("#navdown").removeClass('hide');
			$("#navdown").addClass('show');
			$(".pages-cover").css('display','block');
			
		}else{
			$("#navdown").removeClass('show');
			$("#navdown").addClass('hide');
			$(".pages-cover").css('display','none');
			
		}
		
	})
}


function mybanner(){
	console.log($.fn.owlCarousel);
	$('.owlbanner').each(function(){
                            var $self = $(this);
                            var time = $self.data('time');
                            if($("#owl-banner .item",$self).length < 2) return;

                            $("#owl-banner",$self).owlCarousel({
                                items: 1,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: time
                            });
                        });
}





