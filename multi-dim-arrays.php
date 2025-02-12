<?php
$persons = [
    ["name"=>"Saman","age"=>22 ,"profession"=>"Software engineer"],
    ["name"=>"Areeba", "age"=>22, "profession"=>"Computer Scientist"]
];

foreach($persons as $person){
    echo $person["name"] . " " . $person["profession"] . "<br>";
}