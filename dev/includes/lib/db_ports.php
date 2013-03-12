<?php
function getTotalSeaports(){
	global $db;
	$selectQuery="SELECT COUNT(seaportId)AS cnt FROM tblseaports";
	$rsResult = $db->sql_query($selectQuery);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function getSeaportList($start,$limit){
	global $db;
	$listDetails =sprintf("SELECT seaportId,seaportName,country,code FROM tblseaports LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($limit, "int"));		 
	$rsResult = $db->sql_query($listDetails);
	return $rsResult;
}
function deleteSeaport($id){
	global $db;
	$delete=0;
	$deleteQuery =sprintf("DELETE FROM tblseaports WHERE seaportId=%s",
						   GetSQLValueString($id, "int"));		 
	if($rsResult = $db->sql_query($deleteQuery)){
		$delete=1;
	}
	return $delete;
}
function getSeaportDetails($id){
	global $db;
	$listDetails =sprintf("SELECT seaportName,country,code,longitude,latitude FROM tblseaports WHERE seaportId=%s",
						   GetSQLValueString($id, "int"));		 
	$rsResult = $db->sql_query($listDetails);
	return $rsResult;
}
function addSeaportDetails($seaportName,$seaportCountry,$code,$longitude,$latitude){
	global $db;
	$add=0;
	$query =sprintf("INSERT INTO tblseaports(seaportName,country,code,longitude,latitude)VALUES(%s,%s,%s,%s,%s)",
						   GetSQLValueString($seaportName, "text"),
						   GetSQLValueString($seaportCountry, "text"),
						   GetSQLValueString($code, "text"),
						   GetSQLValueString($longitude, "text"),
						   GetSQLValueString($latitude, "text"));		 
	if($rsResult = $db->sql_query($query)){
		$add=1;
	}
	return $add;
}
function updateSeaportDetails($seaportName,$seaportCountry,$code,$longitude,$latitude,$id){
	global $db;
	$add=0;
	$query=sprintf("UPDATE tblseaports SET seaportName=%s,country=%s,code=%s,longitude=%s,latitude=%s WHERE seaportId=%s",
						   GetSQLValueString($seaportName, "text"),
						   GetSQLValueString($seaportCountry, "text"),
						   GetSQLValueString($code,"text"),
						   GetSQLValueString($longitude,"text"),
						   GetSQLValueString($latitude,"text"),
						   GetSQLValueString($id,"int"));		 
	if($rsResult = $db->sql_query($query)){
		$add=1;
	}
	return $add;
}
function getTotalAirports(){
	global $db;
	$selectQuery="SELECT COUNT(airportID)AS cnt FROM tblairport";
	$rsResult = $db->sql_query($selectQuery);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function deleteAirport($id){
	global $db;
	$delete=0;
	$deleteQuery =sprintf("DELETE FROM tblairport WHERE airportID=%s",
						   GetSQLValueString($id, "int"));		 
	if($rsResult = $db->sql_query($deleteQuery)){
		$delete=1;
	}
	return $delete;
}
function getAirportList($start,$limit){
	global $db;
	$listDetails =sprintf("SELECT airportID,airportCode,country,airportName FROM tblairport LIMIT %s,%s",
						   GetSQLValueString($start, "int"),
						   GetSQLValueString($limit, "int"));		 
	$rsResult = $db->sql_query($listDetails);
	return $rsResult;
}
function getAirportDetails($id){
	global $db;
	$listDetails =sprintf("SELECT cityName,country,countryAbbreviation,airportName,airportCode FROM tblairport WHERE airportID=%s",
						   GetSQLValueString($id, "int"));		 
	$rsResult = $db->sql_query($listDetails);
	return $rsResult;
}
function addAirportDetails($name,$code,$country,$countryab,$city){
	global $db;
	$add=0;
	$query =sprintf("INSERT INTO tblairport(airportName,airportCode,country,countryAbbreviation,cityName)VALUES(%s,%s,%s,%s,%s)",
						   GetSQLValueString($name, "text"),
						   GetSQLValueString($code, "text"),
						   GetSQLValueString($country, "text"),
						   GetSQLValueString($countryab, "text"),
						   GetSQLValueString($city, "text"));		 
	if($rsResult = $db->sql_query($query)){
		$add=1;
	}
	return $add;
}
function updateAirportDetails($name,$code,$country,$countryab,$city,$id){
	global $db;
	$add=0;
	$query=sprintf("UPDATE tblairport SET airportName=%s,airportCode=%s,country=%s,countryAbbreviation=%s,cityName=%s WHERE airportID=%s",
						   GetSQLValueString($name, "text"),
						   GetSQLValueString($code, "text"),
						   GetSQLValueString($country,"text"),
						   GetSQLValueString($countryab,"text"),
						   GetSQLValueString($city,"text"),
						   GetSQLValueString($id,"int"));		 
	if($rsResult = $db->sql_query($query)){
		$add=1;
	}
	return $add;
}
?>