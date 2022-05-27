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
                                            <li class="breadcrumb-item active" aria-current="page">Register New Employee</li>
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
                            <!-- Sidebar end -->
                        </div><!-- Sidebar Col end -->

                        <div class="col-xl-8 col-lg-8">
                            <div class="content-inner-page">

                                <!--<h2 class="column-title mrt-0">Natural Disaster Relief</h2>-->
                                <h3 class="bg-danger text-light font-weight-light"> NEW EMPLOYEE REGISTRATION</h3>

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

                                    <form action="addnewemployee.php" method="POST">
                                        <div class="form-group">
                                            <label for="name">Employee Name</label>
                                            <select class="form-control" name="etype" id="etype">
                                                <option selected disabled>Employee role</option>
                                                <option value="1">Officer</option>
                                                <option value="2">Assistant Officer</option>
                                            </select> <label><span class="textfieldRequiredMsg"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Employee Name</label>
                                            <input type="text" class="form-control" id="ename" name="ename" onblur="validate()" required />
                                            <label><span class="textfieldRequiredMsg"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" class="form-control" id="eadd" name="eadd" onblur="validate()" required />
                                            <label><span class="textfieldRequiredMsg"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" id="eemail" name="eemail" onblur="validate()" required />
                                            <label><span class="textfieldRequiredMsg"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input type="text" class="form-control" id="ephone" name="ephone" onblur="validate()" required />
                                            <label><span class="textfieldRequiredMsg"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Password</label>
                                            <input type="password" class="form-control" id="epass" name="epass" onblur="validate()" required />
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