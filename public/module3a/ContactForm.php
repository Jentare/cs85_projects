


<?php
// adds a function called validateInput that takes two parameters $data and $fieldName and uses a global variable $errorCount 
function validateInput($data, $fieldName){
    global $errorCount;
    if(empty($data)){
        echo "\"$fieldName\" is a required field. <br />\n";
        ++$errorCount;
        $retval = "";
    }
    else {
        $retval = trim($data);
        $retval = stripslashes($retval);
    }
return($retval);
}



function validateEmail($data, $fieldName){
    global $errorCount;
    if (empty($data)){
        echo"\"$fieldName\" is a required field. <br />\n;
        ++$errorCount; $retval = "";
    }
    else {    
        }

}



?>