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
$associationList=getAssociations($category,$associationSort);
switch($category){
	case 'gccCountries':$categoryHead='Associations in GCC Countries';break;
	case 'international Associations':$categoryHead='International Associations';break;
	case 'officialBodies':$categoryHead='Official Bodies';break;
}
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $category;
	global $associationSort;
	
	$category=isset($_REQUEST['category'])?trim($_REQUEST['category']):"";
	$associationSort=isset($_REQUEST['associationSort'])?trim($_REQUEST['associationSort']):"associationId";
}
/******************************************* Page level functions ends ********************************************************/
?>