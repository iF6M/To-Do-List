<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "to-do";

$conn = mysqli_connect($host,$username,$pass,$dbname);
if(!$conn){
    echo "Database is not linked";
}
?>