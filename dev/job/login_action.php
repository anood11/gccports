 <?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnLogin'])){
	getValuesFromForm();
	$displayMessage=validateForm();
	if($displayMessage==""){
		$login=checklogin($email,encryptPassword($password));
		if($login==1) $displayMessage="Successful login as Employee";
		else if($login==2) $displayMessage="Successful login as Employer";
		else $displayMessage="Invalid Username or Password";
	}setValuesToForm();
}else{
	getValuesFromForm();
	setValuesToForm();
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $email;
	global $password;
	
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
}

function setValuesToForm(){
	global $email;
	global $password;
	
	$email=formatDisplayText($email);
	$password=formatDisplayText($password);
}

function validateForm(){
	global $email;
	global $password;
	global $db;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($email=="")||(!hasPHPCode($email))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($password=="")||(!hasPHPCode($password))){
		$err.=$preMsg."Enter valid Password.".$postMsg;
	}return $err;
}
/******************************************* Page level functions ends ********************************************************/


?>