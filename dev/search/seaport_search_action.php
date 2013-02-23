<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $seaportName;
global $seaportCountry;
global $seaportCode;
global $seaportLongitude;
global $seaportLatitude;
global $seaportSort;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getAirportKeys();
$seaportSearchResults=getSeaportSearchResults($seaportName,$seaportCountry,$seaportCode,$seaportLongitude,$seaportLatitude,$seaportSort);	
$seaportCountryList1=getCountryList('seaport');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getAirportKeys(){
	global $seaportName;
	global $seaportCountry;
	global $seaportCode;
	global $seaportLongitude;
	global $seaportLatitude;
	global $seaportSort;
	$seaportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$seaportCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	$seaportCode=(isset($_REQUEST['code']))?trim($_REQUEST['code']):"";
	$seaportLongitude=(isset($_REQUEST['longitude']))?trim($_REQUEST['longitude']):"";
	$seaportLatitude=(isset($_REQUEST['latitude']))?trim($_REQUEST['latitude']):"";
	$seaportSort=(isset($_REQUEST['seaportCategory']))?trim($_REQUEST['seaportCategory']):"seaportId";
	if($seaportCountry=='-1')$seaportCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
