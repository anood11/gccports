<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportCity;
global $airportCode;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getAirportKeys();
$airportSearchResults=getAirportSearchResults($airportName,$airportCountry,$airportCity,$airportCode,$airportSort);	
$airportCountryList1=getCountryList('airport');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getAirportKeys(){
	global $airportName;
	global $airportCountry;
	global $airportCity;
	global $airportCode;
	global $airportSort;
	$airportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$airportCountry=(isset($_REQUEST['countryAb']))?trim($_REQUEST['countryAb']):"-1";
	$airportCity=(isset($_REQUEST['city']))?trim($_REQUEST['city']):"";
	$airportCode=(isset($_REQUEST['code']))?trim($_REQUEST['code']):"";
	$airportSort=(isset($_REQUEST['airportCategory']))?trim($_REQUEST['airportCategory']):"airportID";
	if($airportCountry=='-1')$airportCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
