<?php

include 'partials/header.php';

include 'partials/notifications.php';

include 'config/Database.php';

include 'classes/Task.php';

$database = new Database();
$db = $database->connect();

$todo = new Task($db);

// var_dump($todo->read());
session_start();
$tasks = $todo->read();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['add_task'])){
        $todo->task = $_POST['task'];
        $todo->create();
        // echo "Task created";
        $_SESSION["message"]="Task created successfully";
        $_SESSION["msg_type"]="success";
    }
    elseif(isset($_POST['complete_task'])){
        // echo "HELOO";
        // echo $_POST['id'];
        $todo->complete($_POST['id']);
        $_SESSION["message"]="Task completed successfully";
        $_SESSION["msg_type"]="success";
        // echo "Task Completed";
    }
    elseif(isset($_POST['undo_complete_task'])){
        $todo->undo($_POST['id']);
        $_SESSION["message"]="Task undone successfully";
        $_SESSION["msg_type"]="success";
        // echo "Task Undone";
     }
     elseif(isset($_POST['delete_task'])){
        $todo->delete($_POST['id']);
        $_SESSION["message"]="Task deleted successfully";
        $_SESSION["msg_type"]="success";
     }
     
}
$tasks = $todo->read();
?>
<?php if(isset($_SESSION["message"])):?>
<div class="notification-container">
    <div class="notification <?php echo $_SESSION["msg_type"]?>">
    <?php echo $_SESSION["message"] ?>
    <?php unset($_SESSION["message"]); ?>
            
    </div>

</div>
<?php endif; ?>
<div class=container>
<h1>Todo App</h1>

<!-- Add Task Form -->
<form method="POST">
    <input type="text" name="task" placeholder="Enter a new task" required="">
    <button type="submit" name="add_task">Add Task</button>
</form>

<!-- Display Tasks -->
<ul>
    <?php while($task = $tasks->fetch_assoc()):  ?>
    <li class="completed">
        <span class="<?php echo $task['is_completed']?'completed':''; ?>"><?php echo $task['task'];  ?></span>
        <div>
        <?php if(!$task['is_completed']):?>
            <!-- Complete Task -->
            <form method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
                <button class="complete" type="submit" name="complete_task">Complete</button>
            </form>
            <?php else: ?>
            <!-- Undo Completed Task -->
            <form method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
                <button class="undo" type="submit" name="undo_complete_task">Undo</button>
            </form>
                
            <?php endif; ?>
            <!-- Delete Task -->
            <form method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
                <button class="delete" type="submit" name="delete_task">Delete</button>
            </form>
        </div>
    </li>

    
    <?php endwhile; ?>
</ul>

</div>



<?php
include 'partials/footer.php';
?>