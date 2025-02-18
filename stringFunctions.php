<?php
$str = "Hey Friends!";

//To find the length of string 
echo strlen($str);

echo "<br>";

//To find the pos of specific chars in string 
echo strpos($str,needle:"Friends");
echo "<br>";

//Replace chars in a string (Doesnt alter the original string)
$str2 = str_replace("Friends", "Buddies", $str);

//we have an alternative way to use it tho
$str4 = str_replace(search:"Hey", replace:"AOA", subject:$str);

echo $str4;
echo "<br>";
echo strtoupper($str4);
echo "<br>";
echo strtolower($str2);
echo "<br>";






