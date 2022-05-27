<?php
include("includes/connection.php");
?>
<header id="header" class="header-one">
  <?php
  include("includes/uheader.php");
  ?>
</header>
<?php

if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Services Details</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/jpeg" href="images/logo/title.jpeg">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>
    <div class="body-inner">
      <div id="banner-area" class="banner-area" style="background-image:url(images/banner/b2.png)">
        <div class="banner-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Service</h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="userhome.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Service Single</li>
                    </ol>
                  </nav>
                </div>
              </div><!-- Col end -->
            </div><!-- Row end -->
          </div><!-- Container end -->
        </div><!-- Banner text end -->
      </div><!-- Banner area end -->

      <section id="main-container" class="main-container">
        <div class="container">
          <div class="row">

            <div class="col-xl-3 col-lg-2">
              <div class="sidebar sidebar-left">
                <div class="widget">
                  <h3 class="widget-title"></h3>
                  <ul class="nav service-menu">
                    <li class="active"><a href="calreliefdetails.php">Calamity Relief Assistance</a></li>
                    <li><a href="paddydetails.php">Paddy Royalty</a></li>
                    <li><a href="#">Base Price</a></li>
                    <!--<li><a href="cropinsdetails.php">Crop Insurance</a></li>-->
                  </ul>
                </div><!-- Widget end -->

              </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
              <div class="content-inner-page">
                <h3 class="bg-danger text-light">Service Details</h3>
                <div class="container">

                  <?php

                  $sql = "SELECT * FROM tb_service_details WHERE `serv_id`='13'";
                  $result = mysqli_query($con, $sql);
                  $rows = mysqli_num_rows($result);
                  echo "<table class='table table-bordered' >";

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<th class='table-success'>";
                      echo "Service-Name";
                      echo "</th>";
                      echo "<td>";
                      echo $row['service_name'];
                      echo "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<th class='table-success'>";
                      echo "Description";
                      echo "</th>";
                      echo "<td>";
                      echo $row['description'];
                      echo "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<th class='table-success'>";
                      echo "Scheme";
                      echo "</th>";
                      echo "<td>";
                      echo $row['scheme'];
                      echo "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<th class='table-success'>";
                      echo "Component";
                      echo "</th>";
                      echo "<td>";
                      echo " ";
                      echo "</td>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<th class='table-success'>";
                      echo "Eligibility Criteria";
                      echo "</th>";
                      echo "<td>";
                      echo $row['eligibility'];
                      echo "</td>";
                      echo "</tr>";
                    }
                  }
                  ?>
                  <tr>
                    <td></td>
                    <td><a class="btn btn-primary" role="button" href="a.php?upd=<?php echo $row["serv_id"]; ?> ">Apply</a></td>
                  </tr>
                  <?php
                  echo "</table>";
                  ?>

                </div>
              </div><!-- Content inner end -->
            </div><!-- Content Col end -->
          </div><!-- Main row end -->
        </div><!-- Conatiner end -->
      </section><!-- Main container end -->

      <footer id="footer" class="footer bg-overlay">
        <?php include("includes/footer.php"); ?>
      </footer><!-- Footer end -->

      <!-- Javascript Files
  ================================================== -->

      <!-- initialize jQuery Library -->
      <script src="plugins/jQuery/jquery.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
      <!-- Slick Carousel -->
      <script src="plugins/slick/slick.min.js"></script>
      <script src="plugins/slick/slick-animation.min.js"></script>
      <!-- Color box -->
      <script src="plugins/colorbox/jquery.colorbox.js"></script>
      <!-- shuffle -->
      <script src="plugins/shuffle/shuffle.min.js" defer></script>

      <!-- Template custom -->
      <script src="js/script.js"></script>

    </div><!-- Body inner end -->
  </body>

<?php
}

?>

  </html>