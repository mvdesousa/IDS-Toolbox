$().ready(function() {
	var $scrollingDiv = $(".scrollableDiv");

	$(window).scroll(function(){
		if ($(window).width() >= 1000) {	
			if($(window).scrollTop() >= 140){		
				$scrollingDiv
					.stop()
					.animate({"marginTop": ($(window).scrollTop() - 150) + "px"}, "slow" );	
			}if($(window).scrollTop() <= 139){	
				$scrollingDiv
					.stop()
					.animate({"marginTop": ($(window).scrollTop() - 0) + "px"}, "slow" );	
			}
		}else{
			//do nothing
		}						
	});
});