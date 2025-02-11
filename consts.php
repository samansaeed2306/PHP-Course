<?php
/* We can initilize constants in php in two ways:
 1. using define keyword
 2. using const keyword 
 We also have MAGIC CONSTANTS IN PHP LIKE __FILE__ OR __DIR__
*/

// Define keyword
// define("secretCode","2132");


// Using const keyword
const secretCode = 1232;

echo secretCode;


//MAGIC CONSTS LIKE __FILE__ TELL US IN WHICH FILE WE ARE RIGHT NOW
 echo __FILE__;
 echo "<br>";
 echo __DIR__;
 echo "<br>";
 function helloWorld(){
 echo __FUNCTION__;
 }
 helloWorld();
 

