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
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$qualificationList=listAllQualification();
	$industryList=listAllInstries();
}else{
	getValuesFromForm();
	setValuesToForm();
	$countryList=listAllCountries();
	$qualificationList=listAllQualification();
	$industryList=listAllInstries();
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
	global $experience;
	global $skills;
	global $industryId;
	global $qualificationId;
	
	$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
	$password=isset($_REQUEST['password'])?$_REQUEST['password']:"";
	$confirmPassword=isset($_REQUEST['confirmPassword'])?$_REQUEST['confirmPassword']:"";
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:"";
	$mobile=isset($_REQUEST['mobile'])?$_REQUEST['mobile']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$countryId=isset($_REQUEST['country'])?$_REQUEST['country']:"";
	$experience=isset($_REQUEST['experience'])?$_REQUEST['experience']:"";
	$skills=isset($_REQUEST['skills'])?$_REQUEST['skills']:"";
	$industryId=isset($_REQUEST['industry'])?$_REQUEST['industry']:"";
	$qualificationId=isset($_REQUEST['qualification'])?$_REQUEST['qualification']:"";
}

function setValuesToForm(){
	global $email;
	global $password;
	global $name;
	global $confirmPassword;
	global $mobile;
	global $phone;
	global $countryId;
	global $experience;
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
	$experience=formatDisplayText($experience);
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
	global $experience;
	global $skills;
	global $industryId;
	global $qualificationId;
	
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