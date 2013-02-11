<?php

function callPageErrorMessage($str_error) {
	return "<div class=\"syserror\">The following errors detected, please check.<br />".$str_error."</div>";
}

function callErrorMessage($str_error) {
	return "<div class=\"errorMsg\">The following errors detected, please check.<br /><li><ul class=\"message\">".$str_error."</ul></li></div>";
}

function callSuccessMessage($str_success) {
	return "<div class=\"success\">".$str_success."</div><br />";
}

/* Function to format error message 
Input : String - raw message
Output : String - Formatted message */
function formatErrorMessage($str_error) {
	$xmlObj = changeLanguage($_SESSION['lang_code']);
	if (isset($xmlObj)){
	return "<div class=\"error\">".getMyString($xmlObj, "formatErrorMessage")."<br /><ul>".$str_error."</ul></div><br />";
	} else if (!isset($xmlObj)){
	return "<div class=\"error\">The following errors detected, please check.<br /><ul>".$str_error."</ul></div><br />";
		
	}
}
/*
 * Function to generate random code
 * Input : No input parameters
 * Output : String - Randomly generated 4digits code
 */
function random_gen($length)
{
    global $char_list;
    $random= "";
    srand((double)microtime()*1000000);
    $char_list .= "abcdefghijklmnopqrstuvwxyz";
    $char_list .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $char_list .= "1234567890";
    // Add the special characters to $char_list if needed
    for($i = 0; $i < $length; $i++)
    {
        $random .= substr($char_list,(rand()%(strlen($char_list))), 1);
    }
    return $random;
}
/* Function to format success message 
Input : String - raw message
Output : String - Formatted message */
function formatSuccessMessage($str_success) {
	return "<div class=\"success\">".$str_success."</div><br />";
}


function getSuccessMessage($which, $language_id = 1) {	
	global $msg;	
	
	if (isset($_REQUEST["msg"]))
		$msg = $_REQUEST["msg"];
	else
		$msg = "";
		
	switch($msg) {
		case "add": 
			return $which." Added Successfully";
		case "edit": 
			return $which." Updated Successfully";
		case "delete": 
			return $which." Deleted Successfully";
		case "status": 
			return $which." Status Changed Successfully";
		case "review": 
			return $which." Reviewed Successfully";
		case "send": 
			return $which."Mail Send Successfully";
		case "imageDeleted": 
			return $which." Image deleted Successfully";
		case "logout": 
			return $which;	
	}
}

/*
 * Function to validate the form field is a valid one, which won't have php keywords or php tags
 * Input : String - Form Field Value
 * Output : Boolean - True if valid string, otherwise False
 */
function hasPHPCode($formFieldValue)
{
    return true;
}
/*
 * Function to create a text are field with its contents
 * Input : String - Text area id,name,content
 * Output : text area
 */
function formTextArea($name='',$id='',$value='',$max=10000)
{
    echo '<textarea name="'.$name.'" id="'.$id.'" maxlength="'.$max.'">'.$value.'</textarea>';
}
/*
 * Function to validate the form field is a valid one, which won't have html keywords or html tags
 * Input : String - Form Field Value
 * Output : Boolean - True if valid string, otherwise False
 */
function hasHTMLCode($formFieldValue)
{
    return(preg_match('<>',$formFieldValue));

}
/*
 * Function to format error message
 * Input : String - raw message
 * Output : String - Formatted message
 */
/*function formatErrorMessage($str_error) {
    return "<div class=\"error\">The following errors detected, please check.<br /><ul>".$str_error."</ul></div><br />";
}*/
/*
 * Function to format success message
 * Input : String - raw message
 * Output : String - Formatted message
 */
/*function formatSuccessMessage($str_success) {
    return "<div class=\"success\">".$str_success."</div><br />";
}*/
/*
 * Function to encrypt password
 * Input : String - password
 * Output : String - encrypted password
 */
function encryptPassword($string) {
   $key="io-marketHotelPlan";
   $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
   return $encrypted;
}
/*
 * Function to encrypt password
 * Input : String - password
 * Output : String - encrypted password
 */
function decryptPassword($string) {
   $key="io-marketHotelPlan";
   $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
   return $decrypted;
}
/*
 * Function to format date according to provided option
 * Input : String - date, Integer - option value
 * Output : String - Formatted Date
 */
function formatDate($date,$option) {
    switch($option) {
        case 1:
            return date("M, jS Y h:i:s A",strtotime($date));
        case 2:
            return date("r",strtotime($date));
        case 3:
            return date("j",strtotime($date))."<sup>".date("S",strtotime($date))."</sup>".date(" M, Y",strtotime($date));
        case 4:
            return date("l, F j, Y, h:i:s A",strtotime($date));
        case 5:
            return date("j\<\s\u\p\>S\<\/\s\u\p\> M y",strtotime($date));
        case 6:
            return date("j/m/Y",strtotime($date));
        case 7:
            return date("jS M y",strtotime($date));
        default:
            return $date;
    }
}
/*
 * Function to validate the string is a valid email
 * Input : String - email
 * Output : Boolean - True if valid email, otherwise False
 */
function isEmail($str_email) {
    return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.(([a-z]{2,3})|(aero|coop|info|museum|name))$/", $str_email);
}

/*
 * Function to validate a US mobile number
 * Input : String - email
 * Output : Boolean - True if valid email, otherwise False
 */
function isPhone($int_phone) {
    return preg_match("/^[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{4}[\(\)\.\- ]{0,}$/", $int_phone);
}
/*
 * Function to upload Images to specified directory
 * Input : String - Form Field Name,  String - Directory Location
 * Output : String - null if valid, otherwise Error message
 */
function uploadImage($formFieldName, $uploadDirectoryLocation) {
    $result = array('imageName'=>'','error'=>'');
    if ($_FILES[$formFieldName]['size'] > 0){
        if ($_FILES[$formFieldName]['size'] > 5242880)  /* File Size Checking */
        $result['error'] = 'Too Big, Maximum Size is 5MB \n';
      		if( ($_FILES[$formFieldName]['type'] == "image/gif") ||
      		($_FILES[$formFieldName]['type'] == "image/jpg") ||
      		($_FILES[$formFieldName]['type'] == "image/jpeg") ||
      		($_FILES[$formFieldName]['type'] == "image/bmp") ||
      		($_FILES[$formFieldName]['type'] == "image/png") ){
      			   if (file_exists($uploadDirectoryLocation. $_FILES[$formFieldName]["name"]))
      			   $result['error'] =  $_FILES[$formFieldName]["name"] . " already exists. \n" ;
      			   else{
      			       if(move_uploaded_file($_FILES[$formFieldName]["tmp_name"],$uploadDirectoryLocation.$_FILES[$formFieldName]["name"])){
      			           $result['imageName'] = $_FILES[$formFieldName]["name"];
      			       } else {
      			           $result['error'] = "Uploading failed";
      			       }
      			   }
      		} else
      		$result['error'] =  "Wrong Photo File Type, Must be: Gif, Jpg, Jpeg, Bmp ,Png \n";
    }
    return $result;
}
/*
 * Function to validate the string is a valid float
 * Input : String - checkValue
 * Output : Boolean - True if valid float, otherwise False
 */
function isNumeric($checkValue) {
    $result=is_numeric($checkValue);
    return $result;
}
/*
 * Function to validate the string is a valid integer
 * Input : String - checkValue
 * Output : Boolean - True if valid float, otherwise False
 */
function isInteger($checkValue) {
    return (string)(int)$checkValue === (string)$checkValue;
}
/*
 * Function to bypass SQL Injection
 * Input : String - FormValue, String - Different Types, String - When type is 'defined' extra two parameters to be defined.
 * Output : String - Safe Output for processing
 */
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
/* 
 * Function to display formatted code   
 * Input : String - Text Value, Integer - Limit [optional] defaults to 0
 * Output : String - Formatted Text Value 
 */
function formatDisplayText($textValue, $limit = 0) {
	$formattedText =  htmlentities($textValue, ENT_QUOTES);
	if($limit != 0){
		if(strlen($formattedText) > $limit ){
			$formattedText = substr($formattedText,0,$limit)."...";
		}
	}	
    return $formattedText;
}
/*
Function to parse the XML Object
Input 	: Language Code . Possible Values en (English), fr (French)
Output 	: If Success, Object containing the entire XML node and values 
 		  If Error, then it will return 'No Language File Found' error
*/
function parseMyXml($languageCode){
	global $absolute_path;
	
	$xmlPath = $absolute_path.'language/'.$languageCode.'.xml';
	if(file_exists($xmlPath)){
		$objXml = simplexml_load_file($xmlPath);
		$_SESSION['lang_code']=$languageCode;
	}else{
		$objXml = "Error";
	}

	return $objXml;
}

/*
Function to load the respective XML file for language selection
Input 	: Language Code . Possible Values en (English), fr (French)
Output	: If Success, Object containing the entire XML node and values
		  If Error, then it will return 'No Language File Found' error
*/
function changeLanguage($languageCode){
	global $xml_obj ;
	 $xml_obj  = parseMyXml($languageCode);
	 $_SESSION['langCode']=$languageCode;
	return $xml_obj;
}

/*
Function to return the XML node value from the node.
Input 	: XML Object, XML Node
Output	: If Success, String  containing the entire XML value
		  If Error, then it will return respective error message
*/
function getMyString($xmlObj, $keyWord){
	
	if($xmlObj != 'Error'){
		if(isset($xmlObj->$keyWord)){
			$returnValue = trim($xmlObj->$keyWord);
		}else{
			$returnValue = 'No Xml Node Found';
		}
	}else{
		$returnValue = 'No Language File Found';
	}
	return $returnValue;
}
/*
Function to Remove Text Between Parentheses
Input 	: string
Output	: Part of string after removing the contents within paranthesis
*/
function removeTextInBracket($string){
    
    $text= trim(preg_replace("/\([^)]+\)/","",$string));
    return $text;
}

/*
 * Class to send mail
 * Input  : String - From ,String -Subject, String- Body
 * Output : String - Error or success message
 */
class SendMail
{
    function sendEmail($from,$to,$subject,$body){
        $mail_send=0;
        $host = "smtp.gmail.com";
        $headers="From:".$from."\r\n";
        $headers .= "MIME-Version:1.0"."\r\n";
        ini_set('sendmail_path', '/usr/sbin/sendmail -t -i');
        $headers .= 'Content-type:text/html;charset=UTF-8'."\r\n";
        if (mail($to,$subject,$body,$headers)){
            $mail_send=1;
        }
        else {
            $mail_send=0;
        }
        sleep(1);
        return $mail_send;
    }
}
$objSendMail=new SendMail();
?>