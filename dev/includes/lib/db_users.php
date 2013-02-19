<?php
function getAdminDetails(){
	global $db;
  	$userDetails ="SELECT userName,password,email FROM tblusers"; 
	$rsResult = $db->sql_query($userDetails);
	return $rsResult;
}
function getUserCount(){
	global $db;
  	$userCount ="SELECT COUNT(*) AS cnt FROM tblusers"; 
	$rsResult = $db->sql_query($userCount);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
	
}
function addAdminSettings($userName,$password,$emailId){
	global $db;
	$adminId=0;
	$insertQuery=sprintf("INSERT INTO tblusers(userName,password,email) VALUES(%s,%s,%s)",
						   GetSQLValueString($userName, "text"),
						   GetSQLValueString($password, "text"),
						   GetSQLValueString($emailId, "text"));
	if($rsResult = $db->sql_query($insertQuery)){
		$adminId=1;
	}
	return $admin_id;
}
function updateAdminSettings($userName,$password,$emailId){
	global $db;
	$updateId=0;
	$updateQuery=sprintf("UPDATE tblusers SET userName=%s,password=%s,email=%s",
						   GetSQLValueString($userName, "text"),
						   GetSQLValueString($password, "text"),
						   GetSQLValueString($emailId, "text"));
	if($rsResult = $db->sql_query($updateQuery)){
		$updateId=1;
	}
	return $update_id;
}
function checkUserExists($uname,$password){
	global $db;
  	$userExists = sprintf("SELECT COUNT(userId) AS cnt FROM tblusers 
							WHERE userName=%s AND password=%s",
									GetSQLValueString($uname, "text"),
									GetSQLValueString($password, "text"));
	$rsResult = $db->sql_query($userExists);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}

?>