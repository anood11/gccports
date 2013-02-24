$(document).ready(function(){
	$("#newsPage").change(function(){
	page=($("#newsPage").val());
	window.location.href=baseURLadmin+'news/view_news.php?page='+page;
	});
});