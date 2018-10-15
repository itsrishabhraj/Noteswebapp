<?php
    session_start();
    include("connection.php");

    $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
    $missingPassword = '<p><strong>Please enter your password!</strong></p>';

    $errors = "";

    if(empty($_POST["signin_email"])){
        $errors .= $missingEmail;   
    }
    else{
        $email = filter_var($_POST["signin_email"], FILTER_SANITIZE_EMAIL);
    }

    if(empty($_POST["signin_pwd"])){
        $errors .= $missingPassword;   
    }
    else{
        $password = filter_var($_POST["signin_pwd"], FILTER_SANITIZE_STRING);
    }

        //If there are any errors
    if(!empty($errors))
    {
        //print error message
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
        echo $resultMessage; 
        exit;  
    }
    else{
        //else: No errors
        //Prepare variables for the query
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        $password = hash('sha256', $password);
    }

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND activation = 'activated'";
    $result = mysqli_query($link, $sql);

    if(!$result)
    {
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }

    $count = mysqli_num_rows($result);
    if($count !== 1)
    {
        echo "<div class='alert alert-danger'>Wrong username or password</div>";
        exit;
    }
    else
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        if(empty($_POST['rememberme']))
        {
            echo "success";
        }
        else
        {
            $authentificator1 = bin2hex(openssl_random_pseudo_bytes(10));
            $authentificator2 = openssl_random_pseudo_bytes(20);

            function f1($a,$b){
                $c = $a.','.bin2hex($b);
                return $c;
            }

            $cookievalue = f1($authentificator1, $authentificator2);

            // time function is current time. Here time plus 10 days from now. 10 days X 24 hours X 60 minutes X 60 seconds. (In seconds)
            setcookie("rememberme", $cookievalue, time() + 864000);

            function f2($a){
                $c = hash('sha256', $a);
                return $c;
            }
            $f2authentificator2 = f2($authentificator2);

            $user_id = $_SESSION['user_id'];
            date_default_timezone_set("Asia/Kolkata");
            $expires = date('Y-m-d H:i:s', time() + 864000);

            $sql = "INSERT INTO rememberme (authentificator1, f2authentificator2, user_id, expires) VALUES ('$authentificator1', '$f2authentificator2', '$user_id', '$expires')";
            $result = mysqli_query($link, $sql);

            if(!$result)
            {
                echo '<div class="alert alert-danger">There was an error storing data to remember you next time.</div>';
            }
            else
            {
                echo 'success';
            }
        }
    }
?>