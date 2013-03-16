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
		$employee=addJobEmployer($company,$email,$phone,$requirement,$experienceId,$salary,$country,$companyProfile,$jobCode,$employerId);
		if($employee!=0) $displayMessage="Details inserted Successfully";
		else $displayMessage="Failed to insert details. Please try again.";
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$experienceYear=listExperienceYear();
}else{
	getValuesFromForm();
	if($employerId==0){
		header("Location:login.php?msg=loginFailedEmployer");
	}else{
		setValuesToForm();
		$countryList=listAllCountries();
		$experienceYear=listExperienceYear();		
	}
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $company;
	global $email;
	global $phone;
	global $requirement;
	global $experienceId;
	global $salary;
	global $country;
	global $companyProfile;
	global $jobCode;
	global $employerId;
		
	$company=isset($_REQUEST['company'])?$_REQUEST['company']:"";
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$requirement=isset($_REQUEST['requirement'])?$_REQUEST['requirement']:"";
	$experienceId=isset($_REQUEST['experienceId'])?$_REQUEST['experienceId']:"";
	$salary=isset($_REQUEST['salary'])?$_REQUEST['salary']:"";
	$country=isset($_REQUEST['countryId'])?$_REQUEST['countryId']:"";
	$companyProfile=isset($_REQUEST['companyProfile'])?$_REQUEST['companyProfile']:"";
	$jobCode='EJ_'.random_gen(4);
	$employerId=isset($_SESSION['loggedUser'])?$_SESSION['loggedUser']:0;
}

function setValuesToForm(){
	global $company;
	global $email;
	global $phone;
	global $requirement;
	global $experienceId;
	global $salary;
	global $country;
	global $companyProfile;
	
	$company=formatDisplayText($company);
	$email=formatDisplayText($email);
	$phone=formatDisplayText($phone);
	$requirement=formatDisplayText($requirement);
	$experienceId=formatDisplayText($experienceId);
	$salary=formatDisplayText($salary);
	$country=formatDisplayText($country);
	$companyProfile=formatDisplayText($companyProfile);
}

function validateForm(){
	global $company;
	global $email;
	global $phone;
	global $requirement;
	global $experienceId;
	global $salary;
	global $country;
	global $companyProfile;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($company=="")||(!hasPHPCode($company))){
		$err.=$preMsg."Enter valid Company name.".$postMsg;
	}else if(($email=="")||(!hasPHPCode($email))){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(!isEmail($email)){
		$err.=$preMsg."Enter valid Email ID.".$postMsg;
	}else if(($phone=="")||(!hasPHPCode($phone))||(!isNumeric($phone))){
		$err.=$preMsg."Enter valid Phone.".$postMsg;
	}else if(($requirement=="")||(!hasPHPCode($requirement))){
		$err.=$preMsg."Enter valid Job requirement.".$postMsg;
	}else if(($experienceId=="")||(!hasPHPCode($experienceId))){
		$err.=$preMsg."Enter valid mobile number.".$postMsg;
	}else if(!hasPHPCode($salary)){
		$err.=$preMsg."Enter valid Salry amount.".$postMsg;
	}else if(!hasPHPCode($phone)){
		$err.=$preMsg."Enter valid Phone number.".$postMsg;
	}else if(!hasPHPCode($country)){
		$err.=$preMsg."Enter valid Country.".$postMsg;
	}else if(($companyProfile=="")||(!hasPHPCode($companyProfile))){
		$err.=$preMsg."Enter valid entry Company profile.".$postMsg;
	}return $err;
}
/******************************************* Page level functions ends ********************************************************/
?>