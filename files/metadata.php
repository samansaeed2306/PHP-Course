<?php

$file ="data.txt";

if(file_exists($file)){

    echo "File size: " . filesize($file) . " bytes" . "<br>";
    echo "Modified date: " . date("F d, y H:i:s.",filemtime($file)). "<br>";



}