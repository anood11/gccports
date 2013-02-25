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
getTelephoneKeys();
$telephoneSearchResults=getTelephoneSearchResults($telephoneCode,$internetIP,$telephoneCountry,$telephoneSort);	
$telephoneCountryList=getCountryList('telephone');

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getTelephoneKeys(){
	global $telephoneCode;
	global $internetIP;
	global $telephoneCountry;
	global $telephoneSort;
	
	$telephoneCode=(isset($_REQUEST['name']))?trim($_REQUEST['name']):"";
	$internetIP=(isset($_REQUEST['ip']))?trim($_REQUEST['ip']):"";
	$telephoneCountry=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"-1";
	$telephoneSort=(isset($_REQUEST['telephoneCategory']))?trim($_REQUEST['telephoneCategory']):"telephoneId";
	
	if($telephoneCountry=="-1")$telephoneCountry="";
}
/******************************************* Page level functions ends ********************************************************/
?>   
