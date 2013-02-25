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
	
	 $(".searchResult tr:even").css("background", "#EEE");
	 $(".searchResult tr:odd").css("background", "#DDD");
	
	$("#toinfo").parent("td").parent("tr").css("display","none");
	$("#toinfo").parent("td").parent("tr").next("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").next("tr").css("display","none");
	$("#frominfo").parent("td").parent("tr").parent("tbody").parent("table").css("width","100%");
	
	$("ul.wide li a").click(function(){
		var useful_link = 'useful_links/' + $(this).attr("id") + '.html';
		//alert(useful_link);
		//$("div.center").html("");
		$("div.center").html("<iframe src='" + useful_link + "' class='usefulLinks'></iframe>");

	});
});
