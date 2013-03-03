<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnSubmit'])){
	getValuesFromForm();
	$displayMessage=validateForm();
	if($displayMessage==""){
		$send=sendMessage();
		if($send==1){
			$displayMessage="Your message has been send successfully";
		}else{
			$displayMessage="Failed to send message. Please try again later.";
		}
	}
	setValuesToForm();
}else{
	getValuesFromForm();
	setValuesToForm();
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $name;
	global $company;
	global $designation;
	global $email;
	global $phone;
	global $message;
	
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:"";
	$company=isset($_REQUEST['company'])?$_REQUEST['company']:"";
	$designation=isset($_REQUEST['designation'])?$_REQUEST['designation']:"";
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$message=isset($_REQUEST['message'])?$_REQUEST['message']:"";
}
function setValuesToForm(){
	global $name;
	global $company;
	global $designation;
	global $email;
	global $phone;
	global $message;
	
	$name=formatDisplayText($name);
	$company=formatDisplayText($company);
	$designation=formatDisplayText($designation);
	$email=formatDisplayText($email);
	$phone=formatDisplayText($phone);
	$message=formatDisplayText($message);
}
function validateForm(){
	global $name;
	global $company;
	global $designation;
	global $email;
	global $phone;
	global $message;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if((!hasPHPCode($name))||($name=="")){
		$err.=$preMsg."Enter your name.".$postMsg;
	}else if(!hasPHPCode($company)){
		$err.=$preMsg."Enter your Company name.".$postMsg;
	}else if((!hasPHPCode($designation))||($designation=="")){
		$err.=$preMsg."Enter your Designation.".$postMsg;
	}else if((!hasPHPCode($email))||($email=="")){
		$err.=$preMsg."Enter your Email address.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Enter valid Email Address.".$postMsg;
	}else if((!hasPHPCode($phone))||($phone=="")){
		$err.=$preMsg."Enter your Phone.".$postMsg;
	}else if((!hasPHPCode($message))||($message=="")){
		$err.=$preMsg."Enter your Message.".$postMsg;
	}
	return $err;
}
function sendMessage(){
	global $name;
	global $company;
	global $designation;
	global $email;
	global $phone;
	global $message;
}
/******************************************* Page level functions ends ********************************************************/


?>