<?php
include("includes/connection.php");
include("includes/uheader.php");
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

            $name = $_POST["uname"];
            $number = $_POST["phone"];
            //$c=$_SESSION['id'];

            mysqli_query($con, "UPDATE tb_userreg SET `name`='$name',`phonenumber`='$number' WHERE email='$eemail'");
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='uprofile.php';
          </script>");
          }

          ?>
          <script>
            function validate() {
              var name = document.getElementById("usna").value;
              var letters = /^[a-zA-Z\s]*$/;
              if (!name.match(letters)) {
                alert("Please enter name correctly..");
                document.getElementById("uname").value = "";
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
          </script>

          <form action="#" method="POST">
            <table class="table">
              <tr>
                <td>Name:</td>
                <td><input type="text" name="uname" id="uname" value="<?php echo $row['name'] ?>" onblur="validate()" required /> </td>
              </tr>

              <tr>
                <td>Phone number:</td>
                <td><input type="number" name="phone" id="phone" value="<?php echo $row['phonenumber'] ?>" onblur="validate2()" required /></td>
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