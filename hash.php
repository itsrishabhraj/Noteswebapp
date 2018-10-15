<?php

    $password = "Abc1234";
    echo "Origional = ".$password;
    $password = hash('sha256', $password);
    echo "<br>Hashed = ".$password;
    $length = strlen($password);
    echo "<br>Length = ".$length;

    date_default_timezone_set("Asia/Kolkata");
    // Sets my own timestamp

    echo "<br>".date('Y-m-d H:i:s');
    // echo "<br>".date('Y-m-d H:i:s', time() + 1296000); 15 days from current time

    $rstring =  bin2hex(openssl_random_pseudo_bytes(10));
    echo "<br>Random String = ".$rstring;

    $length = strlen($rstring);
    echo "<br>Length = ".$length;

?>