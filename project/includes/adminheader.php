<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <div class="site-navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-collapse" class="collapse navbar-collapse">
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><img src="images/logo/logo.jpg" class="rounded" alt="Krishi Bhavan" width="100px" height="90px"></li>
              </ul>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="adminhome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="adminemployeeregister.php">Register New Employee</a></li>
                    <li><a href="adminviewservicedetails.php">View Services</a></li>
                    <li><a href="adminservicedetails.php">Add Service Details</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="adminprofile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <?php
                    echo $_SESSION["username"];
                    ?>
                    <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!--/ Col end -->
      </div>
      <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</body>

</html>