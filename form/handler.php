<?php

// var_dump($_SERVER["REQUEST_METHOD"]);  // it is used to take out the information of the variable
if($_SERVER["REQUEST_METHOD"] == "post"){
    $firstname = htmlspecialchars($_post["firstname"]);
    $lastname = htmlspecialchars($_post["lastname"]);
    $pet = htmlspecialchars($_post["pets"]);
    //htmlentities()// it works same as htmlspecial character works.

    if(empty($firstname)){
        exit();
        // header("Location: ../indx.php");
    }
    echo "These are the data, that the user submitted:";
    echo"<br>";
    echo $firstname;
    echo"<br>";
    echo"lastname";
    echo"<br>";
    echo"pets";
    
// }else{
//     header("Location: ../index.php");
}


