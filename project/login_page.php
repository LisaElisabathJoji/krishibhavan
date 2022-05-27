<?php
session_start();
include('includes/header.php');
include('includes/connection.php');

if (isset($_POST['submit'])) {
  $userEmail = $_POST['userEmail'];
  $password = md5(($_POST['upass']));
  $query = "SELECT * FROM `tb_userreg` WHERE `email`='$userEmail' AND `password`='$password' AND `status`!=0";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $_SESSION["id"] = session_id();
      $_SESSION["userid"] = $row['reg_id'];
      $_SESSION["username"] = $row['name'];
      $_SESSION["semail"] = $row['email'];
      $_SESSION["status"] = $row['status'];

      if ($_SESSION["status"] == 1) {
        echo ("<script LANGUAGE='JavaScript'> window.location.href='userhome.php'; </script>");
      } else if ($_SESSION["status"] == 2) {
        echo ("<script LANGUAGE='JavaScript'>window.location.href='adminhome.php'; </script>");
      } else {
        session_destroy();
        echo ("<script LANGUAGE='JavaScript'>window.location.href='login.php'; </script>");
      }
    }
  } else {
    echo ("<script LANGUAGE='JavaScript'>
              window.alert('Invalid user');
              window.location.href='login.php';
            </script>");
  }
}
