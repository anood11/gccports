<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
$mainNews=getNewsList(0,1);
$bottonSmallNews=getNewsList(1,4);
$rightSmallNews=getNewsList(5,4);
$headLineNews=getNewsList(9,4);
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/******************************************* Page level functions ends ********************************************************/


?>