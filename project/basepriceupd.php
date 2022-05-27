<?php
include("includes/connection.php");
include("includes/adminheader.php");
if (isset($_SESSION["id"]) != session_id()) {

  echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
      </script>");
} 
else {
    $u=$_GET["upd"];
    $edit=mysqli_query($con, "SELECT * FROM tbl_baseprice  WHERE  `ID`='$u'");
    $row=mysqli_fetch_array($edit);

    if(isset($_POST["submit"]))
    {
    $crname = $_POST["cpname"];
    $cropnum = $_POST["cnum"];
    $pic = $_FILES["dataFile"]["name"];
    move_uploaded_file($_FILES["dataFile"]["tmp_name"],"images/".$_FILES["dataFile"]["name"]);
    //print_r($pic);exit;
    
    mysqli_query($con,"UPDATE tbl_baseprice SET `cropname`='$crname',`cropnumber`='$cropnum',`photo`='$pic' WHERE  `ID`='$u'");
    header("location:viewbasepreq.php");
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
              <li><a href="basepriceapply.php">Base price Apply</a></li>
              <li class="active"><a href="#"> Edit Base price Request</a></li>
              <li><a href="viewbasepreq.php">View Base Price Requests</a></li>
              <li><a href="cultivdetails.php">Add/Edit Cultivation Details</a></li>
              <li><a href="landdetails.php">Add/Edit Land Details</a></li>
            </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">
            <div class="pb-4">
                <h5>**Please add Land Details and Cultivation Details before applying</h5>
                <a href="landdetails.php" class="btn btn-danger btn-lg float-right" role="button">Add Land Details</a>
                <a href="cultivdetails.php" class="btn btn-danger btn-lg" role="button">Add Cultivation Details</a>
            </div>
            <h3 class="bg-secondary text-light font-weight-light">Crop Base Price</h3>

            <script>
                function validate()
                {
                    var name=document.getElementById("cpname").value;
                    var letters=/^[a-zA-Z\s]*$/;
                    if(!name.match(letters))
                        {
                            alert("Please enter crop name correctly..");
                            document.getElementById("cpname").value="";
                        }
                }
                function validate1()
                {
                    var name=document.getElementById("cnum").value;
                    var letters=/^[0-9.]*$/;
                    if(!name.match(letters))
                        {
                            alert("Please enter number of crops correctly..");
                            document.getElementById("cnum").value="";
                        }
                }   
                
                function ValidateFileUpload() {
                    var fuData = document.getElementById('fileChooser');
                    var FileUploadPath = fuData.value;

    //To check if user upload any file
                    if (FileUploadPath == '') {
                        alert("Please upload an image");

                    } else {
                        var Extension = FileUploadPath.substring(
                            FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

    //The file uploaded is an image

    if (Extension == "png" || Extension == "jpeg" || Extension == "jpg") {

    // To Display
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(fuData.files[0]);
                    }

                } 

    //The file upload is NOT an image
    else {
                    alert("Photo only allows file types of PNG, JPG and JPEG. ");

                }
            }
        }

        </script>
        <div class = "container">
            
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class = "form-group">
                  <label for = "name">Crop Name</label>
                  <input type = "text" class = "form-control" id ="cpname" name="cpname" value="<?php echo $row['cropname']?>" onblur="validate()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "desc">Crop Number</label>
                  <input type = "text" class = "form-control" id ="cnum" name="cnum" value="<?php echo $row['cropnumber']?>" onblur="validate1()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
                <div class = "form-group">
                  <label for = "name">Image</label>
                  <input type="file" name="dataFile" id="fileChooser" onchange="return ValidateFileUpload()" required/>
                  <label><span class="textfieldRequiredMsg"></span></label>
                </div>
  
                <button type = "submit" class = "btn btn-primary" name="submit">Update</button>

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