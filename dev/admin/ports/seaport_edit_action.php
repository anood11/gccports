<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;

$displayMessage = "";

/******************************************* Control flow starts **************************************************************/
if(isset($_REQUEST['btnUpdate'])){
    getValuesFromForm();
    $displayMessage=validateForm();
	if($displayMessage==""){
		if($id==0){
			$add=addSeaportDetails($seaportName,$seaportCountry,$code,$longitude,$latitude);
			if($add!=0) $displayMessage="Data added successfully";
			else $displayMessage="Unable to add data. Please try again";
		}else{
			$update=updateSeaportDetails($seaportName,$seaportCountry,$code,$longitude,$latitude,$id);
			if($update!=0) $displayMessage="Data updated successfully";
			else $displayMessage="Unable to update data. Please try again";
		}
		
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}else{
	//Default Event
	getValuesFromForm();
	$countryList=listAllCountries();
	assignDBValuesToForm();
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
	setValuesToForm();
}
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/*
 * Function to get values from form
 */
function getValuesFromForm(){    
    global $seaportName;
	global $seaportCountry;
	global $code;
	global $longitude;
	global $latitude;
	global $id;
	
	$seaportName=isset($_REQUEST['name'])?$_REQUEST['name']:"";
	$seaportCountry=isset($_REQUEST['country'])?$_REQUEST['country']:"";
	$code=isset($_REQUEST['code'])?$_REQUEST['code']:"";
	$longitude=isset($_REQUEST['longitude'])?$_REQUEST['longitude']:"";
	$latitude=isset($_REQUEST['latitude'])?$_REQUEST['latitude']:"";
	$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
}
/*
 * Function to assign DB values to form
 */
function assignDBValuesToForm(){
	global $seaportName;
	global $seaportCountry;
	global $code;
	global $longitude;
	global $latitude;
	global $id;
	global $db;
	
	$seaportDetails=getSeaportDetails($id);
	$rowRes=$db->sql_fetchrow($seaportDetails);
	$seaportName=$rowRes['seaportName'];
	$seaportCountry=$rowRes['country'];
	$code=$rowRes['code'];
	$longitude=$rowRes['longitude'];
	$latitude=$rowRes['latitude'];
}
/*
 * Function to set values to form
 */
 function setValuesToForm(){
 	global $seaportName;
	global $seaportCountry;
	global $code;
	global $longitude;
	global $latitude;
	global $id;
	
	$seaportName=formatDisplayText($seaportName);
	$seaportCountry=formatDisplayText($seaportCountry);
	$code=formatDisplayText($code);
	$longitude=formatDisplayText($longitude); 
	$latitude=formatDisplayText($latitude);	
 }
 /*
  * Function to set values to form
  */
 function validateForm(){
 	global $seaportName;
	global $seaportCountry;
	global $code;
	global $longitude;
	global $latitude;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($seaportName=="")||(!hasPHPCode($seaportName))){
		$err.=$preMsg."Enter valid Seaport name.".$postMsg;
	}else if(($seaportCountry=="")||(!hasPHPCode($seaportCountry))){
		$err.=$preMsg."Enter valid Country.".$postMsg;
	}else if(($code=="")||(!hasPHPCode($code))){
		$err.=$preMsg."Enter valid Seaport Code.".$postMsg;
	}else if(($longitude=="")||(!hasPHPCode($longitude))){
		$err.=$preMsg."Enter valid Longitude.".$postMsg;
	}else if(($latitude=="")||(!hasPHPCode($latitude))){
		$err.=$preMsg."Enter valid Latitude.".$postMsg;
	}
	return $err;   	
 }
/******************************************* Page level functions ends ********************************************************/
?>