<?php
function getNewsList($start,$end){
	global $db;
  	$newsDetails =sprintf("SELECT newsID,newsDate,newsHeading,newsMatter,newsImage FROM tblnews ORDER BY newsDate DESC LIMIT %s,%s",
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
?>