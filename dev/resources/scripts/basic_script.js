$(document).ready(function() {
	var screenWidth = $(window).width();
	var actualWidth = (screenWidth - 470) + "px";
	var centerRightContainerWidth = (screenWidth - 200) + "px";
	$('.center').css('width',actualWidth);
	$('.centerRightContainer').css('width',centerRightContainerWidth);

	$('.moreOptions').toggle(function(){
		$('.hideLI').fadeIn();
		$('.moreOptionsImage').attr('src','../images/moreOptions.png');
		$('.moreOptions strong').text(' fewer options');
	},function(){
		$('.hideLI').fadeOut();
		$('.moreOptionsImage').attr('src','../images/fewerOptions.png');
		$('.moreOptions strong').text(' more options');
	});
	
	 $(".searchResult tr:even").css("background", "#EEE");
	 $(".searchResult tr:odd").css("background", "#DDD");
	
	$("#toinfo").parent("td").parent("tr").css("display","none");
	$("#toinfo").parent("td").parent("tr").next("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").next("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").parent("tbody").parent("table").css("width","100%");
	
	
});
