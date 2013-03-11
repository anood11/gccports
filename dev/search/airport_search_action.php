<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportCountryAbbreviation;
global $airportCity;
global $airportCode;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getAirportKeys();
$airportSearchResults=getAirportSearchResults($airportName,$airportCountry,$airportCountryAbbreviation,$airportCity,$airportCode,$airportSort);	
$airportCountryList1=getCountryList('airport');
$airportCountryAbbreviations1=getCountryAbbreviations('airport');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getAirportKeys(){
	global $airportName;
	global $airportCountry;
	global $airportCountryAbbreviation;
	global $airportCity;
	global $airportCode;
	global $airportSort;
	$airportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$airportCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	$airportCountryAbbreviation=(isset($_REQUEST['abbrv']))?trim($_REQUEST['abbrv']):"-1";
	$airportCity=(isset($_REQUEST['city']))?trim($_REQUEST['city']):"";
	$airportCode=(isset($_REQUEST['code']))?trim($_REQUEST['code']):"";
//	$airportSort=(isset($_REQUEST['airportCategory']))?trim($_REQUEST['airportCategory']):"airportID";
	$airportSort="airportID";
	if($airportCountry=='-1')$airportCountry="";
	if($airportCountryAbbreviation=="-1")$airportCountryAbbreviation="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
