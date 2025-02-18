<?php
$dresses=["skirts","frocks","maxi","pants","sweatshirts"];
$shoes=["joggers","sneakers","wedgies","sandals"];

echo count($dresses);
echo"<br>";

array_push($dresses,"midi");

print_r($dresses);
echo"<br>";

echo count($dresses);

echo"<br>";

array_pop($dresses);

echo"<br>";

echo count($dresses);

echo"<br>";

$mergedArray = array_merge($dresses,$shoes);

print_r($mergedArray);
echo"<br>";
sort($mergedArray);
print_r($mergedArray);
echo"<br>";
$newArray = array_slice($dresses,1,4);
print_r($newArray);
echo"<br>";
print_r($dresses);

//ksort is used to sort the arrays on the basis of the keys (alphabetically)