<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airlineName;
global $airlineCountry;
global $airlineIATA;
global $airlineICAO;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
	getairlineKeys();
	$airlineSearchResults=getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort);	
	$airlineCountryList1=getCountryList('airline');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getairlineKeys(){
	global $airlineName;
	global $airlineCountry;
	global $airlineIATA;
	global $airlineICAO;
	global $awbPrefix;
	global $airlineSort;
	$airlineName=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$airlineCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"";
	$airlineIATA=(isset($_REQUEST['iata']))?trim($_REQUEST['iata']):"";
	$airlineICAO=(isset($_REQUEST['icao']))?trim($_REQUEST['icao']):"";
	$airlineSort=(isset($_REQUEST['airlineCategory']))?trim($_REQUEST['airlineCategory']):"airlineID";
	//$airlineSort="airlineID";
	$awbPrefix=(isset($_REQUEST['awb']))?trim($_REQUEST['awb']):"";
	if($airlineCountry=='-1') $airlineCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
