<?php
function getNewsList($start,$end){
	global $db;
  	$newsDetails =sprintf("SELECT newsID,newsHeading,newsMatter,newsImage FROM tblnews ORDER BY newsDate DESC LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($end, "int"));		 
	$rsResult = $db->sql_query($newsDetails);
	return $rsResult;
}

?>