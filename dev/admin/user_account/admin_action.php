<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $display_message;

$display_message = "";

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnUpdate'])){
    getValuesFromForm();
    $display_message=validateForm();
	if($display_message==""){
		$user_count=getUserCount();
		if($user_count==0){
			$insert_id=addAdminSettings($user_name,encryptPassword($password),$email_id);
			if($insert_id==1){
				$display_message="Settings added Successfully";	
			}else{
				$display_message="Unable to add details. Please try again later.";
				setValuesToForm();	
			}
		}else{
			$update_id=updateAdminSettings($user_name,encryptPassword($password),$email_id);
			if($update_id==1){
				$display_message="Update Successful";
			}else{
				$display_message="Unable to update. Please try again later.";
				setValuesToForm();
			}
		}
		
	}
	setValuesToForm();

}else{
	//Default Event
	getValuesFromForm();
	$admin_details=getAdminDetails();
	assignDBValuesToForm($admin_details);
	setValuesToForm();
}
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/*
 * Function to get values from form
 */
function getValuesFromForm(){    
    global $user_name;
	global $password;
	global $confirm_password;
	global $email_id;
	
	$user_name=isset($_REQUEST['user_name'])?$_REQUEST['user_name']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
	$confirm_password=isset($_REQUEST['confirm_password'])?$_REQUEST['confirm_password']:"";
	$email_id=isset($_REQUEST['email_id'])?$_REQUEST['email_id']:"";
}
/*
 * Function to assign DB values to form
 */
function assignDBValuesToForm($admin_details){
	global $user_name;
	global $password;
	global $confirm_password;
	global $email_id;
	global $db;
	
	$rowRes=$db->sql_fetchrow($admin_details);
	$user_name=$rowRes['userName'];
	$password=decryptPassword($rowRes['password']);
	$confirm_password=decryptPassword($rowRes['password']);
	$email_id=$rowRes['email'];
}
/*
 * Function to set values to form
 */
 function setValuesToForm(){
 	global $user_name;
	global $password;
	global $confirm_password;
	global $email_id;
	
	$user_name=formatDisplayText($user_name);
	$password=formatDisplayText($password);
	$confirm_password=formatDisplayText($confirm_password);
	$email_id=formatDisplayText($email_id); 	
 }
 /*
  * Function to set values to form
  */
 function validateForm(){
 	global $user_name;
	global $password;
	global $confirm_password;
	global $email_id;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($user_name=="")||(!hasPHPCode($user_name))){
		$err.=$preMsg."Enter valid Username.".$postMsg;
	}else if(($email_id=="")||(!isEmail($email_id))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($password=="")||(!hasPHPCode($password))){
		$err.=$preMsg."Enter valid Password.".$postMsg;
	}else if($password!=$confirm_password){
		$err.=$preMsg."Password mis-match.".$postMsg;
	} 
	return $err;   	
 }
/******************************************* Page level functions ends ********************************************************/
?>