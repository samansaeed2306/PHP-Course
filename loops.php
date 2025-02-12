<?php
$person = ["name"=>"Saman", "age" => "22"];

foreach($person as $key => $value){
    echo "$key: $value <br>";
}

$colors = ["purple","white","red","yellow"];
foreach($colors as $color){

if($color=="red"){
    //continue to skip it, break to come out of the loop 
    // break;
    continue;
}
echo "$color <br>";

}