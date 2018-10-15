<?php 
  session_start();
  if(!isset($_SESSION['user_id']))
  {
    header("Location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Notes - NotesWebApp</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="loggedinstyle.css" type="text/css">
  <!-- Bootstrap -->
  </head>
  <body>
    <!-- Navigation -->
    <?php include"logged-in-navigation.php" ?>
    <!-- Navigation End -->

    <div id="collset" class="container-fluid">
    <!-- Alert Message Printing -->
    <div class="row">
      <div class="col-md-6 offset-md-3 alert alert-danger collapse" id="alert">
        <a class="close" data-dismiss="alert">
          &times;
        </a>
        <p id="alertContent"></p>
      </div>
    </div>
    <!-- Alert Message Printing -->
      <div class="row pb-5">
        <div class="col-md-6 offset-md-3">
          <div class="buttons">
            <button type="button" class="btn btn-info btn-lg" name="button" id="addNote">Add Note</button>
            <button type="button" class="btn btn-info btn-lg float-right" name="button" id="Editbutton">Edit</button>
            <button id="DoneButton" type="button" class="btn btn-success btn-lg float-right" name="button">Done</button>
            <button id="AllNotesButton" type="button" class="btn btn-info btn-lg" name="button">All Notes</button>
            <div id="preloader"><img height="50px" src="preloader.gif"></div>
          </div>
          <div id="notepad">
            <textarea rows="10" id="textarea"></textarea>
          </div>
          <div id="notes" class="notes">
        <!--Ajax call to a php file-->
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include"footer.php" ?>
    <!-- Footer -->

    <!-- notes external js file -->
    <script src="mynotes.js"></script>
    <!-- notes external js file -->

  </body>
</html>
