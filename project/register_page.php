<?php
include("includes/connection.php");

if (isset($_POST["upass"])) {
  $name = $_POST["uame"];
  $email = $_POST["umail"];
  $phone = $_POST["uphone"];
  $password = md5($_POST["upass"]);

  $query = "SELECT * FROM `tb_userreg` WHERE `email`='$email' AND `status` !=0";
  $result1 = mysqli_query($con, $query);
  if (mysqli_num_rows($result1) > 0) {

    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration failed. User already exist');
        window.location.href='user_registration.php';
      </script>");
  } else {
    if (isset($_POST["submit1"])) {
      $sql = "INSERT INTO `tb_userreg`(`name`, `email`, `phonenumber`, `password`) VALUES ('$name','$email','$phone','$password')";

      $res = mysqli_query($con, $sql);
      if ($res) {
        echo ("<script LANGUAGE='JavaScript'>
          	window.location.href='login.php';
        		</script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
          	window.location.href='user_registration.php';
        		</script>");
      }
    }
  }
}
