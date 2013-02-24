<?php
function getAssociations($category,$type){
	global $db;
  	$associationDetails =sprintf("SELECT companyName,country,website FROM tblassociations WHERE category=%s ORDER BY %s ASC",
						   GetSQLValueString($category, "text"),
						   GetSQLValueString($type, ""));		 
	$rsResult = $db->sql_query($associationDetails); 
	return $rsResult;
}
?>