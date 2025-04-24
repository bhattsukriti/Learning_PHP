<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>While loop</h2>". "<br>";
    $i = 1;
    $num =2;
    while($i <= 10) {
        echo "$num * $i = ". $i* $num .   "<br>";
        $i++;
    }

    echo "<br>";
    echo "<h2>For loop</h2>". "<br>";
    for($i=0; $i<= 10; $i++){
        echo "This is the number  = " .  $i . "<br>";
    }
    echo "<br>";
    for($i=0; $i <= 10; $i++){
        if($i%2==0){
            echo "Even number" . "<br>";
        }else{
            echo "Odd number" . "<br>";
        }
    }

    
    echo "<br>";
    echo "<h2>Do-While loop</h2>". "<br>";
    $i = 1;
    while($i < 1){
        echo" the code will not execut".  $i;
        $i++;
    }

    // do while it execut one time when other code are not executing
    $j = 1;
    do{
        echo "J is equal to one = " . $j . "<br>";
        $j++;
    }while($j<1);

    echo "<br>";
    echo "<h2>foreach loop</h2>". "<br>";
    $array = [
        "HTML" => 2500,
        "CSS" => 4500,
        "Javascript" => 3500,
        "PHP" => 5000,
        "MySql" => 2000,
    ];

    echo "<pre>";
    print_r ($array);
    echo "</pre>";

    //for each loop
    foreach ($array as $course => $keys){
        echo " The fees of $course is $ $keys" . "<br>";
    }
    echo "<hr><hr>";

    echo "<br>";
    echo "<h2>Break </h2>". "<br>";
    $i = 1;
    $sum = 0;
    while ($i<10){
        $sum+=$i;
        if($sum >10 ){
            break;
        }
        echo $i . "<br>";
        $i++;
    }
    echo "-------------" . "<br>";
    echo $sum . "<br>";
    echo "-------------" . "<br>";
    echo " Loop ends";

    echo "<hr><hr>";

    echo "<br>";
    echo "<h2>Continue </h2>". "<br>";
    for ($i = 0; $i<=10; $i++){
        if ($i==6){
            continue;
            
        }
        echo "$i<br>";
    }
    echo "<br>";
    for ($i = 0; $i<=10; $i++){
        if ($i%2==0){
            continue;
            
        }
        echo "$i<br>";
    }


    ?>
</body>
</html>