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
			$add=addAirportDetails($name,$code,$country,$countryab,$city);
			if($add!=0) $displayMessage="Data added successfully";
			else $displayMessage="Unable to add data. Please try again";
		}else{
			$update=updateAirportDetails($name,$code,$country,$countryab,$city,$id);
			if($update!=0) $displayMessage="Data updated successfully";
			else $displayMessage="Unable to update data. Please try again";
		}
		
	}
	setValuesToForm();
	$countryList=listAllCountries();
	$countryListAb=listAllCountries();
	$footerLeft=formatDisplayText(getFooter('left'));
	$footerRight=formatDisplayText(getFooter('right'));
}else{
	//Default Event
	getValuesFromForm();
	$countryList=listAllCountries();
	$countryListAb=listAllCountries();
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
    global $name;
	global $code;
	global $country;
	global $countryab;
	global $city;
	global $id;
	
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:"";
	$country=isset($_REQUEST['countryz'])?$_REQUEST['countryz']:"";
	$countryab=isset($_REQUEST['countryab'])?$_REQUEST['countryab']:"";
	$code=isset($_REQUEST['code'])?$_REQUEST['code']:"";
	$city=isset($_REQUEST['city'])?$_REQUEST['city']:"";
	$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
}
/*
 * Function to assign DB values to form
 */
function assignDBValuesToForm(){
	global $name;
	global $code;
	global $country;
	global $countryab;
	global $city;
	global $id;
	global $db;
	
	$airportDetails=getAirportDetails($id);
	$rowRes=$db->sql_fetchrow($airportDetails);
	$name=$rowRes['airportName'];
	$code=$rowRes['airportCode'];
	$country=$rowRes['country'];
	$countryab=$rowRes['countryAbbreviation'];
	$city=$rowRes['cityName'];
}
/*
 * Function to set values to form
 */
 function setValuesToForm(){
 	global $name;
	global $code;
	global $country;
	global $countryab;
	global $city;
	global $id;
	
	$name=formatDisplayText($name);
	$country=formatDisplayText($country);
	$code=formatDisplayText($code);
	$countryab=formatDisplayText($countryab); 
	$city=formatDisplayText($city);	
	$id=formatDisplayText($id);	
 }
 /*
  * Function to set values to form
  */
 function validateForm(){
 	global $name;
	global $code;
	global $country;
	global $countryab;
	global $city;
	
	$err = "";
	$preMsg = "<br>";
	$postMsg = "</br>";

	if(($name=="")||(!hasPHPCode($name))){
		$err.=$preMsg."Enter valid Airport name.".$postMsg;
	}else if(($code=="")||(!hasPHPCode($code))){
		$err.=$preMsg."Enter valid Airport Code.".$postMsg;
	}else if(($country=="")||(!hasPHPCode($country))){
		$err.=$preMsg."Enter valid Country.".$postMsg;
	}else if(($countryab=="")||(!hasPHPCode($countryab))){
		$err.=$preMsg."Enter valid Country abbreviation.".$postMsg;
	}else if(($city=="")||(!hasPHPCode($city))){
		$err.=$preMsg."Enter valid City.".$postMsg;
	}
	return $err;   	
 }
/******************************************* Page level functions ends ********************************************************/
?>