<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='stylesheet/elogin.css' type='text/css' />
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
                    <li><a class="nav-item nav-link" href="#">Login</a></li>
                    <li><a class="nav-item nav-link" href="employereg.php">Register</a></li>
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
                            <form class="login-form" action="employ_login.php" method="post" name="frmcstreg" onSubmit="return validatecstreg()">
                                <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="images/user.png"> </div>
                                <h3 class="mb-5 text-center heading">Welcome Back</h3>
                                <h6 class="msg-info">Please login to your account</h6>
                                <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="Email" placeholder="email id" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="password" placeholder="Password" class="form-control"> </div>
                                <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Login</button> </div>
                                <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
                            </form>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2"><a href="employereg.php"></a> Create new</button></p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Krishi Bhavan</h3> <small class="text-white">Employee Login</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="application/javascript">
    function validatecstreg() {

        var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
        var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
        var numericExpression = /^\d{10}$/; //Variable to validate only numbers
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID

        if (document.frmcstreg.Email.value == "") {
            alert("Kindly enter Email ID..");
            document.frmcstreg.Email.focus();
            return false;
        } else if (!document.frmcstreg.Email.value.match(emailExp)) {
            alert("Kindly enter Valid Email ID.");
            document.frmcstreg.Email.focus();
            return false;
        } else if (document.frmcstreg.password.value == "") {
            alert("Password should not be empty..");
            document.frmcstreg.password.focus();
            return false;
        } else if (document.frmcstreg.password.value.length < 8) {
            alert("Password should have more than 8 characters.");
            document.frmcstreg.password.focus();
            return false;
        } else if (document.frmcstreg.password.value.length > 16) {
            alert("Password should be less than 16 characters.");
            document.frmcstreg.password.focus();
            return false;
        } else {
            return true;
        }
    }
</script>

</html>