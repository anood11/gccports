<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $pageLimit;

$displayMessage = "";
$startRow = 0;

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['delId'])){
    getValuesFromForm();
    $deleteId=deleteSubscribers($userId);
    if($deleteId==1){
        $displayMessage="Subscriber successfully deleted";
    }else{
        $displayMessage="Failed to delete Subscriber";
    }
	$pageCount=getCountPages();
	$startRow=getPageStart();
	$subscribersList = getSubscribersList($startRow,$pageLimit);
}else{
    getValuesFromForm();
    $pageCount=getCountPages();
	$startRow=getPageStart();
    $subscribersList = getSubscribersList($startRow,$pageLimit);
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts *****************************************************/
/*
 * Function to get values from form
 */
function getValuesFromForm(){

    global $userId;
	global $page;

    $userId=isset($_REQUEST['delId'])?$_REQUEST['delId']:0;
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
   
    $count=getTotalSubscribers();
    $pages=round($count/$pageLimit);
      if($count > ($pages*$pageLimit))
      $pages+=1;
      if($pages<1)$pages=1;
    return $pages;
}

/******************************************* Page level functions ends *******************************************************/
?>