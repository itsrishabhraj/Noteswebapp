<?php
$link = mysqli_connect("localhost", "root", "", "noteswebapp");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
    echo "error";
}
// else {
//     echo "Sucessfully Connected";
// }
    ?>
