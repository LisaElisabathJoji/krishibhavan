<?php
include("includes/connection.php");
include("includes/nav1.php");
if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {

?>

  <html>

  <head>
    <title>Officer Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      h3 {
        justify-content: center;
      }
    </style>

  </head>

  <body>
    <div class="mt-5">
      <div class="card mx-auto text-center" style="width: 24rem;">
        <div class="card-body">
          <img src="images/logo/user_icon.png" alt="User">
          <?php
          $username = $_SESSION['username'];
          $sql = "SELECT * FROM tb_userreg  where username='$username'";
          $result = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($result);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<h5 class=card-title>" . $row['name'] . "</h5>";
              echo "<p class=card-text>" . "Username : " . $row['username'] . "</p>";
              echo "<p class=card-text>" . "Email : " . $row['email'] . "</p>";
              echo "<p class=card-text>" . "Phone Number : " . $row['phonenumber'] . "</p>";
            }
          }
          ?>
        </div>
  </body>

<?php
}
?>


  </html>