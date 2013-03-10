<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
getSeaportKeys();
$airportDetails=getAssociationDetails($id);	
assignDBValuesToForm($airportDetails);
setValuesToForm();

/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/
function getSeaportKeys(){
	global $id;
		
	$id=(isset($_REQUEST['id']))?trim($_REQUEST['id']):0;
}
function assignDBValuesToForm($rsResult){
	global $company;
	global $address;
	global $country;
	global $phone;
	global $category;
	global $email;
	global $website;
	global $db;
	
	$row=$db->sql_fetchrow($rsResult);
	$company=$row['companyName'];
	$address=$row['address'];
	$country=$row['country'];
	$phone=$row['telephoneAndFax'];
	$category=$row['category'];
	$email=$row['email'];
	$website=$row['website'];
}
function setValuesToForm(){
	global $company;
	global $address;
	global $country;
	global $phone;
	global $category;
	global $email;
	global $website;
	
	$company=formatDisplayText($company);
	$address=formatDisplayText($address);
	$country=formatDisplayText($country);
	$phone=formatDisplayText($phone);
	$category=formatDisplayText($category);
	$email=formatDisplayText($email);
	$website=formatDisplayText($website);
}
/******************************************* Page level functions ends ********************************************************/
?>   
