<?php
/******************************************* Initialise/Declarefvariables *****************************************************/
global $displayMessage;
global $pageLimit;

$displayMessage = "";
$startRow = 0;

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['deactivateId'])){
    getValuesFromForm();
    $deleteId=changeTrackTraceStatus($deActiId,0);
    if($deleteId==1){
        $displayMessage="Track and trace successfully deactivated";
    }else{
        $displayMessage="Failed to deactivate Track and trace";
    }
	$pageCount=getCountPages();
	$startRow=getPageStart();
	$tracktrace = listTrackTrace($startRow,$pageLimit);
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
} else if(isset($_REQUEST['activateId'])){
	getValuesFromForm();
    $deleteId=changeTrackTraceStatus($actId,1);
    if($deleteId==1){
        $displayMessage="Track and trace successfully activated";
    }else{
        $displayMessage="Failed to activate Track and trace";
    }
	$pageCount=getCountPages();
	$startRow=getPageStart();
	$tracktrace = listTrackTrace($startRow,$pageLimit);
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
} else{
    getValuesFromForm();
    $pageCount=getCountPages();
	$startRow=getPageStart();
    $tracktrace = listTrackTrace($startRow,$pageLimit);
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts *****************************************************/
/*
 * Function to get values from form
 */
function getValuesFromForm(){

    global $actId;
	global $deActiId;
	global $page;

    $actId=isset($_REQUEST['activateId'])?$_REQUEST['activateId']:0;
	$deActiId=isset($_REQUEST['deactivateId'])?$_REQUEST['deactivateId']:0;
    $page=isset($_REQUEST['page'])?$_REQUEST['page']:1;
	if($page==1)$page=isset($_REQUEST['pageNumber'])?$_REQUEST['pageNumber']:1;
 }
/*
 * Function to implement pagination
 */
function getPageStart(){
    
    global $pageLimit;
    global $page; 
	
	$pageStart=($page*$pageLimit)-$pageLimit;
    return $pageStart;
}
/*
 * Function to get row count
 */
function getCountPages(){
    
    global $pageLimit;
   
    $count=getTotalTrackTrace();
    $pages=round($count/$pageLimit);
      if($count > ($pages*$pageLimit))
      $pages+=1;
      if($pages<1)$pages=1;
    return $pages;
}

/******************************************* Page level functions ends *******************************************************/
?>