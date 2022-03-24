<?php

    //insert query
    $sql = "INSERT INTO `Details` (`Name`, `Mobile`) VALUES ('".$_POST["Name"]."','".$_POST["Phone"]."');";
    $conn->query($sql);

    //select query
    $sql = "SELECT * FROM Details WHERE Mobile='".$row["Mobile"]."' ORDER BY `date` DESC" ;
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) 
    {
        echo $row["name"];    
    }


?>