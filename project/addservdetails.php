<?php
session_start();
 include("includes/connection.php");
 $_SESSION["id"]=session_id();

 if(isset($_POST["adds"]))
      {

        $sername=$_POST["sname"];
        $des=$_POST["desc"];
        $sch=$_POST["schem"];
        $compon=$_POST["comp"];
        $eligible=$_POST["elig"];

      mysqli_query($con,"INSERT INTO `tb_service_details`(`service_name`, `description`, `scheme`, `component`, `eligibility`)VALUES ('$sername','$des','$sch','$compon','$eligible')");

      header("location:adminviewservicedetails.php");
      }
