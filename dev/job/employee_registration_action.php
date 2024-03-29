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
		$employee=addEmployee($name,$email,encryptPassword($password),$mobile,$phone,$countryId,$experienceId,$skills,$industryId,$qualificationId,$employeeCode);
		if($employee!=0) $displayMessage="Details inserted Successfully";
		else $displayMessage="Failed to insert details. Please try again.";
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$qualificationList=listAllQualification();
	$industryList=listAllInstries();
	$experienceIdYear=listExperienceYear();
}else{
	getValuesFromForm();
	setValuesToForm();
	$countryList=listAllCountries();
	$qualificationList=listAllQualification();
	$industryList=listAllInstries();
	$experienceIdYear=listExperienceYear();
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $email;
	global $password;
	global $name;
	global $confirmPassword;
	global $mobile;
	global $phone;
	global $countryId;
	global $experienceId;
	global $skills;
	global $industryId;
	global $qualificationId;
	global $employeeCode;
	
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
	$confirmPassword=isset($_REQUEST['confirmPassword'])?$_REQUEST['confirmPassword']:"";
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:"";
	$mobile=isset($_REQUEST['mobile'])?$_REQUEST['mobile']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$countryId=isset($_REQUEST['country'])?$_REQUEST['country']:"";
	$experienceId=isset($_REQUEST['experience'])?$_REQUEST['experience']:"";
	$skills=isset($_REQUEST['skills'])?$_REQUEST['skills']:"";
	$industryId=isset($_REQUEST['industry'])?$_REQUEST['industry']:"";
	$qualificationId=isset($_REQUEST['qualification'])?$_REQUEST['qualification']:"";
	$employeeCode='EE_'.random_gen(4);
}

function setValuesToForm(){
	global $email;
	global $password;
	global $name;
	global $confirmPassword;
	global $mobile;
	global $phone;
	global $countryId;
	global $experienceId;
	global $skills;
	global $industryId;
	global $qualificationId;
	
	$email=formatDisplayText($email);
	$password=formatDisplayText($password);
	$name=formatDisplayText($name);
	$confirmPassword=formatDisplayText($confirmPassword);
	$mobile=formatDisplayText($mobile);
	$phone=formatDisplayText($phone);
	$countryId=formatDisplayText($countryId);
	$experienceId=formatDisplayText($experienceId);
	$skills=formatDisplayText($skills);
	$industryId=formatDisplayText($industryId);
	$qualificationId=formatDisplayText($qualificationId);
}

function validateForm(){
	global $email;
	global $password;
	global $name;
	global $confirmPassword;
	global $mobile;
	global $phone;
	global $countryId;
	global $experienceId;
	global $skills;
	global $industryId;
	global $qualificationId;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($name=="")||(!hasPHPCode($name))){
		$err.=$preMsg."Enter valid Name.".$postMsg;
	}else if(($email=="")||(!hasPHPCode($email))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($password=="")||(!hasPHPCode($password))){
		$err.=$preMsg."Enter valid Password.".$postMsg;
	}else if(($confirmPassword=="")||(!hasPHPCode($confirmPassword))){
		$err.=$preMsg."Enter valid Confirm Password.".$postMsg;
	}else if($password!=$confirmPassword){
		$err.=$preMsg."Password Mismatch.".$postMsg;
	}else if(($mobile=="")||(!hasPHPCode($mobile))){
		$err.=$preMsg."Enter valid mobile number.".$postMsg;
	}else if(!isNumeric($mobile)){
		$err.=$preMsg."Enter valid mobile number.".$postMsg;
	}else if(!hasPHPCode($phone)){
		$err.=$preMsg."Enter valid Phone number.".$postMsg;
	}else if(!hasPHPCode($countryId)){
		$err.=$preMsg."Enter valid Country.".$postMsg;
	}else if(($experienceId=="")||(!hasPHPCode($experienceId))){
		$err.=$preMsg."Enter valid entry for Experience.".$postMsg;
	}else if(!hasPHPCode($skills)){
		$err.=$preMsg."Enter valid entry for Key Skills.".$postMsg;
	}else if(!hasPHPCode($industryId)){
		$err.=$preMsg."Enter valid entry for Current Industry.".$postMsg;
	}else if((!hasPHPCode($qualificationId))||($qualificationId=="-1")){
		$err.=$preMsg."Enter valid entry for Qualification.".$postMsg;
	}return $err;
}
/******************************************* Page level functions ends ********************************************************/


?>