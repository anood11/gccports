<?php
/*********************************************** Initialise/ Declare variables ************************************************/
global $display_message;

$display_message="";
/*********************************************** Control flow starts **********************************************************/
if(isset($_REQUEST['btnSubmit'])){
	getValuesFromForm();
	$display_message=validateForm();
	if($display_message==""){
		$update=updateFooter($leftFooter,$rightFooter);
		if($update==2) $display_message="Footer Updated successfully";
		else $display_message="Unable to update. Please try again later";
	}
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));	
}else{
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}
/*********************************************** Control flow ends ************************************************************/
/*********************************************** Page level functions start ***************************************************/
function getValuesFromForm(){
	global $leftFooter;
	global $rightFooter;
	
	$leftFooter=isset($_REQUEST['footerLeft'])?$_REQUEST['footerLeft']:"";
	$rightFooter=isset($_REQUEST['footerRight'])?$_REQUEST['footerRight']:"";
}

function validateForm(){
	global $leftFooter;
	global $rightFooter;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";
	
	if((!hasPHPCode($leftFooter))){
		$err.=$preMsg."Enter valid text for Left footer.".$postMsg;
	}else if((!hasPHPCode($rightFooter))){
		$err.=$preMsg."Enter valid text for Right footer.".$postMsg;
	}
	return $err;
}
/*********************************************** Page level functions start ***************************************************/
?>