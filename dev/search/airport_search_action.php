<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportIATA;
global $airportICAO;
global $db;

$displayMessage="";
$resultHead_1="";
$resultHead_2="";
$resultHead_3="";
$resultHead_4="";
$resultHead_5="";
/******************************************* Control flow starts **************************************************************/
if((isset($_REQUEST['airportSearch']))&&($_REQUEST['airportSearch']==1)){
	getAirportKeys();
	$airportSearchResults=getAirportSearchResults($airportName,$airportCountry,$airportIATA,$airportICAO,$airportSort);	
	$airportCountryList1=getCountryList('airport');
}else if(isset($_REQUEST['btnAirPortSearch'])){
	getAirportKeys();
	$airportSearchResults=getAirportSearchResults($airportName,$airportCountry,$airportIATA,$airportICAO,$airportSort);	
	$airportCountryList1=getCountryList('airport');
}else{
	getAirportKeys();
	$airportSearchResults=getAirportSearchResults($airportName,$airportCountry,$airportIATA,$airportICAO,$airportSort);	
	$airportCountryList1=getCountryList('airport');
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getAirportKeys(){
	global $airportName;
	global $airportCountry;
	global $airportIATA;
	global $airportICAO;
	global $airportSort;
	$airportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$airportCountry=(isset($_REQUEST['countryAb']))?trim($_REQUEST['countryAb']):"-1";
	$airportIATA=(isset($_REQUEST['iata']))?trim($_REQUEST['iata']):"";
	$airportICAO=(isset($_REQUEST['icao']))?trim($_REQUEST['icao']):"";
	$airportSort=(isset($_REQUEST['airportCategory']))?trim($_REQUEST['airportCategory']):"airportID";
}
/******************************************* Page level functions ends ********************************************************/
?>   
