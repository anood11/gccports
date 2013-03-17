<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $company;
global $requirement;
global $experience;
global $salary;
global $country;
global $profile;
global $industry;
global $designation;
global $code;
global $date;
global $jobId;
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getValuesFromForm();
assignDBValuesToForm();
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $jobId;
	
	$jobId=(isset($_REQUEST['id']))?trim($_REQUEST['id']):"0";
}
function assignDBValuesToForm(){
	global $company;
	global $requirement;
	global $experience;
	global $salary;
	global $country;
	global $profile;
	global $industry;
	global $designation;
	global $code;
	global $date;
	global $jobId;
	global $db;
	
	$jobDetails=getJobDetails($jobId);
	$details=$db->sql_fetchrow($jobDetails);
	$company=$details['company'];
	$requirement=$details['requirement'];
	$experience=$details['experienceYear'];
	$salary=$details['salary'];
	$country=$details['country'];
	$profile=$details['profile'];
	$industry=$details['industry'];
	$designation=$details['designation'];
	$code=$details['jobCode'];
	$date=$details['createdDate'];
}
/******************************************* Page level functions ends ********************************************************/
?>   
