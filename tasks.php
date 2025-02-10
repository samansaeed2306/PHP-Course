<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

$db = new PDO('sqlite:database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


//Fetch all tasks
$stmt = $db->query("SELECT * from tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($tasks);

