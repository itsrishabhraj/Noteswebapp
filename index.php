<?php 
  include ("connection.php");
  include ("rememberme.php");
  include ("logout.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NotesWebApp</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <!-- Bootstrap -->
  <script src="javascript.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- SignUp Modal -->
    <?php include"free-sign-up-modal.php" ?>
    <!-- SignUp Modal -->
    <!-- SignIn Modal -->
    <?php include"sign-in-modal.php" ?>
    <!-- SignIn Modal -->
    <!-- Forgot Password Modal -->
    <?php include"forgot-password-modal.php" ?>
    <!-- Forgot Password Modal -->
    <!-- Navigation -->
    <?php include"navigation.php" ?>
    <!-- Navigation End -->
    <!-- JUmbotron -->
    <?php include"jumbotron.php" ?>
    <!-- Jumbotron Done -->
    <!-- Footer -->
    <?php include"footer.php" ?>
    <!-- Footer -->
  </body>
</html>