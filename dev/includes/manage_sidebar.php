<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportIATA;
global $airportICAO;
global $airlineName;
global $airlineCountry;
global $airlineIATA;
global $airlineICAO;
global $awbPrefix;
global $db;

$displayMessage="";
$airportName="";
$airportCountry="-1";
$airportIATA="";
$airportICAO="";
$airlineName="";
$airlineCountry="-1";
$airlineIATA="";
$airlineICAO="";
$awbPrefix="";
/******************************************* Control flow starts **************************************************************/

$airportCountryList=getCountryList('airport');
$airlineCountryList=getCountryList('airline');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/******************************************* Page level functions ends ********************************************************/
?>