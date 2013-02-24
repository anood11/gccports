<?php
include("../includes/lib/globals.php");
include("../includes/lib/db_news.php");
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['subscribeNews'])){
	getSubscriptions();
	$displayMessage=validateSubscriptions();
	if($displayMessage==""){
		$add=addSubscription($subscribeName,$subscribeCompany,$subscribeCountry,$subscribeEmail);
		if($add==1) echo 'You are subscribed';
		else echo 'Error ! Please try again';
	}else echo $displayMessage;
}
/******************************************* Control flow ends **************************************************************/
/******************************************* Page level function starts *****************************************************/
function getSubscriptions(){
	global $subscribeName;
	global $subscribeCompany;
	global $subscribeCountry;
	global $subscribeEmail;
	
	$subscribeName=isset($_REQUEST['name'])?trim($_REQUEST['name']):"";
	$subscribeCompany=isset($_REQUEST['company'])?trim($_REQUEST['company']):"";
	$subscribeCountry=isset($_REQUEST['country'])?trim($_REQUEST['country']):"";
	$subscribeEmail=isset($_REQUEST['email'])?trim($_REQUEST['email']):"";
}
function validateSubscriptions(){
	global $subscribeName;
	global $subscribeCompany;
	global $subscribeCountry;
	global $subscribeEmail;
	
	$err = "";
	$preMsg = "";
	$postMsg = "";
	
	if(($subscribeName=="")||(!hasPHPCode($subscribeName))){
		$err.=$preMsg."Please enter your Name.".$postMsg;
	}else if(($subscribeCompany=="")||(!hasPHPCode($subscribeCompany))){
		$err.=$preMsg."Please enter your Company.".$postMsg;
	}else if(($subscribeCountry=="-1")||(!hasPHPCode($subscribeCountry))){
		$err.=$preMsg."Please enter your Country.".$postMsg;
	}else if(($subscribeEmail=="")||(!hasPHPCode($subscribeEmail))){
		$err.=$preMsg."Please enter your Email Id.".$postMsg;
	}else if(!isEmail($subscribeEmail)){
		$err.=$preMsg."Please enter valid Email Id.".$postMsg;
	}return $err;
}
/******************************************* Page level functions ends ******************************************************/
?>