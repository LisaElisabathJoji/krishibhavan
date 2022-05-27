<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Krishi Bhavan | Employee Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="nav navbar-nav ml-auto">
      <li><a class="nav-item nav-link active" href="assistantofficerhome.php">Home <span class="sr-only">(current)</span></a></li>
      <li><a class="nav-item nav-link" href="assistantofficerservice.php">Services</a></li>
      <li><a class="nav-item nav-link" href="assistoffprofile.php">Profile</a></li>
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