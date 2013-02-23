<?php 
function getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort){
	global $db;
	$airlineName = $airlineName."%";
	$airlineCountry=$airlineCountry."%";
	$airlineIATA=$airlineIATA."%";
	$airlineICAO=$airlineICAO."%";
	$awbPrefix=$awbPrefix."%";
	$selectQyery=sprintf("SELECT airlineName,iata,icao,awbPrefix,country FROM tblairlines WHERE
							 airlineName LIKE %s AND iata LIKE %s AND icao LIKE %s AND awbPrefix LIKE %s AND country LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airlineName, "text"),
                                 GetSQLValueString($airlineIATA, "text"),
								 GetSQLValueString($airlineICAO, "text"),
                                 GetSQLValueString($awbPrefix, "int"),
								 GetSQLValueString($airlineCountry, "text"),
                                 GetSQLValueString($airlineSort, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getCountryList($type){
	global $db;
	if($type=='airport'){
		$countryDetails ="SELECT DISTINCT country,countryAbbreviation FROM tblairport"; 
	}else if($type=='airline'){
		$countryDetails ="SELECT DISTINCT country FROM tblairlines"; 
	}else if($type=='seaport'){
		$countryDetails ="SELECT DISTINCT country FROM tblseaports"; 
	}
	$rsResult = $db->sql_query($countryDetails);
	return $rsResult;
}
function getAirportSearchResults($airportName,$airportCountry,$airportCity,$airportCode,$airportSort){
	global $db;
	$airportName = $airportName."%";
	$airportCountry=$airportCountry."%";
	$airportCity=$airportCity."%";
	$airportCode=$airportCode."%";
	$selectQyery=sprintf("SELECT airportName,airportCode,cityName,country,countryAbbreviation FROM tblairport WHERE
							 airportName LIKE %s AND country LIKE %s AND cityName LIKE %s AND airportCode LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airportName, "text"),
                                 GetSQLValueString($airportCountry, "text"),
								 GetSQLValueString($airportCity, "text"),
                                 GetSQLValueString($airportCode, "text"),
                                 GetSQLValueString($airportSort, "text"));
	$rsResult = $db->sql_query($selectQyery);
	
	return $rsResult;
}
function getSeaportSearchResults($seaportName,$seaportCountry,$seaportCode,$seaportLongitude,$seaportLatitude,$seaportSort){
	global $db;
	$seaportName = $seaportName."%";
	$seaportCountry=$seaportCountry."%";
	$seaportCode=$seaportCode."%";
	$seaportLongitude=$seaportLongitude."%";
	$seaportLatitude=$seaportLatitude."%";
	$selectQyery=sprintf("SELECT seaportName,country,code,longitude,latitude FROM tblseaports WHERE seaportName LIKE %s AND country LIKE %s AND code LIKE %s AND longitude LIKE %s AND latitude LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($seaportName, "text"),
                                 GetSQLValueString($seaportCountry, "text"),
								 GetSQLValueString($seaportCode, "text"),
                                 GetSQLValueString($seaportLongitude, "text"),
                                 GetSQLValueString($seaportLatitude, "text"),
								 GetSQLValueString($seaportSort, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}

?>