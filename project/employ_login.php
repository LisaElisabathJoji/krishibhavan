<?php
session_start();
include("includes/connection.php");
$email = $_POST["Email"];
$password = $_POST["password"];

$sql = "SELECT * FROM `tbl_employreg` WHERE `Email`='$email' AND `password`='$password' AND `status`!=0";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
		$_SESSION["id"] = session_id();
		$_SESSION["userid"] = $row['emp_id'];
		$_SESSION["username"] = $row['Name'];
		$_SESSION["status"] = $row['status'];

		if ($row['status'] != 2) {
			echo "sorry please wait for admin approval";
		} else {
			if ($row['Type_Id'] == '1') {
				header("location:officerhome.php");
			} elseif ($row['Type_Id'] == '2') {
				header("location:assistantofficerhome.php");
			} else {
				header("location:emplogin.html");
			}
		}
	}
} else {
	echo "incorrect credentials";
}
