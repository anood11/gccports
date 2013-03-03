<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getSeaportKeys();
$seaportSearchResults=getSeaportDirectorySearchResults($seaportName,$seaportCountry,$seaportAddress,$seaportLocation,$seaportSort);	
$seaportDirectoryCountryList=getCountryList('seaportDirectory');

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getSeaportKeys(){
	global $seaportName;
	global $seaportCountry;
	global $seaportAddress;
	global $seaportLocation;
	global $seaportSort;
	
	$seaportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$seaportCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	$seaportAddress=(isset($_REQUEST['address']))?trim($_REQUEST['address']):"";
	$seaportLocation=(isset($_REQUEST['location']))?trim($_REQUEST['location']):"";
	$seaportSort=(isset($_REQUEST['seaportCategory']))?trim($_REQUEST['seaportCategory']):"seaportDirectoryId";
	if($seaportCountry=='-1')$seaportCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
