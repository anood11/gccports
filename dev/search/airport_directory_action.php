<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getAirportKeys();
$airportSearchResults=getAirportDirectorySearchResults($airportName,$airportCountry,$airportAddress,$airportPhone,$airportSort);	
$airportDirectoryCountryList=getCountryList('airportDirectory');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getAirportKeys(){
	global $airportName;
	global $airportCountry;
	global $airportAddress;
	global $airportPhone;
	global $airportSort;
	$airportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$airportCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"";
	$airportAddress=(isset($_REQUEST['address']))?trim($_REQUEST['address']):"";
	$airportPhone=(isset($_REQUEST['phone']))?trim($_REQUEST['phone']):"";
	//$airportSort=(isset($_REQUEST['airportCategory']))?trim($_REQUEST['airportCategory']):"airportDirectoryId";
	$airportSort="airportDirectoryId";
	if($airportCountry=='-1')$airportCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
