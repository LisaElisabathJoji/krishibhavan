<?php
include("includes/connection.php");

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      function getdistrict(val) {
        $.ajax({
          type: "POST",
          url: "get_district.php",
          data: 'state_id=' + val,
          success: function(data) {
            $("#district-list").html(data);
          }
        });
      }
    </script>


  </head>

  <body>
    <div class="body-inner">
      <!-- Header start -->
      <header id="header" class="header-one">
        <?php include("includes/uheader.php"); ?>
      </header>
      <!--/ Header end -->
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

            <div class="col-xl-3 col-lg-4">
              <div class="sidebar sidebar-left">
                <div class="widget">
                  <h3 class="widget-title">Solutions</h3>
                  <ul class="nav service-menu">
                    <li class="active"><a href="#">Add/Edit Land Details</a></li>
                    <li><a href="cultvdetails.php">Add/Edit Cultivation Details</a></li>
                    <li><a href="basepriceapply.php">Base Price Apply</a></li>
                  </ul>
                </div><!-- Widget end -->
              </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
              <div class="content-inner-page">

                <h3 class="bg-danger text-light font-weight-light">Add Service Details</h3>

                <script>
                  function validate() {
                    var name = document.getElementById("sname").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter service name correctly without a number");
                      document.getElementById("sname").value = "";
                    }
                  }

                  function validate1() {
                    var name = document.getElementById("desc").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter service description correctly");
                      document.getElementById("desc").value = "";
                    }
                  }

                  function validate2() {
                    var name = document.getElementById("scheme").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter scheme correctly without a number");
                      document.getElementById("scheme").value = "";
                    }
                  }

                  function validate3() {
                    var name = document.getElementById("comp").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter component correctly without a number");
                      document.getElementById("comp").value = "";
                    }
                  }

                  function validate4() {
                    var name = document.getElementById("elig").value;
                    var letters = /^[a-zA-Z\s]*$/;
                    if (!name.match(letters)) {
                      alert("Please enter eligibility criteria correctly without a number");
                      document.getElementById("elig").value = "";
                    }
                  }
                </script>
                <div class="container">

                  <form action="addservdetails.php" method="POST">
                    <div class="form-group">
                      <label for="name">Block Number</label>
                      <input type="text" class="form-control" id="sname" name="sname" onblur="validate()" required />
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="desc">Survey Number</label>
                      <textarea class="form-control" id="desc" name="desc" rows="3" maxlength="200" onblur="validate1()" required></textarea>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="scheme">Subdivision Number</label>
                      <textarea class="form-control" id="scheme" name="schem" rows="3" maxlength="200" onblur="validate2()" required></textarea>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Thandaper Number</label>
                      <textarea class="form-control" id="comp" name="comp" rows="3" maxlength="200" onblur="validate3()" required></textarea>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="country">State</label>
                      <select onChange="getdistrict(this.value);" name="state" id="state" class="form-control">
                        <option value="">Select</option>
                        <?php $query = mysqli_query($con, "SELECT * FROM state");
                        while ($row = mysqli_fetch_array($query)) { ?>
                          <option value="<?php echo $row['StCode']; ?>"><?php echo $row['StateName']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="state">Taluk</label>
                      <select name="district" id="district-list" class="form-control">
                        <option value="">Select</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="city">Village</label>
                      <select class="form-control" id="city-dropdown">
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="name">Land Name</label>
                      <textarea class="form-control" id="elig" name="elig" rows="2" maxlength="200" onblur="validate4()" required></textarea>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Land Type</label>
                      <select class="form-control" required>
                        <option>Choose Option</option>
                        <option>Purayidam(പുരയിടം)</option>
                        <option>Thottam(തോട്ടം)</option>

                      </select>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <div class="form-group">
                      <label for="name">Name of Owner</label>
                      <textarea class="form-control" id="elig" name="elig" rows="2" maxlength="200" onblur="validate4()" required></textarea>
                      <label><span class="textfieldRequiredMsg"></span></label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="adds">Add</button>
                  </form>
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