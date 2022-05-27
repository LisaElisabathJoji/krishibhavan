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
    <title>About</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/png" href="images/logo/title.jpeg">

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
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <p class="breadcrumb-item active" aria-current="page">Farmers’ Portal is an endeavour in this direction to create one stop shop for meeting all informational needs relating to Agriculture, Animal Husbandry and Fisheries sectors production, sale/storage of an Indian farmer.</p>
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
            <div class="col-lg-6">
              <h3 class="column-title">Vision</h3>
              <p>To promote holistic, sustained and equitable intervention for attaining food security; conservation, management, protection and sustainable use of natural resources for improved livelihood; generating gainful rural employment opportunities to alleviate poverty and striving towards an overall balanced economic development of the farming community.</p>

            </div><!-- Col end -->

            <div class="col-lg-6">
              <h3 class="column-title">Mission</h3>
              <p>To propagate modern agricultural production techniques and scientific methods of farming for increasing crop output; making our farmers self reliant and to accelerate the economic growth of the State with the of ICT tools.</p>
            </div><!-- Col end -->
          </div><!-- Content row end -->

        </div><!-- Container end -->
      </section><!-- Main container end -->

      <footer id="footer" class="footer bg-overlay">
        <?php include("includes/footer.php"); ?>
      </footer>
      <!--footer-->

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