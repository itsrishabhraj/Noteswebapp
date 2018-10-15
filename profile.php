<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Profile - NotesWebApp</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="loggedinstyle.css" type="text/css">
  <style>
    #profile-page-container{
      text-align: center;
      margin-top: 100px;
    }
  </style>
  <!-- Bootstrap -->
  <!-- Popover Script -->
  <script>
    $(document).ready(function(){
      $('#username').popover({content:"Click to change Username", trigger:"hover", placement:"auto"});
      $('#email').popover({content:"Click to change Email", trigger:"hover", placement:"auto"});
      $('#password').popover({content:"Click to change Password", trigger:"hover", placement:"auto"});
    });
  </script>
  <!-- Popover Script -->
  </head>
  <body>
    <!-- Navigation -->
    <?php include"logged-in-navigation.php" ?>
    <!-- Navigation End -->

      <br>
    <div id="profile-page-container" class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">

          <!-- Heading -->
          <div class="table-responsive">
            <table class="table table-dark table-bordered">
              <tr><td><h2>General Account Settings</h2></td></tr></table></div>
          <!-- Heading -->

          <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered">
              <tr id="username">
                <td>UserName</td>
                <td><?php echo $_SESSION['username']; ?></td>
              </tr>
              <tr id="email">
                <td>Email</td>
                <td><?php echo $_SESSION['email']; ?></td>
              </tr>
              <tr id="password">
                <td>Password</td>
                <td>*************</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include"footer.php" ?>
    <!-- Footer -->
  </body>
</html>
