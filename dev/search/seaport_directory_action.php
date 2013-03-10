<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getSeaportKeys();
$seaportSearchResults=getSeaportDirectorySearchResults($seaportName,$seaportCountry);	
$seaportDirectoryCountryList=getCountryList('seaportDirectory');

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getSeaportKeys(){
	global $seaportName;
	global $seaportCountry;
		
	$seaportName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$seaportCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	if($seaportCountry=='-1')$seaportCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
