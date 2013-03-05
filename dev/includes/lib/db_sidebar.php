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
                                 GetSQLValueString($airlineSort, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getCountryList($type){
	global $db;
	if($type=='airport'){
		$countryDetails ="SELECT DISTINCT country FROM tblairport ORDER BY country ASC"; 
	}else if($type=='airline'){
		$countryDetails ="SELECT DISTINCT country FROM tblairlines ORDER BY country ASC"; 
	}else if($type=='seaport'){
		$countryDetails ="SELECT DISTINCT country FROM tblseaports ORDER BY country ASC"; 
	}else if($type=='telephone'){
		$countryDetails ="SELECT DISTINCT country FROM tbltelephonecodes ORDER BY country ASC"; 
	}else if($type=='airportDirectory'){
		$countryDetails ="SELECT DISTINCT country FROM tblairportdirectory ORDER BY country ASC";
	}else if($type=='seaportDirectory'){
		$countryDetails ="SELECT DISTINCT country FROM tblseaportdirectory ORDER BY country ASC"; 
	}
	$rsResult = $db->sql_query($countryDetails);
	return $rsResult;
}
function getCountryAbbreviations($type){
	global $db;
	if($type=='airport'){
		$countryAbbreviations ="SELECT DISTINCT countryAbbreviation FROM tblairport ORDER BY countryAbbreviation ASC"; 
	}else if($type=='airline'){
		$countryAbbreviations ="SELECT DISTINCT countryAbbreviation FROM tblairlines ORDER BY countryAbbreviation ASC"; 
	}else if($type=='seaport'){
		$countryAbbreviations ="SELECT DISTINCT countryAbbreviation FROM tblseaports ORDER BY countryAbbreviation ASC"; 
	}
	$rsResult = $db->sql_query($countryAbbreviations);
	return $rsResult;
}
function getAirportSearchResults($airportName,$airportCountry,$airportCountryAbbreviation,$airportCity,$airportCode,$airportSort){
	global $db;
	$airportName = $airportName."%";
	$airportCity=$airportCity."%";
	$airportCode=$airportCode."%";
	$airportCountry=$airportCountry."%";
	$airportCountryAbbreviation=$airportCountryAbbreviation."%";
	$selectQyery=sprintf("SELECT airportName,airportCode,cityName,country,countryAbbreviation FROM tblairport WHERE
							 airportName LIKE %s AND country LIKE %s AND countryAbbreviation LIKE %s AND cityName LIKE %s AND airportCode LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airportName, "text"),
                                 GetSQLValueString($airportCountry, "text"),
								 GetSQLValueString($airportCountryAbbreviation, "text"),
								 GetSQLValueString($airportCity, "text"),
                                 GetSQLValueString($airportCode, "text"),
                                 GetSQLValueString($airportSort, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getAirportDirectorySearchResults($airportName,$airportCountry,$airportAddress,$airportPhone,$airportSort){
	global $db;
	$airportName = $airportName."%";
	$airportAddress=$airportAddress."%";
	$airportPhone=$airportPhone."%";
	$airportCountry=$airportCountry."%";
	$selectQyery=sprintf("SELECT country,name,address,phone,fax,email,website FROM tblairportdirectory WHERE
							 name LIKE %s AND country LIKE %s AND address LIKE %s AND phone LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($airportName, "text"),
                                 GetSQLValueString($airportCountry, "text"),
								 GetSQLValueString($airportAddress, "text"),
								 GetSQLValueString($airportPhone, "text"),
								 GetSQLValueString($airportSort, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getSeaportDirectorySearchResults($seaportName,$seaportCountry,$seaportAddress,$seaportLocation,$seaportSort){
	global $db;
	$seaportName = $seaportName."%";
	$seaportCountry=$seaportCountry."%";
	$seaportAddress=$seaportAddress."%";
	$seaportLocation=$seaportLocation."%";
	$selectQyery=sprintf("SELECT location,country,name,address,phone,fax,email,website FROM tblseaportdirectory WHERE
							 name LIKE %s AND country LIKE %s AND address LIKE %s AND location LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($seaportName, "text"),
                                 GetSQLValueString($seaportCountry, "text"),
								 GetSQLValueString($seaportAddress, "text"),
								 GetSQLValueString($seaportLocation, "text"),
								 GetSQLValueString($seaportSort, ""));
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
								 GetSQLValueString($seaportSort, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getTelephoneSearchResults($telephoneCode,$internetIP,$telephoneCountry,$telephoneSort){
	global $db;
	$telephoneCode = $telephoneCode."%";
	$internetIP=$internetIP."%";
	$telephoneCountry=$telephoneCountry."%";
	$selectQyery=sprintf("SELECT country,telephoneCode,internetIP FROM tbltelephonecodes WHERE telephoneCode LIKE %s AND internetIP LIKE %s AND country LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($telephoneCode, "text"),
                                 GetSQLValueString($internetIP, "text"),
                                 GetSQLValueString($telephoneCountry, "text"),
								 GetSQLValueString($telephoneSort, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function trackTraceCategories(){
	global $db;
	$selectQuery="SELECT DISTINCT category FROM tbltracktrace";
	$rsResult = $db->sql_query($selectQuery);
	return $rsResult;
}
function getTrackTraceSearchResults($category){
	global $db;
	$selectQyery=sprintf("SELECT companyName,url FROM tbltracktrace WHERE category=%s ORDER BY companyName ASC",
                      			 GetSQLValueString($category, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function listAllCountries(){
	global $db;
	$selectQyery="SELECT countryId,countryName,countryCode FROM tblcountry";
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getFooter($type){
	global $db;
	$selectQyery=sprintf("SELECT footerText FROM tblfooter WHERE footerSide=%s",
						  GetSQLValueString($type, "text"));
	$rsResult = $db->sql_query($selectQyery);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['footerText'];
}
function updateFooter($leftFooter,$rightFooter){
	global $db;
	$update=0;
	$updateQyeryLeft=sprintf("UPDATE tblfooter SET footerText=%s WHERE footerSide='left'",
						  GetSQLValueString($leftFooter, "text"));
	$updateQyeryRight=sprintf("UPDATE tblfooter SET footerText=%s WHERE footerSide='right'",
						  GetSQLValueString($rightFooter, "text"));
	if($rsResult = $db->sql_query($updateQyeryLeft)){
		$update=1;
	}
	if($rsResult = $db->sql_query($updateQyeryRight)){
		$update=2;
	}
	return $update;
}
?>