<?php

class Task {
private $conn;
private $table = 'tasks';
public  $id;

public $task;

public $is_completed;

public function __construct($db)
{
    $this->conn = $db;
}

public function create (){
    $query = "INSERT INTO ". $this->table . "(task) VALUES (?)";
    $stmt = $this->conn->prepare($query);
    $stmt -> bind_param("s",$this->task);
    return $stmt -> execute();
    
}

public function read (){
    $query = "SELECT * FROM ". $this->table . " ORDER BY created_at DESC";
    $result = $this->conn->query($query);
    
    return $result;
    
}

public function complete($id){
    var_dump($id);
   
    $is_completed = 1;

    // Correct SQL query with placeholders
    $query = "UPDATE " . $this->table . " SET is_completed = ? WHERE id = ?";

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $this->conn->error);
    }

    // Bind parameters correctly for MySQLi
    $stmt->bind_param("ii", $is_completed, $id);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    
    

}

public function undo($id){
    var_dump($id);
   
    $is_completed = 0;

    // Correct SQL query with placeholders
    $query = "UPDATE " . $this->table . " SET is_completed = ? WHERE id = ?";

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $this->conn->error);
    }

    // Bind parameters correctly for MySQLi
    $stmt->bind_param("ii", $is_completed, $id);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    
    

}
public function delete($id){
    var_dump($id);
   
    // completed = 0;$is_

    // Correct SQL query with placeholders
    $query = "DELETE FROM " . $this->table . " WHERE id = ?";

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $this->conn->error);
    }

    // Bind parameters correctly for MySQLi
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    
    

}
}
