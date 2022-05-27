<?php
include("includes/connection.php");
?>
<header id="header" class="header-one">
  <?php include("includes/adminheader.php"); ?>
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
                      <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
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

            <div class="col-xl-12 col-lg-12">
              <div class="content-inner-page">
                <h3 class="bg-danger text-light">Services List</h3>
                <div class="container">
                  <table class="table table-bordered">
                    <?php
                    $sql = "SELECT * FROM tb_service_details ";
                    $result = mysqli_query($con, $sql);
                    $rows = mysqli_num_rows($result);
                    echo "<table class='table table-bordered' >";
                    echo "<tr style='background-color: #6db6b9e6;'>";
                    //Table header
                    echo "<th>";
                    echo "Service-Name";
                    echo "</th>";
                    echo "<th>";
                    echo "Description";
                    echo "</th>";
                    echo "<th>";
                    echo "Scheme";
                    echo "</th>";
                    echo "<th>";
                    echo "Component";
                    echo "</th>";
                    echo "<th>";
                    echo "Eligibility Criteria";
                    echo "</th>";
                    echo "<th>";
                    echo "Edit";
                    echo "</th>";
                    echo "<th>";
                    echo "Status";
                    echo "</th>";


                    echo "</tr>";
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>";
                        echo $row['service_name'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['description'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['scheme'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['component'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['eligibility'];
                        echo "</td>";
                    ?>
                        <td><a class="btn btn-primary" role="button" href="admineditservice.php?upd=<?php echo $row["serv_id"]; ?> ">Edit</a></td>
                        <?php
                        if ($row['status'] == 1) {
                        ?>
                          <td>
                            <form action="changeservicestatus.php" method="post">
                              <button class="btn btn-success" name="deactivateButton" type="submit" value="<?php echo $row['serv_id']; ?>">Active</button>
                            </form>
                          </td>
                        <?php
                        } else {
                        ?>
                          <td>
                            <form action="changeservicestatus.php" method="post">
                              <button class="btn btn-danger" name="activateButton" type="submit" value="<?php echo $row['serv_id']; ?>">Disabled</button>
                            </form>
                          </td>
                        <?php
                        }
                        ?>
                    <?php
                        echo "</tr>";
                      }
                    }
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