<?php
function greetWithTime($name,$greetings="Aoa.Good Morning!"){
    echo "Hey $name, $greetings";
    echo "<br>";
}

greetWithTime(name:"Sanvii");

greetWithTime(name:"Ben", greetings:"Good eve");