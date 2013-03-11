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
	$date=date("d-M-Y", strtotime($details['newsDate']));
	$date=explode('-',$date);
	if($date[0]==1) $newsDate=$date[1].' 1st, '.$date[2];
	else if($date[0]==2) $newsDate=$date[1].' 2nd, '.$date[2];
	else $newsDate=$date[1].' '.$date[0].'th, '.$date[2];
}
/******************************************* Page level functions ends ********************************************************/


?>