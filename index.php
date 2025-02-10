<?php
$db = new PDO('sqlite:database.sqlite');

//For inserting data into sql tables, we do exec
$db -> exec("INSERT INTO tasks (task) VALUES ('INSERTED WITH PHP')");
echo "INSERTED!";


// For pulling data from sql, we do 'query'
// $result = $db->query("SELECT * from tasks");

// foreach($result as $row){
//     echo $row['id'] .  ":" . $row['task'] ." <br>";
// }