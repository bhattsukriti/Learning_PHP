<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Strings</h3>";
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
    echo"<br>";
    echo str_repeat($strings, 2);

    echo"<br>";
    echo"<hr><hr>";

    //simple function
    echo" <h3> Startinng of function</h3>";
    function right(){
        echo "Hello World!";

    }
    right();"<br>";
    echo"<br><br>";

    function voting($age){
        if($age > 18 && $age<=14){
            echo "Eligible for voting.";
        }
        else{
            echo "Not eligible.";
        }
    }
    voting(34);

    echo"<br><br>";
    echo "<h3>Calling function</h3>";
    function sum($a,$b){
        if($a<$b){
            echo $a;
        }else{
            echo $b;
        }
        
    }
    sum(23,45);
    echo "<br>";

    echo "<h3>Return function</h3>";
    function greet(){
        return "Weolcome to my World!";
    }
    echo greet();
    echo " <br>";

    echo "<hr><hr>";

    //Functions in array (Predefine function)
    echo "<h2>Arrays Predefined Function</h2>";
    $cars = array(
        "A" => "Car1",
        "B" => "Car2",
        "C" => "Car3",
        "D" => "Car4",
        "E" => "Car5",
    );


    echo "<h4>Is_Array syntax</h4>";
    // echo"<br>";
    var_dump(is_array($cars));
    echo"<br>";
    $x =4;
    if(is_array($x)){
        echo "x is not an array";
    }else{
        echo "x is not an array";
    }


    echo "<h4>Array_Search syntax</h4>";
    echo "We have search for the array that's why it is used.";
    echo "<br>";
    echo array_search('Car3',$cars);// in first parameter needle means the key value name, and in second parameter heystack means arrays name.
    echo"<br>";


    echo "<h4>Array_Slice syntax</h4>";//means to remove the vlaue from an array
    echo "We have to delete some arrays or remove array that's why it is used. there are two ways:";
    echo "<br>";
    echo "<pre>";
    $newcars = array_slice($cars,2);
    print_r($newcars);
     print_r(array_slice($cars,1));//in first array and 2nd how many value you want to decrease.
    echo "</pre>";
    echo "<pre>";
    print_r($cars);
    echo "</pre>";


    echo "<h4>Array_chunk syntax</h4>";
    echo "We have to make the paires of the array or divided into parts that's why it is used.";
    echo "<br>";
    echo "<pre>";
    $chunked = array_chunk($cars,2);//input means array and size means how many nbr you want to chunk
    print_r($chunked);
    echo "</pre>";

    echo "<h4>Array_keys syntax</h4>";
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    echo "<pre>";
    print_r(array_keys($cars));
    echo "</pre>";

    var_dump(array_key_exists("A",$cars));

    echo "<h4>Array_merge syntax</h4>";
    $x = array(
         "Car1",
        "Car2",
        "Car3",
        "Car4",
        "Car5",
    );

    $y = array(
        "Car6",
        "Car7",
        "Car8",
        "Car9",
        "Car10",
    );

    echo "<pre>";
    $z = array_merge($x ,$y);
    print_r($z);
    echo "</pre>";




    



    ?>
</body>
</html>