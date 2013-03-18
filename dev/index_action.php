<?php
/******************************************* Initialise/Declare variables *****************************************************/
global $displayMessage;
global $db;

$displayMessage="";
/******************************************* Control flow starts **************************************************************/
$mainNews=getNewsList(0,1);
$bottonSmallNews1=getNewsList(3,3);
$bottonSmallNews2=getNewsList(6,3);
$rightSmallNews=getNewsList(1,2);
$headLineNews=getNewsList(7,7);
/******************************************* Control flow ends ****************************************************************/
/******************************************* Page level functions starts ******************************************************/

/******************************************* Page level functions ends ********************************************************/


?>