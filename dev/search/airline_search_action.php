<?php<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airlineName;
global $airlineCountry;
global $airlineIATA;
global $airlineICAO;
global $db;

$displayMessage="";
$resultHead_1="";
$resultHead_2="";
$resultHead_3="";
$resultHead_4="";
$resultHead_5="";
/******************************************* Control flow starts **************************************************************/
if((isset($_REQUEST['airlineSearch']))&&($_REQUEST['airlineSearch']==1)){
	getairlineKeys();
	$airlineSearchResults=getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort);	
	$airlineCountryList1=getCountryList('airline');
}else if(isset($_REQUEST['btnairlineSearch'])){
	getairlineKeys();
	$airlineSearchResults=getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort);	
	$airlineCountryList1=getCountryList('airline');
}else{
	getairlineKeys();
	$airlineSearchResults=getairlineSearchResults($airlineName,$airlineCountry,$airlineIATA,$airlineICAO,$awbPrefix,$airlineSort);	
	$airlineCountryList1=getCountryList('airline');
}

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
	$airlineCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	$airlineIATA=(isset($_REQUEST['iata']))?trim($_REQUEST['iata']):"";
	$airlineICAO=(isset($_REQUEST['icao']))?trim($_REQUEST['icao']):"";
	$airlineSort=(isset($_REQUEST['airlineCategory']))?trim($_REQUEST['airlineCategory']):"airlineID";
	$awbPrefix=(isset($_REQUEST['awb']))?trim($_REQUEST['awb']):"";
}
/******************************************* Page level functions ends ********************************************************/
?>   
