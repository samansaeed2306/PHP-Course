<?php
$filename = "newData.txt";
$newname = "readme.txt";
if(file_exists($newname)){
    
    // rename($filename,$newname);
    unlink($newname);
    echo "Deleted file";
}