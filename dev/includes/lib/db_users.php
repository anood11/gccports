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
function addFreelistUserDetails($company,$address,$telephone,$fax,$email,$website,$organizationHead,$designation,$mobile,$employeeCount){
	global $db;
	$insertId=0;
	$addFreelist=sprintf("INSERT INTO tblfreelistuser(companyName,address,telephone,fax,email,website,organizationHead,designation,mobile,employeeCount,createdOn,status) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,DATE(NOW()),0)",
						  GetSQLValueString($company, "text"),
						  GetSQLValueString($address, "text"),
						  GetSQLValueString($telephone, "text"),
						  GetSQLValueString($fax, "text"),
						  GetSQLValueString($email, "text"),
						  GetSQLValueString($website, "text"),
						  GetSQLValueString($organizationHead, "text"),
						  GetSQLValueString($designation, "text"),
						  GetSQLValueString($mobile, "text"),
						  GetSQLValueString($employeeCount, "int"));
	if($rsResult = $db->sql_query($addFreelist)){
		$insertId = $db->sql_nextid();
	}
	return $insertId;
}
function addFreeListBranch($branch,$bAddress,$bPhone,$bFax,$bEmail,$bWebsite,$userId){
	global $db;
	$insertId=0;
	$addBranch=sprintf("INSERT INTO tblfreelistbranch(userId,branch,address,telephone,fax,email,website) VALUES(%s,%s,%s,%s,%s,%s,%s)",
						  GetSQLValueString($userId, "int"),
						  GetSQLValueString($branch, "text"),
						  GetSQLValueString($bAddress, "text"),
						  GetSQLValueString($bPhone, "text"),
						  GetSQLValueString($bFax, "text"),
						  GetSQLValueString($bEmail, "text"),
						  GetSQLValueString($bWebsite, "text"));
	if($rsResult = $db->sql_query($addBranch)){
		$insertId = $db->sql_nextid();
	}
	return $insertId;
}
function addFreeListCategory($chkShipOwners,$chkShippingAgnts,$chkFreight,$chkAirlines,$chkAirCargo,$chkAirCraft,$chkShipbuilders,$chkEnginBuilders,$chkShipCharters,$chkShipBrokers,$chkBunkers,$chkShipChandler,$chkStevedores,$chkWarehousing,$chkMarineContainer,$chkMaritime,$chkContainerTrucking,$chkEquipmentOwners,$chkCourier,$chkLashing,$chkLogistics,$chkPacking,$chkPestControl,$chkProjectCargo,$chkSupplyChain,$chkConsultants,$chkShipManagers,$chkMaritimeSchool,$chkMarineInsurance,$chkMaritimeLawyers,$chkClassification,$chkTowage,$chkOffshore,$userId){
	

	global $db;
	$insertId=0;
	$addCategories=sprintf("INSERT INTO tblfreelistcategory(userId,shipOwners,airlines,shipBuilders,shipBrokers,stevedores,maritimeOrganisations,courierServices,packingRemovals,supplyChain,maritimeSchools,classificationSocieties,shippingAgents,airCargoAgents,engineBuilders,bunkers,wareHouse,containerTrucking,lashSecure,pestControl,consultants,marineInsurance,towage,freightForwarding,airCraft,shipCharters,shipChandler,marineContainer,equipmentOwners,logistics,projectCargo,shipManagers,maritimeLawyers,offshoreOnshore) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
						  GetSQLValueString($userId, "int"),
						  GetSQLValueString($chkShipOwners, "int"),
						  GetSQLValueString($chkAirlines, "int"),
						  GetSQLValueString($chkShipbuilders, "int"),
						  GetSQLValueString($chkShipBrokers, "int"),
						  GetSQLValueString($chkStevedores, "int"),
						  GetSQLValueString($chkMaritime, "int"),
						  GetSQLValueString($chkCourier, "int"),
						  GetSQLValueString($chkPacking, "int"),
						  GetSQLValueString($chkSupplyChain, "int"),
						  GetSQLValueString($chkMaritimeSchool, "int"),
						  GetSQLValueString($chkClassification, "int"),
						  GetSQLValueString($chkShippingAgnts, "int"),
						  GetSQLValueString($chkAirCargo, "int"),
						  GetSQLValueString($chkEnginBuilders, "int"),
						  GetSQLValueString($chkBunkers, "int"),
						  GetSQLValueString($chkWarehousing, "int"),
						  GetSQLValueString($chkContainerTrucking, "int"),
						  GetSQLValueString($chkLashing, "int"),
						  GetSQLValueString($chkPestControl, "int"),
						  GetSQLValueString($chkConsultants, "int"),
						  GetSQLValueString($chkMarineInsurance, "int"),
						  GetSQLValueString($chkTowage, "int"),
						  GetSQLValueString($chkFreight, "int"),
						  GetSQLValueString($chkAirCraft, "int"),
						  GetSQLValueString($chkShipCharters, "int"),
						  GetSQLValueString($chkShipChandler, "int"),
						  GetSQLValueString($chkMarineContainer, "int"),
						  GetSQLValueString($chkEquipmentOwners, "int"),
						  GetSQLValueString($chkLogistics, "int"),
						  GetSQLValueString($chkProjectCargo, "int"),
						  GetSQLValueString($chkShipManagers, "int"),
						  GetSQLValueString($chkMaritimeLawyers, "int"),
						  GetSQLValueString($chkOffshore, "int"));
	if($rsResult = $db->sql_query($addCategories)){
		$insertId = $db->sql_nextid();
	}
	return $insertId;
}
function deleteFreelist($id){
	global $db;
	$delete=0;
	$deleteQueryBranch=sprintf("DELETE FROM tblfreelistbranch WHERE userId=%s",
						  GetSQLValueString($id, "int"));
	$deleteQueryCat=sprintf("DELETE FROM tblfreelistcategory WHERE userId=%s",
						  GetSQLValueString($id, "int"));
	$deleteQueryUser=sprintf("DELETE FROM tblfreelistuser WHERE freelistId=%s",
						  GetSQLValueString($id, "int"));
	if($rsResult1 = $db->sql_query($deleteQueryBranch)){
		$delete=1;
	}
	if($rsResult2 = $db->sql_query($deleteQueryCat)){
		$delete=2;
	}
	if($rsResult3 = $db->sql_query($deleteQueryUser)){
		$delete=3;
	}
	return $delete;
}
function getFreelistList($start,$end){
	global $db;
	$listDetails =sprintf("SELECT freelistId,companyName,address,status FROM tblfreelistuser LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($end, "int"));		 
	$rsResult = $db->sql_query($listDetails);
	return $rsResult;
}
function getTotalFreelist(){
	global $db;
	$selectQuery="SELECT COUNT(*) AS cnt FROM tblfreelistuser";
	$rsResult = $db->sql_query($selectQuery);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function activateFreelist($id){
	global $db;
	$active=0;
	$updateQuery=sprintf("UPDATE tblfreelistuser SET status=1 WHERE freelistId=%s",
						 GetSQLValueString($id, "int"));	
	if($rsResult = $db->sql_query($updateQuery)){
		$active=1;
	}
	return $active;
}
function getFreeListDetails($id){
	global $db;
	$selectQuery=sprintf("SELECT * FROM tblfreelistuser JOIN tblfreelistcategory ON
						  tblfreelistuser.freelistId=tblfreelistcategory.userId AND tblfreelistuser.freelistId=%s",
						  GetSQLValueString($id, "int"));
	$rsResult = $db->sql_query($selectQuery);
	return $rsResult;
}
function getFreelistBranches($id){
	global $db;
	$selectQuery=sprintf("SELECT * FROM tblfreelistbranch WHERE userId=%s",
						  GetSQLValueString($id, "int"));
	$rsResult = $db->sql_query($selectQuery);
	return $rsResult;
}
?>