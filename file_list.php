<?php
$path = "Files";
$items = scandir($path);
$items = array_diff($items, array("." ,"..")); //it remove  the same element, syntx or annything from the second array.
// print_r($items);
foreach($items as $item){
    echo "<a href = ./Files/$item>$item<a>";
    echo "<br>";
}
?>