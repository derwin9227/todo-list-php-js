<?php
$errors = "";
$search ="";
    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'todo_list_php');
    if(isset($_POST['submit'])){
        $task = $_POST['task'];
        if(empty($task)){
            $errors= "you must fill in the task";
        }else {
            mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
            header('location: index.php');
        }
    }

    if(isset($_GET['del_task'])){
        $id = $_GET['del_task'];
        mysqli_query($db, "DELETE FROM tasks WHERE id='$id'");
        header('location: index.php');
    }

    if(isset($_GET['idTask']) && isset($_GET['newTask'])){
        echo('id= '.$id." tarea= ".$newTask);
        $newTask = $_GET['newTask'];
        $id = $_GET['idTask'];
        mysqli_query($db, "UPDATE tasks SET task='$newTask' WHERE id=$id");
        header('location: index.php');
    }
    $tasks = mysqli_query($db, "SELECT * FROM tasks");
