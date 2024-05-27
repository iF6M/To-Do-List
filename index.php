<?php
include_once "showTasks.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <div>
        <h2>Add Task</h2>
        <form action="addTask.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Enter a task ...">
            <input type="submit" value="Add">
        </form>
    </div>
    <div>
        <h2>Your Tasks :</h2>
        <ul>
            <?php
            displayTask();
            ?>
        </ul>
    </div>
    <div>
        <h2>Your Done Tasks :</h2>
        <ul>
        <?php
            displayDoneTask();
            ?>
        </ul>
    </div>
</body>
<script>
document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        fetch('doneTask.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'id=' + this.dataset.id + '&done=' + this.checked,
        });
        location.reload();
    });
});
</script>
<script>
document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        fetch('undoTask.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'id=' + this.dataset.id + '&undo=' + this.checked,
        });
        location.reload();
    });
});
</script>
</html>