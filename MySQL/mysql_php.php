<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

$conn = new mysqli ($host, $username, $password, $database);
    if($conn->connect_error){
        die("There are some eroor" . $conn->connect_error);
    }
    echo"Connection Success";
    echo "<br/>";
    $result = $conn->query("Show tables")->fetch_all();
    print_r($result);


?>