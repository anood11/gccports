<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
$newCategory="";
$newCompany="";
$newWebsite="";
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnSubmit'])){
	getValuesFromForm();
	$displayMessage=validateForm();
	if($displayMessage==""){
		$add=addTrackTrace($newCategory,$newCompany,$newWebsite);	
		if($add==1) $displayMessage="New entry added successfully and waiting for Admin's approval";
		else $displayMessage="Unable to add new entry. Please try again later";
	}
	$categoryList=trackTraceCategories();
	$trackTraceSearchResults=getTrackTraceSearchResults($category);
}else{
	getValuesFromForm();
	$categoryList=trackTraceCategories();
	$trackTraceSearchResults=getTrackTraceSearchResults($category);
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page leve function starts ********************************************************/
function getValuesFromForm(){
	global $category;
	global $newCategory;
	global $newCompany;
	global $newWebsite;
	
	
	$category=isset($_REQUEST['category'])?$_REQUEST['category']:"";
	$newCategory=isset($_REQUEST['newCategory'])?($_REQUEST['newCategory']):"-1";
	$newCompany=isset($_REQUEST['newCompany'])?($_REQUEST['newCompany']):"";
	$newWebsite=isset($_REQUEST['newURL'])?($_REQUEST['newURL']):"";
	if($category=='-1') $category="";
}
function validateForm(){
	global $newCategory;
	global $newCompany;
	global $newWebsite;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";
	
	if((!hasPHPCode($newCategory))||($newCategory=="-1")){
		$err.=$preMsg."Please select one category.".$postMsg;
	}else if((!hasPHPCode($newCompany))||($newCompany=="")){
		$err.=$preMsg."Please enter Company name.".$postMsg;
	}else if((!hasPHPCode($newWebsite))||($newWebsite=="")){
		$err.=$preMsg."Please enter Website address.".$postMsg;
	}return $err;
}
/******************************************* Page leve function ends **********************************************************/

?>