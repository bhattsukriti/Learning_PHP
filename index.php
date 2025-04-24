<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Scaler type -->
     <?php  
     $strings = " Hello World\r\n";
     echo $strings;
     $float = 6.4534;
     echo $float;
     echo"<br>";
     $bool = True;
     echo $bool;
     echo"<br>";
     $int = 123445;
     echo $int;
     echo"<br>";
     echo"<hr>";

    //  <!-- Array Types --->
     $name = ["Sukriti", "Sahil", "Sonam"];

    //  Objects
    // We have a object that is equal to the variable. These are created by classes
    // $object = car(); 
    ?>
    <?php
    // SuperGlobal which means we can access variables from anywhere inside our code.
    echo $_SERVER["DOCUMENT_ROOT"];
    echo"<br>";
    echo $_SERVER["PHP_SELF"];
    echo"<br>";
    echo $_SERVER["SERVER_NAME"];  //Srever name
    echo"<br>";
    echo $_SERVER["REQUEST_METTHOD"];//TELL you this page accessed  

    echo"<hr>";
    
    //Addition 
    $a= 35;
    $b= 54;
    $add = $a + $b;
    echo"\nThis is the result of a and b =" , $add;
    echo"<br>";


    //Concentintion
    $fname = "Sukriti";
    $sname =" Bhatt";
    echo $fname.$sname;
    echo"<br>";


    // var_dump work as kind of (type of) means it tells about the variable is sr=tring or number

    $x = 5;
    var_dump($x);


    // to update the the code on github
    // git status
    // git add .
    // git commit -m" Upgrated the code "
    // git push


    //foreach looop
    $fruits = ["banana", "apple","orange","strawberry"];
        foreach($fruits as $d){  // it is used "as" iterate means to give the to another variable.
            echo "This is a" . $d . "<br>";
        }



    
    ?>

</body>
</html>