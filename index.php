<?php
$db = new PDO('sqlite:database.sqlite');
$result = $db->query("SELECT * from tasks");

foreach($result as $row){
    echo $row['id'] .  ":" . $row['task'] ." <br>";
}