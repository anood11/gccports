<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getValuesFromForm();
setValuesToForm();
$newsDetails=getNewsDetails($newsId);
assignDBValuesToForm($newsDetails);
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getValuesFromForm(){
	global $newsId;
	
	$newsId=isset($_REQUEST['newsId'])?$_REQUEST['newsId']:0;
	if($newsId==0)$newsId=isset($_REQUEST['newsIds'])?$_REQUEST['newsIds']:0;
}

function setValuesToForm(){
	global $newsId;
	
	$newsId=formatDisplayText($newsId);
}

function assignDBValuesToForm($rsResult){
	global $newsHead;
	global $newsImg;
	global $newsMatter;
	global $newsDate;
	global $db;
	
	$details=$db->sql_fetchrow($rsResult);
	$newsHead=$details['newsHeading'];
	$newsImg=$details['newsImage'];
	$newsMatter=$details['newsMatter'];
	$newsDate=date("d-m-Y", strtotime($details['newsDate']));
}
/******************************************* Page level functions ends ********************************************************/


?>