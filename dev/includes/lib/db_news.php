<?php
function getNewsList($start,$end){
	global $db;
  	$newsDetails =sprintf("SELECT newsID,newsDate,newsHeading,newsMatter,newsImage FROM tblnews WHERE newsStatus=1 ORDER BY newsDate DESC LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($end, "int"));		 
	$rsResult = $db->sql_query($newsDetails);
	
	return $rsResult;
}
function getNewsDetails($id){
	global $db;
  	$newsDetails =sprintf("SELECT newsDate,newsHeading,newsMatter,newsImage FROM tblnews WHERE newsID=%s",
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
?>