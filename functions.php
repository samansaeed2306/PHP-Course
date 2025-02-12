<?php

function isEven($number){
if($number%2==0){
    return "even";
}
else{
    return "odd";
}
}

$num = 3;
echo "This number is " . isEven($num);