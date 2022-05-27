<?php
include("includes/connection.php");
?>
<header id="header" class="header-one">
  <?php
  if (isset($_SESSION["id"]) != session_id()) {
    include("includes/header.php");
  } else {
    include("includes/uheader.php");
  }
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
    <title>Services</title>

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
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Services</li>
                    </ol>
                  </nav>
                </div>
              </div><!-- Col end -->
            </div><!-- Row end -->
          </div><!-- Container end -->
        </div><!-- Banner text end -->
      </div><!-- Banner area end -->

      <section id="main-container" class="main-container pb-2">
        <div class="container">
          <div class="row">

            <?php
            $fetchService = "SELECT * FROM `tb_service_details` WHERE `status`!='0'";
            $fetchServiceResult = mysqli_query($con, $fetchService);
            if (mysqli_num_rows($fetchServiceResult) > 0) {
              while ($fetchServiceRow = mysqli_fetch_assoc($fetchServiceResult)) {
                echo "<div class='col-lg-4 col-md-6 mb-5'>
                <div class='ts-service-box'>
                  <div class='ts-service-image-wrapper'>
                    <img loading='lazy' class='w-100' src=" . $fetchServiceRow['service_image'] . " alt='service-image'>
                  </div>
                  <div class='d-flex'>
                    <div class='ts-service-box-img'>
                    </div>
                    <div class='ts-service-info'>
                      <h3 class='service-box-title'>" . $fetchServiceRow['service_name'] . "</h3>
                      <p>" . $fetchServiceRow['description'] . "</p>
                      <form method='post' action='readmore.php'>
                      <button class='btn learn-more d-inline-block' aria-label='service-details' name='readmorebutton' value=" . $fetchServiceRow['serv_id'] . ">
                      <i class='fa fa-caret-right'></i>Read more
                      </button>
                     </form>
                      <a class='learn-more d-inline-block float-right' href=" . $fetchServiceRow['apply_url'] . " aria-label='service-details'><i class='fa fa-caret-right'></i>Apply Now</a>
                    </div>
                  </div>
                </div>
              </div>";
              }
            }
            ?>
          </div>
          <!--Main row end-->
        </div>
        <!--Conatiner end -->
      </section>
      <!--Main container end -->

      <footer id="footer" class="footer bg-overlay">
        <?php include("includes/footer.php"); ?>
      </footer> <!-- Footer end -->


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