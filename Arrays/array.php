<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<b>IndexArray</b> ";
    $arr1 = array("cars", "Bicycle" ,"Motorbike", "Bikes");
    $arr1[] = "auto";
    echo"<pre>";
    print_r( $arr1);
    echo"</pre>";// used for formating the syntax
    echo"<br>";
    echo"<hr><hr>";

    echo"<b>Associate Array</b>";
    echo"<br>";
    $arr2 = array(
        "Name" => "Sukriti",
        "Place" => "Palampur",
        "Standard" => "5th",
    );
    echo"<pre>";
    print_r($arr2);
    echo"</pre>";


    echo"<b>MULTIADDITIONAL ARRAY </b>";
    echo"<br>";
    $arr2 = array(
        "Name" => "Sukriti",
        "Place" => "Palampur",
        "Standard" => "5th",
        "Contact" => array("6475686833","65879476"),
    );
    $arr2 ["State"] = "Himachal Pradesh";
    
    echo"<pre>";
    print_r($arr2);
    echo"</pre>";

    echo"<br>";
    $arr3 = [1,2,3,4,6,7,8,9];// Sinple array 
    $arr4 = [1,
    2,
    3,
    4 =>[
        41,
        42,
        43 =>[
             34,
             45,
             45
        ],

    ],
    6,
    7,
    8,
    9
    ];
    echo"<pre>";
    echo "Tottal count of arrays:", count($arr4);
    echo"</pre>". "<br> . <hr> <hr>";


    //to find that this is array or not
    $array = ["anil", "subham", "rohit", "jam"];
    // $array = "abc";

    if (is_array($array)){
        echo "This is an array.";
    }else{
        echo "This is not an array";
    }
     echo "<br><br>";
    echo"<b>To Remove Array we use Unset</b>" . "<br>";
    unset($array[2]);
    print_r($array);

    

    ?>
</body>
</html>