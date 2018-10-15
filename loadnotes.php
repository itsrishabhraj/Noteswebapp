<?php
session_start();
$user_id = $_SESSION['user_id'];
include("connection.php");
date_default_timezone_set("Asia/Kolkata");

$sql = "DELETE FROM notes WHERE note = ''";
$result = mysqli_query($link, $sql);
if(!$result){
      echo "<div class='alert alert-warning'>An Error Occured</div>";
      exit;
}

$sql = "SELECT * FROM notes WHERE user_id = '$user_id' ORDER BY time DESC";
$result = mysqli_query($link, $sql);
if($result){
      if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  $note = $row['note'];
                  $time = $row['time'];
                  $time = date("F d, Y h:i:s A" ,$time);
                  $note_id = $row['id'];
                  echo "<div class='row'>
                        <div class='delete col-md-3 col-4'>
                        <button class='delete btn-lg btn-danger btn-block'>Delete</button>
                        </div>
                        <div class='noteheader col-12' id='$note_id'>
                        <div class='text'>$note</div>
                        <div class='timetext'>$time</div>
                        </div>
                        </div>";
            }
      }
      else{
            echo "<div class='alert alert-warning text-center'>You haven't created any notes yet ! </div>";
            exit;
      }
}
else{
      echo "<div class='alert alert-warning'>An Error Occured</div>";
      exit;
}

// echo "<div class='noteheader'>
//       <div class='text'>This is a sample text</div>
//       <div class='timetext'>May 20, 2018 08:07:07 PM</div>
//       </div>";

//       echo "<div class='noteheader'>
//       <div class='text'>This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text</div>
//       <div class='timetext'>May 20, 2018 08:07:07 PM</div>
//       </div>";
      
?>