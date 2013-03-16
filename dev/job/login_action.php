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
		$loginUser=checklogin($email,encryptPassword($password));
		if($db->sql_numrows($loginUser)<=0) $displayMessage="Invalid Username or Password";
		else{
			$rowRes=$db->sql_fetchrow($loginUser);
			$_SESSION['loggedUser']=$rowRes['id'];
			/*if($rowRes['type']==1)$displayMessage="Successful login as Employee";
			else if($rowRes['type']==2)$displayMessage="Successful login as Employer";*/
			header("Location:login.php?msg=loginSuccess&type=".$rowRes['type']);
			
		}
	}$displayMessage=getDisplayMessages();
	setValuesToForm();
}else if(isset($_REQUEST['logout'])){
	session_start();
    session_destroy();
	header("Location:login.php?msg=logoutSuccess");	
}else{
	if(isset($_REQUEST['loginFailedEmployer']))$displayMessage="Please login as Employer to add Jobs";
	$displayMessage=getDisplayMessages();
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
function getDisplayMessages(){
	
	$err="";
	$user="User";
	$msg=isset($_REQUEST['msg'])?$_REQUEST['msg']:"";
	$type=isset($_REQUEST['type'])?$_REQUEST['type']:"";
	if($type==1) $user='Employee';
	else if($type==2) $user='Employer';
	switch($msg){
		case 'logoutSuccess': $err="Logout successful";break;
		case 'loginSuccess': $err="Successfully logger in as ".$user;break;
		case 'loginFailedEmployer':$err="Login as Employer to add Job";break;
	}
	return $err;
}
/******************************************* Page level functions ends ********************************************************/


?>