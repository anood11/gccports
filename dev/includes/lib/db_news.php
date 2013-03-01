<?php
function getNewsList($start,$end){
	global $db;
  	$newsDetails =sprintf("SELECT newsID,newsDate,newsHeading,newsMatter,newsImage FROM tblnews WHERE newsStatus=1 ORDER BY newsDate DESC LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($end, "int"));		 
	$rsResult = $db->sql_query($newsDetails);
	
	return $rsResult;
}
function getSubscribersList($start,$end){
	global $db;
  	$newsDetails =sprintf("SELECT s.subscriptionId,s.name,s.company,s.email,c.country
	                       FROM tblsubscriptions s JOIN tblcountry c ON s.country=c.countryId
						   LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($end, "int"));		 
	$rsResult = $db->sql_query($newsDetails);
	
	return $rsResult;
}
function getNewsDetails($id){
	global $db;
  	$newsDetails =sprintf("SELECT newsDate,newsHeading,newsMatter,newsImage,newsCategoryId,newsStatus FROM tblnews WHERE newsID=%s",
						   GetSQLValueString($id, "int"));		 
	$rsResult = $db->sql_query($newsDetails); 
	return $rsResult;
}
function getTotalNews(){
	global $db;
  	$newsDetails ="SELECT COUNT(newsID) AS cnt FROM tblnews WHERE newsStatus=1";
	$rsResult = $db->sql_query($newsDetails); 
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function getTotalSubscribers(){
	global $db;
  	$newsDetails ="SELECT COUNT(newsID) AS cnt FROM tblsubscriptions";
	$rsResult = $db->sql_query($newsDetails); 
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function deleteNews($id){
	global $db;
	$delete=0;
	$deleteNews=sprintf("UPDATE tblnews SET newsStatus=0 WHERE newsID=%s",
						   GetSQLValueString($id, "int"));
	if($rsResult = $db->sql_query($deleteNews)){
		$delete=1;
	}
	return $delete; 
}
function deleteSubscribers($id){
	global $db;
	$delete=0;
	$deleteNews=sprintf("DELETE FROM tblsubscriptions WHERE subscriptionId=%s",
						   GetSQLValueString($id, "int"));
	if($rsResult = $db->sql_query($deleteNews)){
		$delete=1;
	}
	return $delete; 
}
function addSubscription($subscribeName,$subscribeCompany,$subscribeCountry,$subscribeEmail){
	global $db;
	$add=0;
  	$subscribeNews =sprintf("INSERT INTO tblsubscriptions(name,company,country,email)VALUES(%s,%s,%s,%s)",
						   GetSQLValueString($subscribeName, "text"),
						   GetSQLValueString($subscribeCompany, "text"),
						   GetSQLValueString($subscribeCountry, "int"),
						   GetSQLValueString($subscribeEmail, "text"));		 
	if($rsResult = $db->sql_query($subscribeNews)){
		$add=1;
	}
	return $add;
}
function addNews($newsHead,$newsMatter,$newsDate,$newsCategory,$newsActive){
	global $db;
	$next_id=0;
  	$addNews =sprintf("INSERT INTO tblnews(newsHeading,newsMatter,newsDate,newsStatus)VALUES(%s,%s,%s,%s)",
						   GetSQLValueString($newsHead, "text"),
						   GetSQLValueString($newsMatter, "text"),
						   GetSQLValueString($newsDate, "date"),
						   GetSQLValueString($newsCategory, "int"),
						   GetSQLValueString($newsActive, "int"));		 
	if($rsResult = $db->sql_query($addNews)){
		$next_id = $db->sql_nextid();
	}
	$addImage =sprintf("INSERT INTO tblnews(newsImage)VALUES(%s)",
						   GetSQLValueString($next_id, "int"));
	$rsImg = $db->sql_query($addImage);
	return $next_id;
}
function updateNews($newsHead,$newsMatter,$newsDate,$newsCategory,$newsActive,$newsId){
	global $db;
	$next_id=0;
  	$updateNews =sprintf("UPDATE tblnews SET newsHeading=%s,newsMatter=%s,newsCategoryId=%s,newsDate=%s,newsStatus=%s WHERE newsID=%s",
						   GetSQLValueString($newsHead, "text"),
						   GetSQLValueString($newsMatter, "text"),
						   GetSQLValueString($newsCategory, "int"),
						   GetSQLValueString($newsDate, "date"),
						   GetSQLValueString($newsActive, "int"),
						   GetSQLValueString($newsId, "int"));		 
	if($rsResult = $db->sql_query($updateNews)){
		$next_id = $newsId;
	}
	return $next_id;
}
function getNewsCategories(){
	global $db;
	$categoryList="SELECT categoryId,newsCategory FROM tblcategory";
	$rsResult = $db->sql_query($categoryList);
	return $rsResult;
}
?>