<?php

$var="Abhishek_bali";

// check for empty fieldS
if (empty($var)) 
    {  
        echo "Error! You didn't fill the Field.";    
    }
else
    {  
        echo $var;  
    }  

//string validation
if (!preg_match ("/^[a-zA-z_]*$/", $var) ) 
    {
        echo "Only alphabets and underscore are allowed.";
    }
else
{  
    echo $var;  
}  



?>