<?php
include("includes/connection.php");
include("includes/nav_assistant.php");
if (isset($_SESSION["id"]) != session_id()) {

    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {

?>

    <html>

    <head>
        <title>Officer | Services</title>

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
        <div class="row mb-5 ml-5">

        </div>
        <div class="row mb-5">
        </div>
        <div class="row mb-5 ml-5">
            <h3>Services</h3>
        </div>

        <div class="row ml-5">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex justify-content-center">
                        <h5 class="card-title"><a href="soilteststatus.php"> Soil Test</a></h5>
                    </div>
                </div>
            </div>
            <!--<div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body d-flex justify-content-center">
                    <h5 class="card-title"><a href=""> Soil Health Card</a></h5>
                </div>
            </div>
        </div>-->

    </body>

<?php
}
?>


    </html>