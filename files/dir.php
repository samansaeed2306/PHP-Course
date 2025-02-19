<?php
$directory = "uploads";

// if(!file_exists($directory)){
    
if(is_dir($directory)){
    // mkdir($directory);
    // echo "Make directory";
    $files = scandir($directory);
    foreach($files as $file){
        if($file!="."&& $file!=".."){
        echo "File: " . $file;
        }
    }

}