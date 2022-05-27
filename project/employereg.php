<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='' type='' />

  <style>
    body {
      color: #000;
      overflow-x: hidden;
      height: 100%;
      background-image: linear-gradient(to right, #D500F9, #FFD54F);
      background-repeat: no-repeat
    }

    input,
    textarea {
      background-color: #F3E5F5;
      border-radius: 50px !important;
      padding: 12px 15px 12px 15px !important;
      width: 100%;
      box-sizing: border-box;
      border: none !important;
      border: 1px solid #F3E5F5 !important;
      font-size: 16px !important;
      color: #000 !important;
      font-weight: 400
    }

    input:focus,
    textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #D500F9 !important;
      outline-width: 0;
      font-weight: 400
    }

    button:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0
    }

    .card {
      border-radius: 0;
      border: none
    }

    .card1 {
      width: 50%;
      padding: 40px 30px 10px 30px
    }

    .card2 {
      width: 50%;
      background-image: linear-gradient(to right, #FFD54F, #D500F9)
    }

    #logo {
      width: 70px;
      height: 60px
    }

    .heading {
      margin-bottom: 60px !important
    }

    ::placeholder {
      color: #000 !important;
      opacity: 1
    }

    :-ms-input-placeholder {
      color: #000 !important
    }

    ::-ms-input-placeholder {
      color: #000 !important
    }

    .form-control-label {
      font-size: 12px;
      margin-left: 15px
    }

    .msg-info {
      padding-left: 15px;
      margin-bottom: 30px
    }

    .btn-color {
      border-radius: 50px;
      color: #fff;
      background-image: linear-gradient(to right, #FFD54F, #D500F9);
      padding: 15px;
      cursor: pointer;
      border: none !important;
      margin-top: 40px
    }

    .btn-color:hover {
      color: #fff;
      background-image: linear-gradient(to right, #D500F9, #FFD54F)
    }

    .btn-white {
      border-radius: 50px;
      color: #D500F9;
      background-color: #fff;
      padding: 8px 40px;
      cursor: pointer;
      border: 2px solid #D500F9 !important
    }

    .btn-white:hover {
      color: #fff;
      background-image: linear-gradient(to right, #FFD54F, #D500F9)
    }

    a {
      color: #000
    }

    a:hover {
      color: #000
    }

    .bottom {
      width: 100%;
      margin-top: 50px !important
    }

    .sm-text {
      font-size: 15px
    }

    @media screen and (max-width: 992px) {
      .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
      }

      .card2 {
        width: 100%
      }

      .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
      }
    }

    @media screen and (max-width: 768px) {
      .container {
        padding: 10px !important
      }

      .card2 {
        padding: 50px
      }

      .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
      }
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Krishi Bhavan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a class="nav-item nav-link" href="about.php">About</a></li>
          <li><a class="nav-item nav-link" href="contact.php">Contact</a></li>
          <li><a class="nav-item nav-link" href="emplogin.html">Login</a></li>
          <li><a class="nav-item nav-link" href="#">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
</head>

<body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
      <div class="d-flex flex-lg-row flex-column-reverse">
        <div class="card card1">
          <div class="row justify-content-center my-auto">
            <div class="col-md-8 col-10 my-5">

              <form class="login-form" action="staffreg.php" method="post" name="frmcstreg" onSubmit="return validatecstreg()">
                <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="images/user.png"> </div>
                <h3 class="mb-5 text-center heading">Welcome to AIMS</h3>
                <h6 class="msg-info">Register Yourself</h6>

                <div class="form-group"> <label class="form-control-label text-muted">Full Name</label> <input type="text" placeholder="Enter employee name" name="names" id="names" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Address</label> <textarea name="Address" class="form-control" placeholder="Address"></textarea> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="text" placeholder="Enter email" name="umail" id="umail" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">User Type</label>
                  <select class="form-control" name="staff_type" id="staff_type" required="">
                    <span class="fa fa-user"></span>
                    <option>--Select User Type--</option>
                    <?php
                    include("includes/connection.php");

                    $records = mysqli_query($con, "SELECT * From tbl_type");

                    while ($row = mysqli_fetch_array($records)) {
                      echo "<option value='" . $row['Type_Id'] . "'>" . $row['Type'] . "</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Confirm Password</label> <input type="password" placeholder="Enter password again" name="uconfirmpass" id="uconfirmpass" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Phone Number</label> <input type="number" placeholder="Enter Phone number" name="phone" id="phone" class="form-control"> </div>

                <div class="row justify-content-center my-3 px-3"> <input class="btn-block btn-color" type="submit" value="Register" name="register"> </div>
                <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
              </form>

            </div>
          </div>
          <div class="bottom text-center mb-5">
            <p class="sm-text mx-auto mb-3">Already have an account?<button class="btn btn-white ml-2"><a href="employereg.php"></a> Sign In</button></p>
          </div>
        </div>
        <div class="card card2">
          <div class="my-auto mx-md-5 px-md-5 right">
            <h3 class="text-white">Krishi Bhavan</h3> <small class="text-white">Employee Registration </small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="container">
    <center><img src="images/4.jpg" alt="" class="img-fluid" width="10%" height="10%"></center>
    <div class="title">Registration</div>
    <div class="content">
        
      <form method="post" action="staffreg.php" name="frmcstreg" onSubmit="return validatecstreg()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter employee name" name="names" id="names">
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <textarea name = "Address" class = "form-control" placeholder = "Address"></textarea>
          </div>

          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter email" name="umail" id="umail">
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter Password" name="password" id="password">
          </div>
          <div class="input-box">
            <span class="details">User Type</span>
            <select class="form-control" name="staff_type" id="staff_type" required="">
                        <span class="fa fa-user"></span>
                            <option>--Select User Type--</option>-->
  <?php
  //  include("includes/connection.php"); 

  //   $records = mysqli_query($con, "SELECT * From tbl_type");  

  //   while($row = mysqli_fetch_array($records))
  //   {
  //       echo "<option value='". $row['Type_Id'] ."'>" .$row['Type'] ."</option>";  
  //   }	
  ?>
  <!--</select>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Enter Password" name="uconfirmpass" id="uconfirmpass">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter Phone number" name="phone" id="phone">
          </div>
          
          
        </div>
        
        <div class="button">
            <input type="submit" value="Register" name="register">
          </div>


          <p class="message">Already have an account?<a href="emplogin.html"><b>&nbsp;Login Here</b></a></p>
      </form>
    </div>
  </div> -->

</body>

</html>


<script type="application/javascript">
  function validatecstreg() {

    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
    var numericExpression = /^\d{10}$/; //Variable to validate only numbers
    var numericExp = /^\d{13}$/; //Variable to validate only numbers

    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID

    if (document.frmcstreg.names.value == "") {
      alert("Customer name should not be empty..");
      document.frmcstreg.names.focus();
      return false;
    } else if (!document.frmcstreg.names.value.match(alphaspaceExp)) {
      alert("Please enter only letters for Customer name..");
      document.frmcstreg.names.focus();
      return false;
    } else if (document.frmcstreg.umail.value == "") {
      alert("Kindly enter Email ID..");
      document.frmcstreg.umail.focus();
      return false;
    } else if (!document.frmcstreg.umail.value.match(emailExp)) {
      alert("Kindly enter Valid Email ID.");
      document.frmcstreg.umail.focus();
      return false;
    } else if (document.frmcstreg.staff_type.value == "") {
      alert("Select your employee type.");
      document.frmcstreg.staff_type.focus();
      return false;
    } else if (document.frmcstreg.phone.value == "") {
      alert("Kindly enter mobile Number.");
      document.frmcstreg.phone.focus();
      return false;
    } else if (!document.frmcstreg.phone.value.match(numericExpression)) {
      alert("Kindly enter valid mobile number..");
      document.frmcstreg.phone.focus();
      return false;
    } else if (document.frmcstreg.Address.value == "") {
      alert("Address should not be empty..");
      document.frmcstreg.Address.focus();
      return false;
    } else if (document.frmcstreg.password.value == "") {
      alert("Password should not be empty..");
      document.frmcstreg.password.focus();
      return false;
    } else if (document.frmcstreg.password.value.length < 8) {
      alert("Password length should be more than 8 characters...");
      document.frmcstreg.password.focus();
      return false;
    } else if (document.frmcstreg.password.value.length > 16) {
      alert("Password length should be less than 16 characters...");
      document.frmcstreg.password.focus();
      return false;
    } else if (document.frmcstreg.uconfirmpass.value == "") {
      alert("Confirm password should not be empty..");
      document.frmcstreg.uconfirmpass.focus();
      return false;
    } else if (document.frmcstreg.password.value != document.frmcstreg.uconfirmpass.value) {
      alert("Password and confirm password not matching...");
      document.frmcstreg.uconfirmpass.focus();
      return false;
    } else {
      return true;
    }
  }
</script>



<?php
global $result1;
if ($result1) {
  echo ("<script LANGUAGE='JavaScript'>window.location.href='login.php'</script>");
}

?>