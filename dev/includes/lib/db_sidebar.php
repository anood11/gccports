<?php
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
function getAirportSearchResults($airportName,$airportCountry,$airportIATA,$airportICAO,$airportSort){
	global $db;
	$airportName = $airportName."%";
	$airportCountry=$airportCountry."%";
	$airportIATA-$airportIATA."%";
	$airportICAO=$airportICAO."%";
	$selectQyery=sprintf("SELECT airportName,airportCode,cityName,country,countryAbbreviation FROM tblairport WHERE
							 airportName LIKE %s AND country LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airportName, "text"),
                                 GetSQLValueString($airportCountry, "text"),
                                 GetSQLValueString($airportSort, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort){
	global $db;
	$airlineName = $airlineName."%";
	$airlineCountry=$airlineCountry."%";
	$airlineIATA-$airlineIATA."%";
	$airlineICAO=$airlineICAO."%";
	$awbPrefix=$awbPrefix."%";
	$selectQyery=sprintf("SELECT airlineName,iata,icao,awbPrefix,country FROM tblairlines WHERE
							 airlineName LIKE %s OR iata LIKE %s OR icao LIKE %s OR awbPrefix LIKE %s OR country LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airlineName, "text"),
                                 GetSQLValueString($airlineIATA, "text"),
								 GetSQLValueString($airlineICAO, "text"),
                                 GetSQLValueString($awbPrefix, "int"),
								 GetSQLValueString($airlineCountry, "text"),
                                 GetSQLValueString($airlineSort, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
?>