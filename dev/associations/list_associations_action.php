<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $category;
global $categoryHead;

$displayMessage="";
$category="";
$categoryHead="";
/******************************************* Control flow starts **************************************************************/
getValuesFromForm();
$associationList=getAssociations($category,$name);
switch($category){
	case 'gccCountries':$categoryHead='Associations in GCC Countries';break;
	case 'international Associations':$categoryHead='International Associations';break;
	case 'officialBodies':$categoryHead='Official Bodies';break;
}
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $category;
	global $name;
	
	$category=isset($_REQUEST['category'])?trim($_REQUEST['category']):"";
	$name=isset($_REQUEST['name'])?trim($_REQUEST['name']):"a";
}
/******************************************* Page level functions ends ********************************************************/
?>