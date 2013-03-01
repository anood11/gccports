<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $airportName;
global $airportCountry;
global $airportCountryAbbreviation;
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
global $seaportLongitude;
global $seaportLatitude;
global $db;

$displayMessage="";
$airportName="";
$airportCountry="-1";
$airportCountryAbbreviation="-1";
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
$seaportLongitude="";
$seaportLatitude="";

/******************************************* Control flow starts **************************************************************/

$airportCountryList=getCountryList('airport');
$airportCountryAbbreviations=getCountryAbbreviations('airport');
$airlineCountryList=getCountryList('airline');
$seaportCountryList=getCountryList('seaport');
$countryList=listAllCountries();
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/******************************************* Page level functions ends ********************************************************/
?>