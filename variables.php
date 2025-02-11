<?php
/*Variables in php:
1. They donot need data types at the time of declaration or definition/initialization.
2. They can be overwritten if have the same (case-sensitive) letters
3. If they have different cases but the word/name of the var is same, the varibale will be considered as a different 
variable.
4. We have three conventions that we can follow to name variables 
   i. camelCase
   ii. snake_case
   iii. PascalCase

*/

$name = "Saman";
// var_dump($name);

// It will overwrite the var name.
$name = "Saman Saeed";
// var_dump($name);

// It will change its type too
$name = 3;
var_dump($name);