<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getValuesFromForm();
$categoryList=trackTraceCategories();
$trackTraceSearchResults=getTrackTraceSearchResults($category);
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page leve function starts ********************************************************/
function getValuesFromForm(){
	global $category;
	
	$category=isset($_REQUEST['category'])?$_REQUEST['category']:"";
}
/******************************************* Page leve function ends **********************************************************/

?>