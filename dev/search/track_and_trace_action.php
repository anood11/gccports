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
		$add=addTrackTrace($newCategory,$newCompany,$newWebsite,$contact,$email,$phone);	
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
	global $contact;
	global $email;
	global $phone;
	
	
	$category=isset($_REQUEST['category'])?$_REQUEST['category']:"";
	$newCategory=isset($_REQUEST['newCategory'])?($_REQUEST['newCategory']):"-1";
	$newCompany=isset($_REQUEST['newCompany'])?($_REQUEST['newCompany']):"";
	$newWebsite=isset($_REQUEST['newURL'])?($_REQUEST['newURL']):"";
	$contact=isset($_REQUEST['contact'])?($_REQUEST['contact']):"";
	$email=isset($_REQUEST['email'])?($_REQUEST['email']):"";
	$phone=isset($_REQUEST['phone'])?($_REQUEST['phone']):"";
	if($category=='-1') $category="";
}
function validateForm(){
	global $newCategory;
	global $newCompany;
	global $newWebsite;
	global $contact;
	global $email;
	global $phone;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";
	
	if((!hasPHPCode($newCategory))||($newCategory=="-1")){
		$err.=$preMsg."Please select one category.".$postMsg;
	}else if((!hasPHPCode($newCompany))||($newCompany=="")){
		$err.=$preMsg."Please enter Company name.".$postMsg;
	}else if((!hasPHPCode($newWebsite))||($newWebsite=="")){
		$err.=$preMsg."Please enter Website address.".$postMsg;
	}else if((!hasPHPCode($contact))||($contact=="")){
		$err.=$preMsg."Please enter Contact person.".$postMsg;
	}else if((!hasPHPCode($email))||($email=="")){
		$err.=$preMsg."Please enter Email address.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Please enter valid email address.".$postMsg;
	}else if((!hasPHPCode($phone))||($phone=="")){
		$err.=$preMsg."Please enter Phone number.".$postMsg;
	}else if(!isNumeric($phone)){
		$err.=$preMsg."Please enter valid Phone number.".$postMsg;
	}return $err;
}
/******************************************* Page leve function ends **********************************************************/

?>