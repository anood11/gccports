$(document).ready(function(){
	$("#newsPage").change(function(){
	page=($("#newsPage").val());
	window.location.href=baseURLadmin+'news/view_news.php?page='+page;
	});
	$("#freelist").change(function(){
	page=($("#freelist").val());
	window.location.href=baseURLadmin+'user_account/freelist.php?page='+page;
	});
	$("#trackTrace").change(function(){
	page=($("#trackTrace").val());
	window.location.href=baseURLadmin+'search/track_trace.php?page='+page;
	});
	$("#seaportPage").change(function(){
	page=($("#seaportPage").val());
	window.location.href=baseURLadmin+'ports/seaport.php?page='+page;
	});
	$("#airportPage").change(function(){
	page=($("#airportPage").val());
	window.location.href=baseURLadmin+'ports/airport.php?page='+page;
	});
});