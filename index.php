<?php require_once('./queryDB.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo List Php</title>
</head>
<body>
    <div id="evento" class="heading" onclick="alerta()">
        <h2>Todo list PHP y MySql</h2>
    </div>

    <?php require_once('./taskForm.php'); ?>

    <?php require_once('./search.php'); ?>

    <?php require_once('./task.php'); ?>

<script src="./helper.js"></script>
</body>
</html>