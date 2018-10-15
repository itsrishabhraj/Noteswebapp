<?php  
    if(isset($_SESSION['user_id']) && $_GET['logout'] == 1)
    {
        session_destroy();
        $_COOKIE('rememberme', '', time() - 3600);
    }
?>