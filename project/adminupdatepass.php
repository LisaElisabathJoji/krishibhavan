<?php
include("includes/connection.php");
include("includes/adminheader.php");
if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Profile</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/jpeg" href="images/logo/title.jpeg">

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <style>
      body {
        background-image: url("images/bg_profile.jpeg");
        background-size: cover;
      }

      .events {
        margin: 10px 10px;
      }
    </style>

  </head>

  <body>
    <div class="mt-5">
      <div class="card mx-auto text-center" style="width: 28rem;">
        <div class="card-body">
          <img src="images/logo/user_icon.png" alt="User">

          <?php

          include("includes/connection.php");
          $eemail = $_SESSION["semail"];
          $edit = mysqli_query($con, "SELECT * FROM tb_userreg where email='$eemail'");
          $row = mysqli_fetch_array($edit);


          if (isset($_POST["submit"])) {

            $passw = $_POST["upass"];
            $confpas = $_POST["confirmpass"];

            mysqli_query($con, "UPDATE tb_userreg SET `password`='$passw',`confirmpass`='$confpas' WHERE username='$username'");

            header("location:adminprofile.php");
          }

          ?>

          <html>

          <body>

            <form action="#" method="POST" name="frmcstreg" onSubmit="return validatecstreg()">
              <table class="table">

                <tr>
                  <td>New Password : </td>
                  <td><input type="password" name="upass" placeholder="Password" value="" required /> </td>
                </tr>

                <tr>
                  <td>Confirm Password : </td>
                  <td><input type="password" name="confirmpass" placeholder="Confirm Password" value="" required /></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" class="btn btn-primary" name="submit" value="Edit" /></td>
                </tr>

              </table>
            </form>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

          </body>
          <script type="application/javascript">
            function validatepass() {

              var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
              var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
              var numericExpression = /^\d{10}$/; //Variable to validate only numbers

              if (document.frmcstreg.upass.value == "") {
                alert("Password should not be empty..");
                document.frmcstreg.upass.focus();
                return false;
              } else if (document.frmcstreg.upass.value.length <= 8) {
                alert("Password length should be more than or equal to 8 characters...");
                document.frmcstreg.upass.focus();
                return false;
              } else if (document.frmcstreg.upass.value.length > 16) {
                alert("Password length should be less than 16 characters...");
                document.frmcstreg.upass.focus();
                return false;
              } else if (document.frmcstreg.confirmpass.value == "") {
                alert("Confirm password should not be empty..");
                document.frmcstreg.confirmpass.focus();
                return false;
              } else if (document.frmcstreg.oldpass.value == document.frmcstreg.upass.value) {
                alert("Kindly enter a new password..");
                document.frmcstreg.oldpass.focus();
                return false;
              } else if (document.frmcstreg.upass.value != document.frmcstreg.confirmpass.value) {
                alert("New password and confirm password not matching...");
                document.frmcstreg.confirmpass.focus();
                return false;
              } else {
                return true;
              }
            }
          </script>

        <?php
      }

        ?>

          </html>