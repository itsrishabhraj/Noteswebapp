<?php
session_start();
include("connection.php");
$id = $_POST['id'];
$sql = "DELETE FROM notes WHERE id = '$id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo 'error';
}
if(mysqli_affected_rows($link) !== 1){
    echo 'error';
}

?>