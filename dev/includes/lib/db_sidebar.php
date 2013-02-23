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

?>