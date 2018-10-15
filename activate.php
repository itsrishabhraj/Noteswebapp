<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Activate Your Account :)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 activation_box">
                <h1>Account Activation</h1>
                <?php
                if(!isset($_GET['email']) || !isset($_GET['key'])){
                    echo "<div class='alert alert-danger'>There is some kind of error. Please click on the link sent to your email for activation !!!</div>";
                    exit;
                }

                $email =  urldecode($_GET['email']);
               
                $key = $_GET['key'];

                $email = mysqli_real_escape_string($link, $email);
                $key = mysqli_real_escape_string($link, $key);

                $sql = "UPDATE users SET activation='activated' WHERE (email='$email' and activation='$key') LIMIT 1";
                $result = mysqli_query($link, $sql);

                if(mysqli_affected_rows($link) == 1){
                    echo "<div class='alert alert-success'><strong>Your Account has been activated.</strong></div>";
                    echo "<a href='index.php' type='button' class='btn-success btn-lg'>Log In</a>";
                }
                else {
                    echo "<div class='alert alert-alert'><strong>Your Account has not been activated.</strong></div>";
                    echo "<div class='alert alert-alert'><strong>".mysqli_error($link)."</strong></div>";
                }
                ?>
            </div>
        </div>    
    </div>
</body>
</html>