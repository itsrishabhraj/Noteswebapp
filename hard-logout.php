<?php
    session_start();
    session_destroy();
    echo "<h1>Session Destroyed !!!</h1>";


    setcookie("rememberme", "", time()-3600);
    echo "<h1>Cookie Destroyed !!!</h1>";

    ?>