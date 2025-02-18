<?php
//To append, use "a", To overwrite, use "w"
$file = fopen("data.txt","a");

if($file){
 fwrite($file,"Hello I am a new line");
 fclose($file);
}
else{
    echo "Cannot open file";
}