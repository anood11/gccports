<?php
/*********************************************** Initialise/ Declare variables ************************************************/
global $display_message;
global $newsId;

$display_message="";
$newsId=0;
/*********************************************** Control flow starts **********************************************************/

if(isset($_REQUEST['btnSaveNews'])){
	getValuesFromForm();
	$display_message=validateForm();
	if($display_message==""){
		if($newsId==0){
			$newsId=addNews($newsHead,$newsMatter,$newsDate,$newsCategory,$newsActive);
			if($newsId==1) {
				saveImages();
				$display_message="News added Successfully";
				}
			else $display_message="Unable to add news";
			$categoryList=getNewsCategories();
		}else{
			$update=updateNews($newsHead,$newsMatter,$newsDate,$newsCategory,$newsActive,$newsId);
			if($update==1) $display_message="Update Successfull";
			else $display_message="Unable to update";
			$categoryList=getNewsCategories();
		}
	}
	$categoryList=getNewsCategories();
}else{
	getValuesFromForm();
	$categoryList=getNewsCategories();
	$newsDetails=getNewsDetails($newsId);
	assignDBValuesToForm($newsDetails);
	setValuesToForm();
}
/*********************************************** Control flow ends ************************************************************/
/*********************************************** Page level functions start ***************************************************/
function getValuesFromForm(){
	global $newsId;
	global $newsHead;
	global $newsMatter;
	global $newsDate;
	global $newsCategory;
	global $newsImage;
	global $newsActive;
	
	$newsId=isset($_REQUEST['newsId'])?$_REQUEST['newsId']:0;
	$newsHead=isset($_REQUEST['newsHead'])?$_REQUEST['newsHead']:0;
	$newsMatter=isset($_REQUEST['newsMatter'])?$_REQUEST['newsMatter']:0;
	$newsDate=isset($_REQUEST['newsDate'])?$_REQUEST['newsDate']:0;
	$newsCategory=isset($_REQUEST['newsCategory'])?$_REQUEST['newsCategory']:0;
	$newsImage=isset($_REQUEST['newsImage'])?$_REQUEST['newsImage']:0;
	$newsActive=isset($_REQUEST['activateNews'])?$_REQUEST['activateNews']:0;
}
function validateForm(){
	global $newsId;
	global $newsHead;
	global $newsMatter;
	global $newsDate;
	global $newsCategory;
	global $newsImage;
	global $newsActive;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	$check=explode('-',$newsDate);
	if(!hasPHPCode($newsId)){
		$err.=$preMsg."Enter valid News Id.".$postMsg;
	}else if(($newsHead=="")||(!hasPHPCode($newsHead))){
		$err.=$preMsg."Enter valid News Heading.".$postMsg;
	}else if(($newsMatter=="")||(!hasPHPCode($newsMatter))){
		$err.=$preMsg."Enter valid News Content.".$postMsg;
	}else if((!checkdate($check[1],$check[0],$check[2]))||(!hasPHPCode($newsDate))){
		$err.=$preMsg."Enter valid News Content.".$postMsg;
	}else if(!hasPHPCode($newsActive)){
		$err.=$preMsg."Enter valid News Status.".$postMsg;
	}else if(($newsCategory=='-1')||(!hasPHPCode($newsCategory))){
		$err.=$preMsg."Select valid News Category.".$postMsg;
	}
	return $err;
}
function setValuesToForm(){
	global $newsId;
	global $newsHead;
	global $newsMatter;
	global $newsDate;
	global $newsCategory;
	global $newsImage;
	global $newsActive;
	
	$newsId=formatDisplayText($newsId);
	$newsHead=formatDisplayText($newsHead);
	$newsMatter=formatDisplayText($newsMatter);
	$newsDate=formatDisplayText($newsDate);
	$newsCategory=formatDisplayText($newsCategory);
	$newsImage=formatDisplayText($newsImage);
	$newsActive=formatDisplayText($newsActive);
}
function assignDBValuesToForm($rsResult){
	global $newsId;
	global $newsHead;
	global $newsMatter;
	global $newsDate;
	global $newsCategory;
	global $newsImage;
	global $newsActive;
	global $db;
	
	$news=$db->sql_fetchrow($rsResult);
	$newsHead=$news['newsHeading'];
	$newsMatter=$news['newsMatter'];
	$newsImage=$news['newsImage'];
	$newsActive=$news['newsStatus'];
	$newsCategory=$news['newsCategoryId'];
	if($newsId!=0){
		$date=explode('-',$news['newsDate']);
		$newsDate=$date[2].'-'.$date[1].'-'.$date[0];
	}else $newsDate="";
	
	
}
function saveImages(){
    global $newsId;

    $err = "";
    $preMsg = "";
    $postMsg = "<br/>";

    $path = "../../resources/news_images/";
    $name = $_FILES['newsImage']['name'];

    $size = $_FILES['newsImage']['size'];
    $contentType=$_FILES['newsImage']['type'];
    $valid_formats=array("png","jpg");
    if($name!=""){
        if(strlen($name))
        {
            //list($txt, $ext) = explode(".", $name);
            $fileInfo = pathinfo($name);

            $ext = $fileInfo['extension'];
            $ext=strtolower($ext);
            if(in_array($ext,$valid_formats)) {
                $tmp = $_FILES['newsImage']['tmp_name'];
                if(copy($tmp, $path.$newsId.'.'.$ext)){
                    $resizeObj = new resize($path.$name);
                    $resizeObj -> saveImage($path.$name, 100);
                }
                else $err="Some error occured.Please try again.";
            }
            else $err="Only images are allowed";
        }
        else $err="Attach valid inages only";
    }
    return $err;
}
/*********************************************** Page level functions ends ****************************************************/

?>