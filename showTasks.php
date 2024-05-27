<?php

function displayTask()
{
    include "conn.php";
    $sql = "SELECT * from tasks where done = 0";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<li>
                <input type='checkbox' name='done'value=1 id='taskCheckbox' data-id='$row[id]'>
                <span class='task-content'>$row[content]</span>
                <span class='date'><small>$row[date]</small></span>
                <a href='delete.php?task=$row[id]' class='delete-btn'>Delete</a>
                </li>";
            }
        }
    }
}

function displayDoneTask()
{
    include "conn.php";
    $sql2 = "SELECT * from tasks where done = 1";
    if ($result = mysqli_query($conn, $sql2)) {
        $counter = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $counter++;
                if ($counter >= 5) {
                    echo "
                    <details>
                    <summary>Show More</summary>
                    <li>
                    <input type='checkbox' checked name='undo'value=0 id='taskCheckbox' data-id='$row[id]'>
                    <span class='task-content'>$row[content]</span>
                    <span class='date'><small>$row[date]</small></span>
                    <a href='delete.php?task=$row[id]' class='delete-btn'>Delete</a>
                    </li>
                    </details>";
                }else{
                echo "<li>
                <input type='checkbox' checked name='undo'value=0 id='taskCheckbox' data-id='$row[id]'>
                <span class='task-content'>$row[content]</span>
                <span class='date'><small>$row[date]</small></span>
                <a href='delete.php?task=$row[id]' class='delete-btn'>Delete</a>
                </li>";
                }
            }
        }
    }
}
