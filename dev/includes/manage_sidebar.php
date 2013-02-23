<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportCity;
global $airportCode;
global $airlineName;
global $airlineCountry;
global $airlineIATA;
global $airlineICAO;
global $awbPrefix;
global $seaportName;
global $seaportCountry;
global $seaportCode;
global $db;

$displayMessage="";
$airportName="";
$airportCountry="-1";
$airportCity="";
$airportCode="";
$airlineName="";
$airlineCountry="-1";
$airlineIATA="";
$airlineICAO="";
$awbPrefix="";
$seaportName="";
$seaportCountry="-1";
$seaportCode="";
/******************************************* Control flow starts **************************************************************/

$airportCountryList=getCountryList('airport');
$airlineCountryList=getCountryList('airline');
$seaportCountryList=getCountryList('seaport');
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/******************************************* Page level functions ends ********************************************************/
?>