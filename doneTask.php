<?php
    include_once "conn.php";
if(isset($_POST['id'])){
$id = $_POST['id'];
$sql = $conn->prepare("UPDATE tasks SET done = 1 where id = $id");
if($sql->execute()){
    header("Location: index.php");
    exit();
}
}
?>