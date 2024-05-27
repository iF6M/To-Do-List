<?php
include_once "conn.php";
if(isset($_GET['task'])){
    $id=$_GET['task'];
    $sql = $conn->prepare("DELETE from tasks where id = $id");
    if($sql->execute()){
        header("Location: index.php");
        exit();
    }else{
        echo "Task delete update not complete";
    }
}else{
    echo "no get $_GET[task] ";
}
?>