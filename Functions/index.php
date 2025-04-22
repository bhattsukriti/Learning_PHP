<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<b>Strings</b>";
    echo"<br>";
    $strings = "Hello World";
    echo strlen($strings); // strign lenght
    echo" <br>";
    echo str_replace("World" , "Sukriti",$strings);
    echo "<br>";
    echo strtolower($strings);
    echo "<br>";
    echo strtoupper($strings);
    echo"<br>";
    echo strpos($strings, "l");
    echo"<br>";
    echo substr($strings, 2, -2);

    //simple function
    function right(){
        
    }


    ?>
</body>
</html>