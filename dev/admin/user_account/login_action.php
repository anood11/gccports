<?php
/*****************************Declare/ Initialise variables************************************************************/
global $displayMessage;

$displayMessage="";
/*****************************Declaration ends*************************************************************************/
/*****************************Control flow starts**********************************************************************/
if(isset($_REQUEST['btnLogin'])){  
	getValuesFromForm();
	$displayMessage=validateForm();
	if($displayMessage==""){
		$userId=checkUserExists($userName,encryptPassword($password));
		if($userId>=1){
			$_SESSION['admin']=$userId;
			header("Location:".$httpPathAdmin."user_account/admin.php");
		}else{
			$displayMessage="Invalid login Credentials";
		}
	}setValuesToForm();
}else if(isset($_REQUEST['signout'])){
	session_destroy();
	header("Location:".$httpPathAdmin."user_account/login.php");
}else{
	getValuesFromForm();
	setValuesToForm();
}
/*****************************Control flow ends************************************************************************/
/*****************************Page level function starts***************************************************************/
function getValuesFromForm(){
	global $userName;
	global $password;
	
	$userName=isset($_REQUEST['user_name'])?$_REQUEST['user_name']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
}

function setValuesToForm(){
	global $userName;
	global $password;
	
	$userName=formatDisplayText($userName);
	$password=formatDisplayText($password);
}

function validateForm(){
	global $userName;
	global $password;
	
	$err = "";
	$preMsg = "";
    $postMsg = "<br/>";

    if(($userName=="")||(!hasPHPCode($userName))){
    $err.=$preMsg."Please enter a valid User name.".$postMsg;
    }else if(($password=="")||(!hasPHPCode($password))){
    $err.=$preMsg."Please enter a valid Password.".$postMsg;
    }
	return $err;
}
/*****************************Page level function ends****************************************************************/
?>