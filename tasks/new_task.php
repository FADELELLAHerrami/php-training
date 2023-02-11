<?php
    require_once('../app/models/task.php');
    $newTask = new Task();
    $task = $newTask->updateTask(2,"learn laravel","watch tuto in ytb");

?>