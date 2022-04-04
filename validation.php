<?php

$var="Abhishek";

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


//length validation 
$length = strlen($var);  
  
if ($length > 10)
    {  
        echo "field must have less than 10 characters.";  
    }
 else
    {    
        echo $var;  
    } 


//Button click validation
if (isset ($_POST['submit']))
    {  
        echo "Submit button is clicked.";  
    }
?>