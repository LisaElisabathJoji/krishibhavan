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
    <title>Soil test Request</title>

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
                      <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">soil test</li>
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

            <div class="col-xl-3 col-lg-4">
              <div class="sidebar sidebar-left">
                <div class="widget">
                  <h3 class="widget-title"></h3>
                  <ul class="nav service-menu">
                    <li class="active"><a href="#">View Request</a></li>
                    <li><a href="soiltest.php">Soil Test Application</a></li>

                  </ul>
                </div><!-- Widget end -->
              </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
              <div class="container">
                <h4 class="bg-success text-light">Soil Test</h4>
                <?php
                //$upd=$_GET["ud"];
                $query = "SELECT * FROM tbl_soiltest ";
                $result = mysqli_query($con, $query);

                echo "<table class='table table-bordered table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Sl No.</th>";
                echo "<th>Date Applied</th>";
                echo "<th>Survey Number</th>";
                echo "<th>Land Name</th>";
                echo "<th>Land Area (in cent)</th>";
                echo "<th>Soil Type</th>";
                echo "<th>Status</th>";

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                $c = 0;
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                ?>
                  <td><?php echo ++$c; ?></td>
                  <?php
                  echo "<td>" . $row['date'] . "</td>";
                  echo "<td>" . $row['surveynumber'] . "</td>";
                  echo "<td>" . $row['landname'] . "</td>";
                  echo "<td>" . $row['landarea'] . "</td>";
                  echo "<td>" . $row['soiltype'] . "</td>";

                  ?>

                  <td><a class="btn btn-primary" role="button" href="soiltestprint.php?upd=<?php echo $row["reg_id"]; ?> ">Show Action</a></td>
                  <td>
                    <?php
                    if ($row['paymentstatus' == 1]) {
                    ?>
                      <a class="btn btn-success" role="button">PAYMENT SUCCESS</a>
                    <?php
                    } else {
                    ?>
                      <a class="btn btn-primary" role="button" href="paymentgateway.php?soilid=<?php echo $row["Id"]; ?>">Pay Now</a>
                    <?php
                    }
                    ?>
                  </td>


                <?php
                  echo "</td>";
                  echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
                // Free result set                           
                ?>
                </form>
              </div>
            </div>

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