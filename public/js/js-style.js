
jQuery(document).ready(function($) {

	$('.menu-mobile-button').click(function(event) {
		
		
		if($('section.menu-mobile').attr('class')=="menu-mobile trans-X"){
			$('section.menu-mobile').removeClass('trans-X');
			$('section.menu-mobile').addClass('move-left').one('webkitAnimationEnd', function(event) {
				
				$('.move-left').removeClass('move-left');


			});
			$(this).removeClass('menu-mobile-button-active');
			
		}
		else{
			$(this).addClass('menu-mobile-button-active');
			
			// $('.menu-mobile-button-st2').css("display","block");

			$('section.menu-mobile').addClass('trans-X');
			
		}
	});


	var tt = true ;
		$('ul.menu-left-ul-lv-1>li>i').click(function(event) {
			if (tt===true) {
		        $(this).siblings('ul.menu-left-ul-lv-child').addClass('menu-left-ul-lv-child-active');
		        $('ul.menu-left-ul-lv-1>li>ul.menu-left-ul-lv-child-active').show(300);
		        return tt = false;
			}else {
		        $(this).siblings('menu-left-ul-lv-child-active').addClass('ul.menu-left-ul-lv-child');
		        $('ul.menu-left-ul-lv-1>li>ul.menu-left-ul-lv-child-active').hide(300);
		        $('.menu-left-ul-lv-child-active').removeClass('menu-left-ul-lv-child-active');
		        return tt = true;
			}
	});


	// BACK-TO-TOP
	$(window).scroll(function() { 

		  if($(window).scrollTop() != 0) { 
	    	$('.back-to-top').fadeIn();
	 	 }else {
	   		 $('.back-to-top').fadeOut();
	 	 }
		});
	$('.back-to-top').on('click', function(event) {
		event.preventDefault();
		$('html,body').animate({scrollTop:0}, 1200);
	});
		
	// END

	
});