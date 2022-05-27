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
      <div class="card mx-auto text-center" style="width: 24rem;">
        <div class="card-body">
          <img src="images/logo/user_icon.png" alt="User">
          <?php
          include("includes/connection.php");

          $eemail = $_SESSION["semail"];
          $sql = "SELECT * FROM tb_userreg  where email='$eemail'";
          $result = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($result);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<h5 class=card-title>" . $row['name'] . "</h5>";
              echo "<p class=card-text>" . "Email : " . $row['email'] . "</p>";
              echo "<p class=card-text>" . "Phone Number : " . $row['phonenumber'] . "</p>";
            }
          }
          ?>
        </div>

        <div class="events"><a href="admineditprofile.php" class="btn btn-primary" style="width: 100%;">Edit Profile</a></div>
        <div class="events"><a href="adminupdatepass.php" class="btn btn-primary" style="width: 100%;">Update password</a></div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>

  </html>

<?php
}
?>