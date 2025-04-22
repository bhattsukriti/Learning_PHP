<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Strings Opertors
    $a = "Hello";
    $b = "World!";
    $c = $a ." " . $b;// to create a space btw the syntax
    echo $c;
    echo"<br>";
    echo"<hr>";
    echo"<hr>";

    //Arithmetic Operator
    echo 23*45;
    echo"<br>";
    echo 34%74;
    echo"<br>";
    echo 34-74;
    echo"<br>";
    echo 34+74;
    echo"<br>";
    echo 23 + (45*56);
    echo"<br>";
    echo"<hr>";
    echo"<hr>";

    //Assignment operator

    $a = 2;
    $a += 4;
    echo $a;
    echo"<br>";
    echo"<hr>";
    echo"<hr>";


    //Comparison Operators
    $a =2;
    $b = 3;

    if($a > $b){
        echo"This is true statement!";
    }else{
        echo"This is false statement!";
    }
    echo"<br>";
    echo"<hr>";
    echo"<hr>";

    // Logical Operators
    $a =2;
    $b = 2;
    $c = 5;

    if($a == $b || $b == $c){
        echo"This is true statement!";
    }
    echo"<br>";
    


    //Increment and Decrease Operatoors
    $a = 4;
    echo ++$a;
    echo"<br>";
    echo $a--;
    echo"<br>";
    $b = 5;
    echo --$b;
    echo"<br><br>";
    echo "<hr> <hr>"; 

    // CONDITIONS AND CONTROL STRUCTURE
     $a = 44;
     $b = 45;
     $bool = true;
     if( $a==$b && !$bool){
        echo"This statement is true";    
     }else if ($a==$b && $bool){
        echo"This statement is false";
     }    
     else{
        echo"both are correct";
     }

     echo"<br> <br>";
     echo "<hr> <hr>";


    //Switch Case
    echo"Switch Case";
    echo"<br>";
    switch($a){
        case 1:
            echo"The first sentence is incorrect!. ";
            break;
        case $a:
            echo"The second sentence is correct!. ";
            break;
        default:
            echo" Both the statements are true";

    }
    echo"<br><br>";
    echo "<hr> <hr>";


    //Match Case
    echo"Match Case";
    echo"<br>";

    $result = match($a){
        44 => "This statement is equal to one",
        23=> " This statement is equal to two",
        default => "Bothe the statemwnt are wrong",
    };
    echo $result;

     //Concentintion
     echo"Concentination";
    echo"<br>";
     $fname = "Sukriti";
     $sname =" Bhatt";
     echo $fname.$sname;
     echo"<br><br>";
    echo "<hr> <hr>";
 
 
     // var_dump work as kind of (type of) means it tells about the variable is sr=tring or number
 
     $x = 5;
     var_dump($x);
     echo"<br><br>";
    echo "<hr> <hr>";

     //Ternary Operator
    $a = 5;
    $b = 4;
    $flag = ($a >= $b) ? "True" : "False";
    var_dump($flag);
    echo"<br><br>";
    echo "<hr> <hr>";


    //Conditional Operator
    // if else
    echo"<b> IF ELSE STATEMENT</b> ";
    echo"<br>";
    $age = 18;
    if($age> 18){
        echo"You can vote";
    }else{
        echo"You cannot vote";
    }
    echo"<br><br>";
    echo "<hr> <hr>";

    //ELSE IF STATEMENT
    echo"<b>ELSE IF STATEMENT< /b> ";
    echo"<br>";
    if($age> 18){
        echo"You can vote";
    }elseif($age == 12){
        echo"You have to wait for vote";
    }elseif($age == 15){
        echo"You have to wait for 3 years";
    }else{
        echo"You cannot vote";
    }

    echo"<br><br>";
    echo "<hr> <hr>";
    
?>

</body>
</html>