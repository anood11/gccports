<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $pageLimit;

$displayMessage = "";
$startRow = 0;

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['delId'])){
    getValuesFromForm();
    $deleteId=deleteAirport($delId);
    if($deleteId==1){
        $displayMessage="Airport successfully deleted";
    }else{
        $displayMessage="Failed to delete Airport";
    }
	$pageCount=getCountPages();
	$startRow=getPageStart();
	$airportList = getAirportList($startRow,$pageLimit);
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}else{
    getValuesFromForm();
    $pageCount=getCountPages();
	$startRow=getPageStart();
    $airportList = getAirportList($startRow,$pageLimit);
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts *****************************************************/
/*
 * Function to get values from form
 */
function getValuesFromForm(){

    global $delId;
	global $page;

    $delId=isset($_REQUEST['delId'])?$_REQUEST['delId']:0;
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
   
    $count=getTotalAirports();
    $pages=round($count/$pageLimit);
      if($count > ($pages*$pageLimit))
      $pages+=1;
      if($pages<1)$pages=1;
    return $pages;
}

/******************************************* Page level functions ends *******************************************************/
?>