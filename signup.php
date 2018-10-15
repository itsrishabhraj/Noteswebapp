<?php

  session_start();
  include("connection.php");

  $missingUsername = '<p><strong>Please enter a username!</strong></p>';
  $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
  $invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
  $missingPassword = '<p><strong>Please enter a Password!</strong></p>';
  $invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter, one small letter and one number!</strong></p>';
  $differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
  $missingPassword2 = '<p><strong>Please confirm your password</strong></p>';
  // echo "<div class='alert alert-danger'>Everything is working absolutely fine !!!</div>";
  $errors = "";
  // Getting Username
  if(empty($_POST["name"])){
    $errors .= $missingUsername;
  }
  else{
    $username = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  }

// Geting email
  if(empty($_POST["email"])){
    $errors .= $missingEmail;
  }
  else{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
      $errors .= $invalidEmail;
    }
  }

  // Geting Passwords
  if (empty($_POST["pwd"])) {
    $errors .= $missingPassword;
  }
  elseif (!(strlen($_POST["pwd"])>6 && preg_match('/[A-Z]/',$_POST["pwd"]) && preg_match('/[0-9]/',$_POST["pwd"]) && preg_match('/[a-z]/',$_POST["pwd"]))) {
    $errors .= $invalidPassword;
  }
  else {
    $password = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);

    if (empty($_POST["confirm-pwd"])) {
      $errors .= $missingPassword2;
    }
    else {
      $password2 = filter_var($_POST["confirm-pwd"], FILTER_SANITIZE_STRING);

      if ($password != $password2) {
        $errors .= $differentPassword;
      }
    }
  }

  // If Errors then Show
  if(!empty($errors)){
    $displayerrors = "<div class='alert alert-danger'".$errors."</div>";
    echo $displayerrors;
    exit;
  }

  // Preparing extracted variables for query
  $username = mysqli_real_escape_string($link, $username);
  $email = mysqli_real_escape_string($link, $email);
  // Hashing is a one way function and hence can't be reversed practically.
  // There is difference between hashing and encrypting. Encrypted data can be decrypted but hashed data can't be.
  $password = hash("sha256", $password);

  // Check if username already exists in database
  // Use mysqli_num_rows in checking only, not during Inserting. It works only with already available data.
  $sql = "SELECT * FROM users where username = '$username'";
  $result = mysqli_query($link, $sql);

  if (!$result) {
    echo "<div class='alert alert-danger'><strong>Error running the username check query</strong></div>";
    exit;
  }
  $results = mysqli_num_rows($result);
  if ($results) {
    echo "<div class='alert alert-danger'><strong>This username is already registered. Do you want to Log In ?</strong></div>";
    exit;
  }

  // Check if email already exists in database
  $sql = "SELECT * FROM users where email = '$email'";
  $result = mysqli_query($link, $sql);

  if (!$result) {
    echo "<div class='alert alert-danger'><strong>Error running the username check query</strong></div>";
    exit;
  }
  $results = mysqli_num_rows($result);
  if ($results) {
    echo "<div class='alert alert-danger'><strong>This email is already registered. Do you want to Log In ?</strong></div>";
    exit;
  }

  // Creating a unique activation code
  $activationkey = bin2hex(openssl_random_pseudo_bytes(16));
  // Created a 32 characters long string

  // Inserting user details and activation code in the users table
  // never use ['] in users, insted use [`] or use nothing.

  $sql = "INSERT INTO users (username, email, password, activation) VALUES ('$username', '$email', '$password', '$activationkey')";
  $result = mysqli_query($link, $sql);
  if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
    exit;
  }

  // Send an email to the user's email with an activation link consisting the email and the activation key
  $message = "Click on this link to activate your account: \n\n";
  $message .= "https://localhost/noteswebapp/activate.php?email=".urlencode($email)."&key=".$activationkey;
  if (mail($email,"Account Confirmation",$message,"From:"."sendingmail@yourdomain.com")) {
    echo "<div class='alert alert-success'><strong>Thank you for registering. A confirmation email has been sent to your email: ".$email.". Please click on the activation link to confirm your account</strong></div>";
  }
?>