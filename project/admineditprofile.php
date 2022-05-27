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
          $eemail = $_SESSION["semail"];
          $edit = mysqli_query($con, "SELECT * FROM tb_userreg where email='$eemail'");
          $row = mysqli_fetch_array($edit);

          if (isset($_POST["submit"])) {

            $name = $_POST["uname"];
            $number = $_POST["PhnNo"];

            mysqli_query($con, "UPDATE tb_userreg SET `name`='$name',`phonenumber`='$number' WHERE username='$username'");

            header("location:adminprofile.php");
          }

          ?>
          <script>
            function validate() {
              var name = document.getElementById("uname").value;
              var letters = /^[a-zA-Z\s]*$/;
              if (!name.match(letters)) {
                alert("Please enter name correctly..");
                document.getElementById("usna").value = "";
              }
            }


            function Phone() {
              var phone = document.forms["Register"]["PhnNo"];
              var phn = /^\(?([1-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

              if (phone.value == "") {
                document.getElementById("Ephn").innerHTML = "Please enter your phone no";
                phone.focus();
                return false;
              } else if (phone.value.match(phn)) {
                document.getElementById("Ephn").innerHTML = "";
                document.Register.submit.focus();
                return true;
              } else {
                document.getElementById("Ephn").innerHTML = "Invalid Phone No";
                phone.focus();
                return false;

              }
            }
          </script>

          <form action="#" method="POST" name="Register">
            <table class="table">
              <tr>
                <td>Name:</td>
                <td><input type="text" name="uname" id="uname" value="<?php echo $row['name'] ?>" onblur="validate()" required /> </td>
                <label><span class="textfieldRequiredMsg"></span></label>
              </tr>

              </tr>

              <tr>
                <td>Phone number:</td>
                <td><input type="number" name="PhnNo" value="<?php echo $row['phonenumber'] ?>" onblur="Phone()" required /></td>
                <font color="red"> <label id="Ephn"> </label> </font>
                <label><span class="textfieldRequiredMsg"></span></label>

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


<?php
}

?>

  </html>