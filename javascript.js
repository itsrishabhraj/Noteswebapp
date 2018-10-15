$(document).ready(function () {
    // ##########SIGNUP##########
  $("#sign-up-modal-id").submit(function (event) {
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    // $("#informationsignup").html(datatopost[1].value);
    // console.log(datatopost);


    // AJAX
    $.ajax({
      url: "signup.php",
      type: "POST",
      data: datatopost,
      success: function (data) {
        if (data) {
          $("#informationsignup").html(data);
        }
      },
      error: function () {
        $("#informationsignup").html("<div class='alert alert-danger'>There is some error with the ajax call</div>");
      }
    });
    // AJAX
  });//signupmodal.submit
});//document.ready
// ##########SIGNUP##########

// ##########LOGIN##########
$(document).ready(function () {
  $("#sign-in-modal-id").submit(function (event) {
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    // $("#login_message").html(datatopost[1].value);
    // console.log(datatopost);


    // AJAX
    $.ajax({
      url: "login.php",
      type: "POST",
      data: datatopost,
      success: function (data) {
        if (data == "success") {
          window.location = "mainloggedin.php";
        }
        else{
          $("#login_message").html(data);
        }
      },
      error: function () {
        $("#login_message").html("<div class='alert alert-danger'>There is some error with the ajax call</div>");
      }
    });
    // AJAX
  });//loginmodal.submit
    // ##########LOGIN##########
});//document.ready

// ##########FORGET PASSWORD##########
$(document).ready(function () {
  $("#forgot-password-modal-id").submit(function (event) {
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    // $("#login_message").html(datatopost[1].value);
    // console.log(datatopost);


    // AJAX
    $.ajax({
      url: "forgot-password.php",
      type: "POST",
      data: datatopost,
      success: function (data) {
          $("#forgot_password_message").html(data);
      },
      error: function () {
        $("#forgot_password_message").html("<div class='alert alert-danger'>There is some error with the ajax call</div>");
      }
    });
    // AJAX
  });//forgot-password-modal.submit
    // ##########Forgot Passsword.submit##########
});//document.ready
