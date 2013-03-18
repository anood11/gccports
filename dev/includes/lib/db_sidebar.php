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
                                 GetSQLValueString($awbPrefix, "text"),
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
	$airportCountry=$airportCountry."%";
	$selectQyery=sprintf("SELECT airportDirectoryId,name FROM tblairportdirectory WHERE
							 name LIKE %s AND country LIKE %s",
                                 GetSQLValueString($airportName, "text"),
                                 GetSQLValueString($airportCountry, "text"),
								 GetSQLValueString($airportName, ""));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getSeaportDirectorySearchResults($seaportName,$seaportCountry){
	global $db;
	$seaportName = $seaportName."%";
	$seaportCountry=$seaportCountry."%";
	$selectQyery=sprintf("SELECT seaportDirectoryId,name FROM tblseaportdirectory WHERE
							 name LIKE %s AND country LIKE %s ORDER BY name ASC",
                                 GetSQLValueString($seaportName, "text"),
                                 GetSQLValueString($seaportCountry, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getSeaportSearchResults($seaportName,$seaportCountry,$seaportCode,$seaportSort){
	global $db;
	$seaportName = $seaportName."%";
	$seaportCountry=$seaportCountry."%";
	$seaportCode=$seaportCode."%";
	$selectQyery=sprintf("SELECT seaportName,country,code,longitude,latitude FROM tblseaports WHERE seaportName LIKE %s AND country LIKE %s AND code LIKE %s ORDER BY %s ASC",
                                 GetSQLValueString($seaportName, "text"),
                                 GetSQLValueString($seaportCountry, "text"),
								 GetSQLValueString($seaportCode, "text"),
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
	$selectQyery=sprintf("SELECT companyName,url FROM tbltracktrace WHERE category=%s AND status=1 ORDER BY companyName ASC",
                      			 GetSQLValueString($category, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function listAllCountries(){
	global $db;
	$selectQyery="SELECT countryId,countryName,countryCode FROM tblcountry ORDER BY countryName ASC";
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
function addTrackTrace($newCategory,$newCompany,$newWebsite,$contact,$email,$phone){
	global $db;
	$add=0;
	$insertQuery=sprintf("INSERT INTO tbltracktrace(category,companyName,url,status,contactPerson,email,phone)VALUES(%s,%s,%s,0,%s,%s,%s)",
				GetSQLValueString($newCategory, "text"),
				GetSQLValueString($newCompany, "text"),
				GetSQLValueString($newWebsite, "text"),
				GetSQLValueString($contact, "text"),
				GetSQLValueString($email, "text"),
				GetSQLValueString($phone, "text"));
	if($rsResult = $db->sql_query($insertQuery)){
			$add=1;	
	}
	return $add;
}
function listTrackTrace($start,$end){
	global $db;
	$selectQyery=sprintf("SELECT trackTraceId,category,companyName,url,status,contactPerson,email,phone FROM tbltracktrace LIMIT %s,%s",
						  GetSQLValueString($start, "int"),
						  GetSQLValueString($end, "int"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getTotalTrackTrace(){
	global $db;
	$selectQuery="SELECT COUNT(*) AS cnt FROM tbltracktrace";
	$rsResult = $db->sql_query($selectQuery);
	$rowRes=$db->sql_fetchrow($rsResult);
	return $rowRes['cnt'];
}
function changeTrackTraceStatus($id,$status){
	global $db;
	$update=0;
	$updateQuery=sprintf("UPDATE tbltracktrace SET status=%s WHERE trackTraceId=%s",
						  GetSQLValueString($status, "int"),
						  GetSQLValueString($id, "int"));
	if($rsResult = $db->sql_query($updateQuery)){
		$update=1;
	}
	return $update;
}
function getSailingScheduleSearchResults($name){
	global $db;
	$name=$name.'%';
	$selectQyery=sprintf("SELECT companyName,ssURL FROM tblsailingschedule WHERE companyName LIKE %s",
						  GetSQLValueString($name, "text"));
	$rsResult = $db->sql_query($selectQyery);
	return $rsResult;
}
function getSeaportDirectoryDetails($id){
	global $db;
	$selectQuery=sprintf("SELECT location,country,name,address,phone,fax,email,website FROM tblseaportdirectory WHERE seaportDirectoryId=%s",
	                      GetSQLValueString($id, "int"));
	$rsResult = $db->sql_query($selectQuery);
	return $rsResult;
}
function getAirportDirectoryDetails($id){
	global $db;
	$selectQuery=sprintf("SELECT country,name,address,phone,fax,email,website FROM tblairportdirectory WHERE airportDirectoryId=%s",
	                      GetSQLValueString($id, "int"));
	$rsResult = $db->sql_query($selectQuery);
	return $rsResult;
}
?>