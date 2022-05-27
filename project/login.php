  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>User Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/title.jpeg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <title>Login</title>
    <style>
      * {
        margin: 0;
        padding-top: 0;
        box-sizing: border-box;
      }

      body {
        margin-top: 0px;
        font-family: "Open Sans";
        color: #fff;
      }

      section {
        background: url("bg_login.jpg");
        height: 100vh;
        width: 100%;
        background-size: cover;
        background-position: center center;
      }

      .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 380px;
        margin-top: 20px;
        padding: 30px 30px;
        border-radius: 10px;
        box-shadow: 7px 7px 60px #000;
      }

      .navbar-nav>li>.dropdown-menu {
        background-color: #343a40;
      }

      .navbar-nav>li>.dropdown-menu a {
        color: #ffffff;
      }

      h1 {
        color: #ffffff;
        font-size: 2em;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 2rem;
      }

      .control input {
        padding: 5px;
        font-size: 14px;
        display: block;
        width: 100%;
        color: #000;
        background: #ddd;
        outline: none;
        border: none;
        margin: 1em 0;

      }

      .control .btn {
        color: #fff;
        text-transform: uppercase;
        background: #0baf30;
        opacity: .7;
        transition: opacity .3s ease;
      }

      p {
        text-align: center;
      }

      a {
        text-decoration: none;
        color: #fff;
        opacity: .7;
      }

      a:hover {
        opacity: 1;
      }
    </style>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item"><img src="images/logo/logo.jpg" class="rounded float-left" alt="Krishi Bhavan" width="100px" height="80px"></li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="">About</a></li>
            <li class="nav-item"><a class="nav-link" href="">Services</a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Register<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="user_registration.php">Farmer</a></li>
                <li><a href="">Officer</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section>

      <div class="form-container">
        <h1>Login</h1>
        <form action="login_page.php" method="POST" name="frmcstreg" onSubmit="return validatecstreg()">
          <div class="control">
            <label for="name" class="h6">Email</label>
            <input type="email" id="name" name="userEmail" placeholder="Enter email">
          </div>
          <div class="control">
            <label for="psw" class="h6">Password</label>
            <input type="password" id="psw" name="upass" placeholder="Enter password">
          </div>
          <div class="control"></div>
          <div class="control">
            <input type="submit" class="btn" name="submit" value="LOGIN">
          </div>
        </form>
        <p class="h5"><a href="user_registration.php" style="color: white; font-style:italic;">Don't have an account -> </a></p>
      </div>

    </section>
    </form>
  </body>

  <script type="application/javascript">
    function validatecstreg() {

      var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
      var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
      var numericExpression = /^\d{10}$/; //Variable to validate only numbers
      var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID

      if (document.frmcstreg.uname.value == "") {
        alert("Username should not be empty..");
        document.frmcstreg.uname.focus();
        return false;

      } else if (document.frmcstreg.upass.value == "") {
        alert("Password should not be empty..");
        document.frmcstreg.upass.focus();
        return false;
      } else if (document.frmcstreg.upass.value.length <= 8) {
        alert("Password length should be more than or equal to 8 characters...");
        document.frmcstreg.upass.focus();
        return false;
      } else if (document.frmcstreg.upass.value.length > 16) {
        alert("Password length should be less than 16 characters...");
        document.frmcstreg.upass.focus();
        return false;
      } else {
        return true;
      }
    }
  </script>

  </html>