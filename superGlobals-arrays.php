<?php
//GLOBAL VARIABLES
$app="My app";
$app2="my app 2";

function myApp(){
    print_r($GLOBALS);
}
// myApp();

//GET is used to get the values from the params
$name = $_GET["name"];
$profession = $_GET["profession"];

echo $name . " is a " . $profession . "<br>";

//SERVER to get info about the server currently in use.
echo "Server name: " . $_SERVER["SERVER_NAME"] . "<br>";
echo "Server port:" . $_SERVER["SERVER_PORT"] . "<br>";
echo "Server protocol:" . $_SERVER["SERVER_PROTOCOL"] . "<br>";