<form method="POST" action="index.php">
<?php
     require_once('./errorAlert.php'); ?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="add_btn" name="submit">Add Task</button>
        <br><br>
        <input id="search" type="text" name="search" class="task_input">
        <button type="button" class="add_btn" name="search" onclick="buscar()">Search Task</button>
</form>