<?php
$message = "This is";
$month = "Feb";

switch($month){
    case "May":
        echo "$message $month and I'm excited!";
        break;
    case "Feb":
        echo "$message $month and I ain't excited!";
        break;
    default:
        echo "I ain't happy :(";
        break;
}