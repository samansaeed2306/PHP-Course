<?php
/*Variables in php:
0. Must begin with a letter or underscore. Cannot start with a number.
1. They donot need data types at the time of declaration or definition/initialization.
2. They can be overwritten if have the same (case-sensitive) letters
3. If they have different cases but the word/name of the var is same, the varibale will be considered as a different 
variable.
4. We have three conventions that we can follow to name variables 
   i. camelCase
   ii. snake_case
   iii. PascalCase

5. Loosely typed data 
6. It can transfer the value to variable 

*/

$name = "Saman";
// var_dump($name);

// It will overwrite the var name.
$name = "Saman Saeed";
// var_dump($name);

// It will change its type too
$name = 3;
var_dump($name);

echo "<br>";

// 6th point's example is shown here. All three will have same value
 $fullName1 = $fullName2 = $fullName3 = "Ms Saman Saeed";

 var_dump($fullName1);