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
    $survn = $_POST["snum"];
    $landn = $_POST["lnam"];
    $landar = $_POST["larea"];
    $landav = $_POST["lavail"];
    $cropde = $_POST["crdet"];
    $pic = $_FILES["dataFile"]["name"];
    move_uploaded_file($_FILES["dataFile"]["tmp_name"], "images/" . $_FILES["dataFile"]["name"]);
    $userid = $_SESSION["userid"];

    $apply = "INSERT INTO `tbl_paddyroyalty`(`user_id`,`surveynumber`, `landname`, `landarea`, `landavailable`, `cropdetails`,`imageProof`, `date`) VALUES ('$userid','$survn','$landn','$landar','$landav','$cropde','$pic', now())";
    mysqli_query($con, $apply);
    header("location:viewpaddyroreq.php");
  }
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Paddy Royalty</title>

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
                      <li class="breadcrumb-item active" aria-current="page">paddy royalty</li>
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
                    <li class="active"><a href="#">Paddy Royalty Apply</a></li>
                    <li><a href="viewpaddyroreq.php">Paddy Royalty Requests</a></li>

                  </ul>
                </div><!-- Widget end -->
              </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
              <div class="content-inner-page">
                <div class="pb-4">
                  <h3 class="bg-secondary text-light font-weight-light">Apply for Paddy Royalty</h3>
                </div>

                <script>
                  function validate() {
                    var name = document.getElementById("snum").value;
                    var letters = /^[^a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter survey number correctly..");
                      document.getElementById("snum").value = "";
                    }
                  }

                  function validate1() {
                    var name = document.getElementById("lnam").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter land name correctly");
                      document.getElementById("lnam").value = "";
                    }
                  }

                  function validate2() {
                    var name = document.getElementById("larea").value;
                    var letters = /^[0-9.]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter land area detail correctly..");
                      document.getElementById("larea").value = "";
                    }
                  }

                  function validate3() {
                    var name = document.getElementById("lavail").value;
                    var letters = /^[0-9.]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter available land area detail correctly..");
                      document.getElementById("lavail").value = "";
                    }
                  }

                  function validate4() {
                    var name = document.getElementById("crdet").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter crop details correctly");
                      document.getElementById("crdet").value = "";
                    }
                  }
                </script>
                <div class="container">

                  <form action="#" method="POST">
                    <div class="form-group">
                      <label for="name">Survey Number</label>
                      <input type="text" class="form-control" id="snum" name="snum" onblur="validate()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Land Name</label>
                      <input type="text" class="form-control" id="lnam" name="lnam" onblur="validate1()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Total Land Area (in cent)</label>
                      <input type="text" class="form-control" id="larea" name="larea" onblur="validate2()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Land available for cultivation - Unfarmed (in cent)</label>
                      <input type="text" class="form-control" id="lavail" name="lavail" onblur="validate3()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Crop Details</label>
                      <input type="text" class="form-control" id="crdet" name="crdet" onblur="validate4()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Upload file</label>
                      <input type="file" name="dataFile" id="fileChooser" onchange="return ValidateFileUpload()" required />
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