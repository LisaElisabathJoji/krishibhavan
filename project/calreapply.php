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

  if (isset($_POST["submit"])) {

    $surveynum = $_POST["snum"];
    $crnam = $_POST["cname"];
    $cseed = $_POST["seed"];
    $crag = $_POST["age"];
    $pic = $_FILES["dataFile"]["name"];
    move_uploaded_file($_FILES["dataFile"]["tmp_name"], "images/" . $_FILES["dataFile"]["name"]);
    $accnum = $_POST["acnumber"];
    $ifscbank = $_POST["ifsc"];
    $userid = $_SESSION["userid"];

    mysqli_query($con, "INSERT INTO `tbl_cropinsurance`(`user_id`,`surveynumber`,`crop_name`, `seeds`, `ageforinsurance`,`imageProof`,`accountnumber`,`ifsccode`, `date`) VALUES ('$surveynum','$userid','$crnam','$cseed','$crag','$pic','$accnum','$ifscbank', now())");
    header("location:viewcalrelfapply.php");
  }
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
                      <li class="breadcrumb-item active" aria-current="page">crop insurance</li>
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
                    <li class="active"><a href="#">Crop Insurance Apply</a></li>
                    <li><a href="viewcalrelfapply.php">Crop Insurance Requests</a></li>
                  </ul>
                </div><!-- Widget end -->
              </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
              <div class="content-inner-page">
                <div class="pb-4">
                  <h3 class="bg-secondary text-light font-weight-light">Apply for Crop Insurance</h3>

                </div>

                <script>
                  function validate5() {
                    var name = document.getElementById("snum").value;
                    var letters = /^[^a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter survey number correctly..");
                      document.getElementById("snum").value = "";
                    }
                  }

                  function validate() {
                    var name = document.getElementById("snum").value;
                    var letters = /^[^a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter survey number correctly..");
                      document.getElementById("snum").value = "";
                    }
                  }

                  function validate1() {
                    var name = document.getElementById("cname").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter land name correctly");
                      document.getElementById("cname").value = "";
                    }
                  }

                  function validate2() {
                    var name = document.getElementById("seed").value;
                    var letters = /^[0-9.]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter land area detail correctly..");
                      document.getElementById("seed").value = "";
                    }
                  }

                  function validate3() {
                    var name = document.getElementById("lno").value;
                    var letters = /^[0-9.]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter available land area detail correctly..");
                      document.getElementById("lno").value = "";
                    }
                  }

                  function validate4() {
                    var name = document.getElementById("age").value;
                    var letters = /^[0-9.]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter available land area detail correctly..");
                      document.getElementById("age").value = "";
                    }
                  }
                </script>
                <div class="container">

                  <form action="#" method="POST">
                    <div class="form-group">
                      <label for="name">Survey Number</label>
                      <input type="text" class="form-control" id="snum" name="snum" onblur="validate5()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Crop Name</label>
                      <input type="text" class="form-control" id="cname" name="cname" onblur="validate()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Seeds(In Grams)</label>
                      <input type="text" class="form-control" id="seed" name="seed" onblur="validate1()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Crop Age (in months)</label>
                      <input type="text" class="form-control" id="age" name="age" onblur="validate3()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Upload file</label>
                      <input type="file" name="dataFile" id="fileChooser" onchange="return ValidateFileUpload()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Account Number</label>
                      <input type="text" class="form-control" id="acnumber" name="acnumber" onblur="validate3()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">IFSC Code</label>
                      <input type="text" class="form-control" id="ifsc" name="ifsc" onblur="validate3()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Apply</button>
                  </form>

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