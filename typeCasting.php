<?php
/* We can cast the different types of data easily in php  */
//Add a paranthesis with string or any type in it in order to type cast
$a = (string)5;
$b = (string)6.5;
$c = (int)"45";
$d = (int)"five";
$e = (object)[2,"Sam",1.5,true];
$f = (int)false;
$g = (int)NULL;

var_dump($a); //int(5)
echo"<br>";
var_dump($b); //float(6.5)
echo"<br>";
var_dump($c); //string(2)
echo"<br>";
var_dump($d); //string(5)
echo"<br>";
var_dump($e); //array(4)
echo"<br>";
var_dump($f); //bool(false)
echo"<br>";
var_dump($g); //NULL
echo"<br>";
