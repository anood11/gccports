<?php
function getAdminDetails(){
	global $db;
  	$user_details ="SELECT userName,password,email FROM tblusers"; 
	$rsResult = $db->sql_query($user_details);
	return $rsResult;
}
function getUserCount(){
	global $db;
  	$user_count ="SELECT COUNT(*) AS cnt FROM tblusers"; 
	$rsResult = $db->sql_query($user_count);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
	
}
function addAdminSettings($user_name,$password,$email_id){
	global $db;
	$admin_id=0;
	$insert_query=sprintf("INSERT INTO tblusers(userName,password,email) VALUES(%s,%s,%s)",
						   GetSQLValueString($user_name, "text"),
						   GetSQLValueString($password, "text"),
						   GetSQLValueString($email_id, "text"));
	if($rsResult = $db->sql_query($insert_query)){
		$admin_id=1;
	}
	return $admin_id;
}
function updateAdminSettings($user_name,$password,$email_id){
	global $db;
	$update_id=0;
	$update_query=sprintf("UPDATE tblusers SET userName=%s,password=%s,email=%s",
						   GetSQLValueString($user_name, "text"),
						   GetSQLValueString($password, "text"),
						   GetSQLValueString($email_id, "text"));
	if($rsResult = $db->sql_query($update_query)){
		$update_id=1;
	}
	return $update_id;
}
function checkUserExists($uname,$password){
	global $db;
  	$user_exists = sprintf("SELECT COUNT(userId) AS cnt FROM tblusers 
							WHERE userName=%s AND password=%s",
									GetSQLValueString($uname, "text"),
									GetSQLValueString($password, "text"));
	$rsResult = $db->sql_query($user_exists);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}

?>