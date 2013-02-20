<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $display_message;
global $page_limit;

$display_message = "";
$start_row = 0;

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['delId'])){
    getValuesFromForm();
    $delete_id=deleteNews($news_id);
    if($delete_id==1){
        $display_message="News successfully deleted";
    }else{
        $display_message="Failed to delete News";
    }
	$page_count=getCountPages();
	$start_row=getPageStart();
	$news_list = getNewsList($start_row,$page_limit);
}else{
    getValuesFromForm();
    $page_count=getCountPages();
	$start_row=getPageStart();
    $news_list = getNewsList($start_row,$page_limit);
}

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts *****************************************************/
/*
 * Function to get values from form
 */
function getValuesFromForm(){

    global $news_id;
	global $page;

    $news_id=isset($_REQUEST['delId'])?$_REQUEST['delId']:0;
    $page=isset($_REQUEST['page'])?$_REQUEST['page']:1;
	if($page==1)$page=isset($_REQUEST['pageNumber'])?$_REQUEST['pageNumber']:1;
 }
/*
 * Function to implement pagination
 */
function getPageStart(){
    
    global $page_limit;
    global $page; 
	
	$page_start=($page*$page_limit)-$page_limit;
    return $page_start;
}
/*
 * Function to get row count
 */
function getCountPages(){
    
    global $page_limit;
   
    $count=getTotalNews();
    $pages=round($count/$page_limit);
      if($count > ($pages*$page_limit))
      $pages+=1;
      if($pages<1)$pages=1;
    return $pages;
}

/******************************************* Page level functions ends *******************************************************/
?>