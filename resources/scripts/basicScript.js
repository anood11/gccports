    
$(document).ready(function() {
	var screenWidth = $(window).width();
	var actualWidth = (screenWidth - 470) + "px";
	$('.center').css('width',actualWidth);

	$('.moreOptions').toggle(function(){
		$('.hideLI').fadeIn();
		$('.moreOptionsImage').attr('src','../images/moreOptions.png');
		$('.moreOptions strong').text(' fewer options');
	},function(){
		$('.hideLI').fadeOut();
		$('.moreOptionsImage').attr('src','../images/fewerOptions.png');
		$('.moreOptions strong').text(' more options');
	});
	

	var cookieValue = $.cookies.get('splashCookie', {path : '/'});
	
	if(cookieValue != "splashScreen")
    {
		var screenWidth = $(window).width();
		var screenHeight = $(window).height();
		var documentHeight = $(window).height();
		var elementWidth = $('.splashScreen').width();
		var elementHeight = $('.splashScreen').height();
		var leftMargin = (screenWidth-elementWidth)/2 + "px";
		var topMargin = (screenHeight-elementHeight)/2 + "px";
		
		$('.splashScreen').css('left',leftMargin);
		$('.splashScreen').css('top','50px');
		$('.DivOverlay').css('height',documentHeight);
		$('.DivOverlay').css('position','fixed');
		$('.DivOverlay').show();
		$('.splashScreen').show();
		
		$('.closeButton').click(function() {
			$('.DivOverlay').fadeOut('slow');	
			$('.splashScreen').fadeOut('slow');	
			$('.DivOverlay').remove();	
			$('.splashScreen').remove();
			$.cookies.set('splashCookie', 'splashScreen', {path : '/'});
		});
	}
	
	

	
});

function bannerSwap(){
	var $bannerActive = $('#slideshow div.bannerActive');
	var $bannerNext = ($('#slideshow div.bannerActive').next().length > 0) ? $('#slideshow div.bannerActive').next() : $('#slideshow div:first');
	$bannerNext.slideDown().addClass('bannerActive');
	$bannerActive.slideUp().removeClass('bannerActive');
}

function swapLI(){
	var $active = $('.rightBar ul#scroller li.active');
	var $next = ($('.rightBar ul#scroller li.active').next().length > 0) ? $('.rightBar ul#scroller li.active').next() : $('.rightBar ul#scroller li:first');
	$active.fadeOut(function(){
	$active.removeClass('active');
	$next.fadeIn().addClass('active');
	});
}
