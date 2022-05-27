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

      <li><a class="nav-item nav-link active" href="officerhome.php">Home <span class="sr-only">(current)</span></a></li>

      <div class="btn-group">
        <button type="button" class="btn btn-info">Services</button>
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="officerservice.php">View all services</a>
          <a class="dropdown-item" href="cropinsurancestatus.php">Crop insurance requests</a>
          <a class="dropdown-item" href="paddyreqstatus.php">Paddy royalty requests</a>
          <a class="dropdown-item" href="basepricestatus.php">Crop base price requests</a>
          <div class="dropdown-divider"></div>
        </div>
      </div>


      <li class="nav-item dropdown active">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <?php
          echo $_SESSION["username"];
          ?>
          <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="officerpro.php">Profile</a></li>
          <li> <a class="dropdown-item" href="logout.php">logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>