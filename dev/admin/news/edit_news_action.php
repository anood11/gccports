<?php
/*********************************************** Initialise/ Declare variables ************************************************/

/*********************************************** Control flow starts **********************************************************/

/*********************************************** Control flow ends ************************************************************/
/*********************************************** Page level functions start ***************************************************/
function savePlans(){
    global $intBuilding;

    $err = "";
    $preMsg = "";
    $postMsg = "<br/>";

    $path = "../../resources/plans/";
    $name = $_FILES['planFile']['name'];

    $size = $_FILES['planFile']['size'];
    $contentType=$_FILES['newsImage']['type'];
    $valid_formats=array("pdf");
    if($name!=""){
        if(strlen($name))
        {
            //list($txt, $ext) = explode(".", $name);
            $fileInfo = pathinfo($name);

            $ext = $fileInfo['extension'];
            $ext=strtolower($ext);
            if(in_array($ext,$valid_formats)) {
                $tmp = $_FILES['newsImage']['tmp_name'];
                if(copy($tmp, $path.$intBuilding.'.'.$ext)){
                    $resizeObj = new resize($path.$name);
                    $resizeObj -> saveImage($path.$name, 100);
                }
                else $err="Some error occured.Please try again.";
            }
            else $err="Only PDF files are allowed";
        }
        else $err="Attach valid files only";
    }
    return $err;
}
/*********************************************** Page level functions ends ****************************************************/

?>