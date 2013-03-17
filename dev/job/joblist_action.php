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
getSearchKey();
$searchResults=getJobSearchResults($country,$company,$industry,$designation);	
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getSearchKey(){
	global $country;
	global $company;
	global $industry;
	global $designation;
		
	$country=(isset($_REQUEST['country']))?trim($_REQUEST['country']):"";
	$company=(isset($_REQUEST['company']))?trim($_REQUEST['company']):"";
	$industry=(isset($_REQUEST['industry']))?trim($_REQUEST['industry']):"";
	$designation=(isset($_REQUEST['designation']))?trim($_REQUEST['designation']):"";
}
/******************************************* Page level functions ends ********************************************************/
?>   
