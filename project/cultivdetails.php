<?php
include("includes/connection.php");

if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} else {

  if(isset($_POST["submit"]))
  {
  $survn = $_POST["snum"];
  $crtype = $_POST["cpty"];
  $crname = $_POST["cname"];
  $va = $_POST["vari"];
  $startd = $_POST["start"];
  $harvd = $_POST["end"];
  $expec = $_POST["exp"];
  $water = $_POST["wmode"];
  $lands = $_POST["lstat"];
  $aty = $_POST["agrty"];
  
  mysqli_query($con,"INSERT INTO `tbl_cultivation`(`surveynumber`, `croptype`, `cropname`, `variety`, `startdate`, `harvestdate`, `expectedyield`, `watermode`, `landstatus`, `agritype`) 
     VALUES ('$survn','$crtype','$crname','$va','$startd','$harvd','$expec','$water','$lands','$aty')");
  
  header("location:basepriceapply.php");
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
            <h3 class="widget-title"></h3>
            <ul class="nav service-menu">
              <li class="active"><a href="#">Add/Edit Cultivation Details</a></li>
              <li><a href="viewcultivad.php">Cultivation Details</a></li>
            </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">

          <h3 class="bg-danger text-light font-weight-light">Add Cultivation Details</h3>

          <script>
            function validate()
            {
              var name=document.getElementById("snum").value;
              var letters=/^[^a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter survey number correctly..");
              document.getElementById("snum").value="";
              }
            }
            function validate1()
            {
              var name=document.getElementById("cpty").value;
              var letters=/^[a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter crop type correctly");
              document.getElementById("cname").value="";
              }
            }
            function validate2()
            {
              var name=document.getElementById("cname").value;
              var letters=/^[a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter crop name correctly");
              document.getElementById("cname").value="";
              }
            }
            function validate3()
            {
              var name=document.getElementById("vari").value;
              var letters=/^[a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter crop variety correctly");
              document.getElementById("vari").value="";
              }
            }
            function validate4()
            {
              var name=document.getElementById("exp").value;
              var letters=/^[a-zA-Z0-9\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter eligibility criteria correctly without a number");
              document.getElementById("exp").value="";
              }
            }
            function validate5()
            {
              var name=document.getElementById("lstat").value;
              var letters=/^[a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter component correctly without a number");
              document.getElementById("lstat").value="";
              }
            }
            function validate6()
            {
              var name=document.getElementById("agrty").value;
              var letters=/^[a-zA-Z\s]*$/;
              if(!name.match(letters))
              {
              alert("Please enter component correctly without a number");
              document.getElementById("agrty").value="";
              }
            }
          </script>
          <div class = "container">
            
            <form action="#" method="POST">
                <div class = "form-group">
                  <label for = "name">Survey Number</label>
                  <input type = "text" class = "form-control" id ="snum" name="snum" onblur="validate()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Crop Type</label>
                  <input type = "text" class = "form-control" id ="cpty" name="cpty" onblur="validate1()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Crop Name</label>
                  <input type = "text" class = "form-control" id ="cname" name="cname" onblur="validate2()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Variety</label>
                  <input type = "text" class = "form-control" id ="vari" name="vari" onblur="validate3()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Start Date</label>
                  <input type = "date" class = "form-control" id ="start" name="start"  min="2021-02-01" max="2025-12-31" onblur="validate()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Harvest Date</label>
                  <input type = "date" class = "form-control" id ="end" name="end"  min="2021-11-01" max="2025-12-31" onblur="validate()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Expected Yield</label>
                  <input type = "text" class = "form-control" id ="exp" name="exp" onblur="validate4()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Water Mode</label>
                            <select name="wmode" id="watermode" reqiured>
                            <option>Select an option</option>
                              <option>Irrigation</option>
                              <option>Self</option>
                              </select>
                          
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Land Status</label>
                  <input type = "text" class = "form-control" id ="lstat" name="lstat" onblur="validate5()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Agri Type</label>
                  <input type = "text" class = "form-control" id ="agrty" name="agrty" onblur="validate6()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
  
                <button type = "submit" class = "btn btn-primary" name="submit">Submit</button>
            </form>
          </div>

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

  <footer id="footer" class="footer bg-overlay">
  <?php include ("includes/footer.php"); ?>
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