<?php
/*****************************Declare/ Initialise variables************************************************************/
global $display_message;

$display_message="";
/*****************************Declaration ends*************************************************************************/
/*****************************Control flow starts**********************************************************************/
if(isset($_REQUEST['btnLogin'])){
	getValuesFromForm();
	$display_message=validateForm();
	if($display_message==""){
		$user_id=checkUserExists($user_name,encryptPassword($password));
		if($user_id>=1){
			$_SESSION['admin']=$user_id;
			header("Location:".$http_path_admin."user_account/admin.php");
		}else{
			$display_message="Invalid login Credentials";
		}
	}setValuesToForm();
}else if(isset($_REQUEST['signout'])){
	session_destroy();
	header("Location:".$http_path_admin."user_account/login.php");
}else{
	getValuesFromForm();
	setValuesToForm();
}
/*****************************Control flow ends************************************************************************/
/*****************************Page level function starts***************************************************************/
function getValuesFromForm(){
	global $user_name;
	global $password;
	
	$user_name=isset($_REQUEST['user_name'])?$_REQUEST['user_name']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
}

function setValuesToForm(){
	global $user_name;
	global $password;
	
	$user_name=formatDisplayText($user_name);
	$password=formatDisplayText($password);
}

function validateForm(){
	global $user_name;
	global $password;
	
	$err = "";
	$pre_msg = "";
    $post_msg = "<br/>";

    if(($user_name=="")||(!hasPHPCode($user_name))){
    $err.=$pre_msg."Please enter a valid User name.".$post_msg;
    }else if(($password=="")||(!hasPHPCode($password))){
    $err.=$pre_msg."Please enter a valid Password.".$post_msg;
    }
	return $err;
}
/*****************************Page level function ends****************************************************************/
?>