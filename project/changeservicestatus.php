<?php
include("includes/connection.php");

if (isset($_POST['deactivateButton'])) {
    $serviceId = $_POST['deactivateButton'];
    $deactivateService = "UPDATE `tb_service_details` SET `status`= '0' WHERE `serv_id`='$serviceId'";
    $deactivateServiceResult = mysqli_query($con, $deactivateService);
    if ($deactivateServiceResult) {
        header("location:adminviewservicedetails.php");
    }
}

if (isset($_POST['activateButton'])) {
    $serviceId = $_POST['activateButton'];
    $activateService = "UPDATE `tb_service_details` SET `status`= '1' WHERE `serv_id`='$serviceId'";
    $activateServiceResult = mysqli_query($con, $activateService);
    if ($activateServiceResult) {
        header("location:adminviewservicedetails.php");
    }
}
