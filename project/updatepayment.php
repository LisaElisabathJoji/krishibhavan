<?php
include("includes/connection.php");
if (isset($_POST['paybutton'])) {
    $repairid = $_POST['paybutton'];
    $updateTransactionId = "UPDATE `tbl_soiltest` SET `paymentstatus`='1' WHERE `Id`='$repairid'";
    echo $updateTransactionId;
    $result = mysqli_query($con, $updateTransactionId);
    if ($result) {
        header('location:viewtestreq.php');
    }
} else {
    echo "asdasdasd";
    echo $_POST['paybutton'];
}
