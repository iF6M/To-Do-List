<?php
include_once "conn.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['task'])&& !empty($_POST['task'])){
    $content = $_POST['task'];
    echo $content;
    $date = date("Y-m-d");
    $sql = $conn->prepare("INSERT INTO tasks (content,date) values (?,?)");
    $sql->bind_param("ss",$content,$date);
    if($sql->execute()){
        header("Location: index.php");
        exit();
    }else{
        echo "Task dose not inserted";
    }
}
}
?>