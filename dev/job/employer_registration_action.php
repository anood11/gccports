 <?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnRegister'])){
	getValuesFromForm();
	$displayMessage=validateForm();
	if($displayMessage==""){
		$employer=addEmployer($email,encryptPassword($password),$company,$industryId,$phone,$address,$countryId,$contactPerson,$employerCode);
		if($employer!=0) $displayMessage="Details inserted Successfully";
		else $displayMessage="Failed to insert details. Please try again.";
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$industryList=listAllInstries();
}else{
	getValuesFromForm();
	setValuesToForm();
	$countryList=listAllCountries();
	$industryList=listAllInstries();
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $email;
	global $password;
	global $confirmPassword;
	global $company;
	global $phone;
	global $countryId;
	global $industryId;
	global $contactPerson;
	global $address;
	global $employerCode;
	
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
	$confirmPassword=isset($_REQUEST['confirmPassword'])?$_REQUEST['confirmPassword']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$countryId=isset($_REQUEST['country'])?$_REQUEST['country']:"";
	$industryId=isset($_REQUEST['industry'])?$_REQUEST['industry']:"";
	$company=isset($_REQUEST['company'])?$_REQUEST['company']:"";
	$contactPerson=isset($_REQUEST['contactPerson'])?$_REQUEST['contactPerson']:"";
	$address=isset($_REQUEST['address'])?$_REQUEST['address']:"";
	$employerCode='ER_'.random_gen(4);
}

function setValuesToForm(){
	global $email;
	global $password;
	global $confirmPassword;
	global $company;
	global $phone;
	global $countryId;
	global $industryId;
	global $contactPerson;
	global $address;
	global $employerCode;
	
	$email=formatDisplayText($email);
	$password=formatDisplayText($password);
	$company=formatDisplayText($company);
	$confirmPassword=formatDisplayText($confirmPassword);
	$phone=formatDisplayText($phone);
	$countryId=formatDisplayText($countryId);
	$contactPerson=formatDisplayText($contactPerson);
	$address=formatDisplayText($address);
	$industryId=formatDisplayText($industryId);
	$employerCode=formatDisplayText($employerCode);
}

function validateForm(){
	global $email;
	global $password;
	global $confirmPassword;
	global $company;
	global $phone;
	global $countryId;
	global $industryId;
	global $contactPerson;
	global $address;
	global $employerCode;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	 if(($email=="")||(!hasPHPCode($email))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($password=="")||(!hasPHPCode($password))){
		$err.=$preMsg."Enter valid Password.".$postMsg;
	}else if(($confirmPassword=="")||(!hasPHPCode($confirmPassword))){
		$err.=$preMsg."Enter valid Confirm Password.".$postMsg;
	}else if($password!=$confirmPassword){
		$err.=$preMsg."Password Mismatch.".$postMsg;
	}else if((!hasPHPCode($company))||($company=="")){
		$err.=$preMsg."Enter valid Company name.".$postMsg;
	}else if((!hasPHPCode($industryId))||($industryId=="-1")){
		$err.=$preMsg."Enter valid entry for Industry.".$postMsg;
	}else if(($address=="")||(!hasPHPCode($address))){
		$err.=$preMsg."Enter valid Address.".$postMsg;
	}else if((!hasPHPCode($countryId))||($countryId=="-1")){
		$err.=$preMsg."Enter valid Country.".$postMsg;
	}else if(($phone=="")||(!hasPHPCode($phone))||(!isNumeric($phone))){
		$err.=$preMsg."Enter valid entry for Contact Number.".$postMsg;
	}else if((!hasPHPCode($contactPerson))||($contactPerson=="")){
		$err.=$preMsg."Enter valid entry for Contact person.".$postMsg;
	}return $err;
}
/******************************************* Page level functions ends ********************************************************/


?>