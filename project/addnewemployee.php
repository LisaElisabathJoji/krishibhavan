<?php
session_start();
include("includes/connection.php");
$_SESSION["id"] = session_id();

if (isset($_POST["adds"])) {

  $etype = $_POST["etype"];
  $ename = $_POST["ename"];
  $eadd = $_POST["eadd"];
  $eemail = $_POST["eemail"];
  $ephone = $_POST["ephone"];
  $epass = $_POST["epass"];

  mysqli_query($con, "INSERT INTO `tbl_employreg`(`Type_Id`, `Name`, `Address`, `Email`, `phone`, `password`) VALUES ('$etype','$ename','$eadd','$eemail','$ephone','$epass')");

  header("location:adminemployeeregister.php");
}
