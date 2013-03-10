<?php
function getAssociations($category,$name){
	global $db;
	$name=$name.'%';
	$associationDetails=sprintf("SELECT companyName,associationId FROM tblassociations WHERE category=%s AND companyName LIKE %s ORDER BY companyName ASC",
						   GetSQLValueString($category, "text"),
						   GetSQLValueString($name, "text"));		 
	$rsResult = $db->sql_query($associationDetails);
	return $rsResult;
}
function getAssociationDetails($id){
	global $db;
	$associationDetails=sprintf("SELECT category,companyName,address,country,telephoneAndFax,email,website FROM tblassociations WHERE associationId=%s ORDER BY companyName ASC",
						   GetSQLValueString($id, "int"));		 
	$rsResult = $db->sql_query($associationDetails);
	return $rsResult;
}
?>