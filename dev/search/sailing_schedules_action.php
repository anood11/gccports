<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
$name="";
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnSailingScheduleSearch'])){
	getValuesFromForm();
	$sailingScheduleSearchResults=getSailingScheduleSearchResults($name);
}else{
	getValuesFromForm();
	$sailingScheduleSearchResults=getSailingScheduleSearchResults($name);
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page leve function starts ********************************************************/
function getValuesFromForm(){
	global $name;
	
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:"a";
	
}

/******************************************* Page leve function ends **********************************************************/

?>