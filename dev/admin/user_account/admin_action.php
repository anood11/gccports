<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;

$displayMessage = "";

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnUpdate'])){
    getValuesFromForm();
    $displayMessage=validateForm();
	if($displayMessage==""){
		$userCount=getUserCount();
		if($userCount==0){
			$insertId=addAdminSettings($userName,encryptPassword($password),$emailId);
			if($insertId==1){
				$displayMessage="Settings added Successfully";	
			}else{
				$displayMessage="Unable to add details. Please try again later.";
				setValuesToForm();	
			}
		}else{
			$updateId=updateAdminSettings($userName,encryptPassword($password),$emailId);
			if($updateId==1){
				$displayMessage="Update Successful";
			}else{
				$displayMessage="Unable to update. Please try again later.";
				setValuesToForm();
			}
		}
		
	}
	setValuesToForm();

}else{
	//Default Event
	getValuesFromForm();
	$adminDetails=getAdminDetails();
	assignDBValuesToForm($adminDetails);
	setValuesToForm();
}
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/*
 * Function to get values from form
 */
function getValuesFromForm(){    
    global $userName;
	global $password;
	global $confirmPassword;
	global $emailId;
	
	$userName=isset($_REQUEST['user_name'])?$_REQUEST['user_name']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
	$confirmPassword=isset($_REQUEST['confirm_password'])?$_REQUEST['confirm_password']:"";
	$emailId=isset($_REQUEST['email_id'])?$_REQUEST['email_id']:"";
}
/*
 * Function to assign DB values to form
 */
function assignDBValuesToForm($adminDetails){
	global $userName;
	global $password;
	global $confirmPassword;
	global $emailId;
	global $db;
	
	$rowRes=$db->sql_fetchrow($adminDetails);
	$userName=$rowRes['userName'];
	$password=decryptPassword($rowRes['password']);
	$confirmPassword=decryptPassword($rowRes['password']);
	$emailId=$rowRes['email'];
}
/*
 * Function to set values to form
 */
 function setValuesToForm(){
 	global $userName;
	global $password;
	global $confirmPassword;
	global $emailId;
	
	$userName=formatDisplayText($userName);
	$password=formatDisplayText($password);
	$confirmPassword=formatDisplayText($confirmPassword);
	$emailId=formatDisplayText($emailId); 	
 }
 /*
  * Function to set values to form
  */
 function validateForm(){
 	global $userName;
	global $password;
	global $confirmPassword;
	global $emailId;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($userName=="")||(!hasPHPCode($userName))){
		$err.=$preMsg."Enter valid Username.".$postMsg;
	}else if(($emailId=="")||(!isEmail($emailId))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($password=="")||(!hasPHPCode($password))){
		$err.=$preMsg."Enter valid Password.".$postMsg;
	}else if($password!=$confirmPassword){
		$err.=$preMsg."Password mis-match.".$postMsg;
	} 
	return $err;   	
 }
/******************************************* Page level functions ends ********************************************************/
?>