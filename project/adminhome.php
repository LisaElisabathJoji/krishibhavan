<?php
include("includes/connection.php");
?>
<header id="header" class="header-one">
  <?php
  include("includes/adminheader.php");
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
    <title>HOME | Krishi Bhavan</title>

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
      <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg_h3.jpg)">
          <div class="slider-content">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">Digital Empowerment of Farmers'</h4>
                    <p data-animation-in="slideInLeft" data-duration-in="1.2">Digital Infrastructure as a Core Utility to Every Farmers'</p>
                    <a href="services.php" class="slider btn btn-success">Services</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg_h7.jpeg)">
          <div class="slider-content text-left">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h4 class="slide-sub-title" data-animation-in="slideInLeft">Governance and Services on-Demand</h4>
                  <p data-animation-in="slideInRight">
                    <a href="services.php" class="slider btn btn-success">Services</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg_h5.jpg)">
          <div class="slider-content text-right">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">Make our farmers self reliant</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">24x7 Service</p>
                  <div data-animation-in="slideInLeft">
                    <a href="contact.php" class="slider btn btn-success" aria-label="contact-with-us">Contact Us</a>
                    <a href="about.php" class="slider btn btn-success border" aria-label="learn-more-about-us">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section id="facts" class="facts-area dark-bg">
        <div class="container">
          <div class="facts-wrapper">
            <h3>Farmers Registered</h3>
            <div class="row">
              <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-content">
                  <h3 class="ts-facts-title">Individual</h3>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="401492">0</span></h2>
                </div>
              </div><!-- Col end -->

              <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-content">
                  <h3 class="ts-facts-title">Group</h3>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="3949">0</span></h2>
                </div>
              </div><!-- Col end -->

              <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-content">
                  <h3 class="ts-facts-title">Institution</h3>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="419">0</span></h2>
                </div>
              </div><!-- Col end -->

            </div> <!-- Facts end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
      </section><!-- Facts end -->

      <section id="facts" class="facts-area dark-bg">
        <div class="container">
          <div class="facts-wrapper">
            <div class="row">
              <div class="col-md-4 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/logo/file_icon.png" alt="facts-img" width="60px" height="60px">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                  <h3 class="ts-facts-title">Total Projects</h3>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/logo/file_icon.png" alt="facts-img" width="60px" height="60px">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                  <h3 class="ts-facts-title">Staff Members</h3>
                </div>
              </div><!-- Col end -->

              <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/logo/file_icon.png" alt="facts-img" width="60px" height="60px">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                  <h3 class="ts-facts-title">Hours of Work</h3>
                </div>
              </div><!-- Col end -->

            </div> <!-- Facts end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
      </section><!-- Facts end -->

      <footer id="footer" class="footer bg-overlay">
        <?php include("includes/adminfooter.php"); ?>
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


  </html>


<?php
}
?>