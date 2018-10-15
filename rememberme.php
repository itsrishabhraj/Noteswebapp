<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        header("Location:mainloggedin.php");
    }

    if(!isset($_SESSION['user_id']) && !empty($_COOKIE['rememberme']))
    {
        list($authentificator1, $authentificator2) = explode(',', $_COOKIE['rememberme']);
        $authentificator2 = hex2bin($authentificator2);
        $f2authentificator2 = hash('sha256', $authentificator2);

            //Look for authentificator1 in the rememberme table
        $sql = "SELECT * FROM rememberme where authentificator1 = '$authentificator1'";
        $result = mysqli_query($link, $sql);

        if(!$result)
        {
            echo  '<div class="alert alert-danger">There was an error running the query.</div>'; 
            exit;
        }

        $count = mysqli_num_rows($result);

        if($count !== 1)
        {
            echo '<div class="alert alert-danger">Remember me process failed!</div>';
            exit;
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        $user_id = $row['user_id'];

        // $deletecookieid = $row['id'];
        

        //if authentificator2 does not match
        if(!hash_equals($row['f2authentificator2'], $f2authentificator2))
        {
            echo '<div class="alert alert-danger">hash_equals returned false.</div>';
            exit;
        }

        else
        {
            $sql = "SELECT * FROM users WHERE user_id = '$user_id' and activation = 'activated'";
            $result = mysqli_query($link, $sql);

            if(!$result)
            {
                echo  '<div class="alert alert-danger">There was an error running the query.</div>'; 
                exit;
            }

            $count = mysqli_num_rows($result);
            if($count !== 1)
            {
                echo '<div class="alert alert-danger">Remember me process failed!</div>';
                exit;
            }

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            header("Location:mainloggedin.php");
        }

    }
?>