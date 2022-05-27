<?php
include("includes/connection.php");
include("includes/nav_assistant.php");
if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='emplogin.html';
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

          //include("includes/connection.php");
          $email = $_SESSION["Email"];
          $edit = mysqli_query($con, "SELECT * FROM tbl_employreg where `Email`='$email'");
          $row = mysqli_fetch_array($edit);


          if (isset($_POST["submit"])) {

            $name = $_POST["name"];
            $addr = $_POST["address"];
            $email = $_POST["email"];
            $number = $_POST["phone"];
            //$c=$_SESSION['id'];

            mysqli_query($con, "UPDATE tbl_employreg SET `Name`='$name', `Address`='$addr', `Email`='$email',`phone`='$number' WHERE ``=''");

            header("location:assistoffprofile.php");
          }

          ?>
          <script>
            function validate() {
              var name = document.getElementById("usna").value;
              var letters = /^[a-zA-Z\s]*$/;
              if (!name.match(letters)) {
                alert("Please enter name correctly..");
                document.getElementById("usna").value = "";
              }
            }

            function validate1() {
              var email = document.getElementById("em1").value;
              var pat = /^[a-z.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
              if (!email.match(pat)) {
                alert("Please enter valid email");
                document.getElementById("em1").value = "";
              }
            }

            function validate2() {
              var phone = document.forms["myForm"]["phone"].value;
              var phoneNum = /^\d{10}$/;
              if (phone.value.match(phoneNum)) {
                return true;
              } else {
                document.getElementById("phone").className = document.getElementById("phone").className + " Please enter a valid phone number";
                return false;
              }
            }

            function validate3() {
              var name = document.getElementById("address").value;
              var letters = /^[a-zA-Z\s]*$/;
              if (!name.match(letters)) {
                alert("Please enter address correctly..");
                document.getElementById("address").value = "";
              }
            }
          </script>

          <form action="#" method="POST">
            <table class="table">
              <tr>
                <td>Name:</td>
                <td><input type="text" name="usna" id="usna" value="<?php echo $row['Name'] ?>" onblur="validate()" required /> </td>
              </tr>

              <tr>
                <td>Address:</td>
                <td><input type="text" name="address" id="address" value="<?php echo $row['Address'] ?>" onblur="validate3()" required /> </td>
              </tr>

              <tr>
                <td>Email:</td>
                <td><input type="text" name="em1" id="em1" value="<?php echo $row['Email'] ?>" onblur="validate1()" required /></td>
              </tr>

              <tr>
                <td>Phone number:</td>
                <td><input type="number" name="phone" id="phone" value="<?php echo $row['phone'] ?>" onblur="validate2()" required /></td>
              </tr>

              <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary" name="submit" value="Edit" required /></td>
              </tr>

            </table>
          </form>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
  <script type="application/javascript">
    function validatecstreg() {

      var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
      var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
      var numericExpression = /^\d{10}$/; //Variable to validate only numbers
      var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID
      if (document.frmcstreg.uame.value == "") {
        alert("User name should not be empty..");
        document.frmcstreg.uame.focus();
        return false;
      } else if (document.frmcstreg.umail.value == "") {
        alert("Kindly enter Email ID..");
        document.frmcstreg.umail.focus();
        return false;
      } else if (!document.frmcstreg.umail.value.match(emailExp)) {
        alert("Kindly enter Valid Email ID.");
        document.frmcstreg.umail.focus();
        return false;
      } else if (document.frmcstreg.uphone.value == "") {
        alert("Kindly enter mobile Number.");
        document.frmcstreg.uphone.focus();
        return false;
      } else if (!document.frmcstreg.uphone.value.match(numericExpression)) {
        alert("Kindly enter valid mobile number..");
        document.frmcstreg.uphone.focus();
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