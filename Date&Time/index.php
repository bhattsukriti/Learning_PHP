<?php
echo date_default_timezone_get() . "<br>"; //exact loction 
date_default_timezone_set("Asia/Kolkata");
echo date("m") . "<br>";//month number
echo date ("M"). "<br>";// month name
echo date ("d  D m M y Y") . "<br>";
echo date ("h: i: sa");

?>