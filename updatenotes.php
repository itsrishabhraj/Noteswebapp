<?php
session_start();
include("connection.php");
$id = $_POST['id'];
$note = htmlspecialchars($_POST['note'], ENT_QUOTES);
$time = time();

$sql = "UPDATE `notes` SET `note` = '$note', `time` = '$time' WHERE `notes`.`id` = '$id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo 'error';
}
if(mysqli_affected_rows($link) !== 1)
{
    echo 'success';
}
?>