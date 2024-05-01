<?php

if (isset($_SESSION["cnic"])) {
    header("location: MCQ.php");
    exit();
} else {
    include "config.php";
    $cnic = $password = "";
    $cnic_err = $password_err = "";
    $err = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty(trim($_POST["cnic"])) || empty(trim($_POST["password"]))) {
            $email_err = "Please Enter cnic and Password";
        } else {
            $cnic = trim($_POST["cnic"]);
            $password = trim($_POST["password"]);
        }
        if (empty($err)) {
            $sql = "SELECT f_name , email , password FROM users WHERE cnic = ? ";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $param_cnic);

            $param_cnic = $cnic;
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $f_name, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if ((md5($password) == $hashed_password)) {

                            session_start();

                            $_SESSION["fname"] = $f_name;
                            $_SESSION["lname"] = $email;
                            $_SESSION["cnic"] = $cnic;
                            $_SESSION["loggedin"] = true;
                            echo ($_SESSION["fname"] . "<br>");
                            //header ("location: MCQ.php");
                        } else {
                            $err = true;
                        }
                    }
                } else {
                    $err = true;
                }
            }
        }
    }
}

?>


<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from portal.nts.org.pk/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2023 18:36:13 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="TwtRodWISEz4qGu7Ddhpd8h4zO2Y1SJv9zHnxTDv">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Candidate Login(NTS)</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-todo.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        @import url('assets/css/urdu_fonts.css');

        b {
            font-family: 'Noto Naskh Arabic', serif;
            font-size: 1.5em;
            direction: rtl;
        }

        p {
            font-family: 'Noto Nastaliq Urdu Draft', serif;
        }

        h3 {
            color: #F78410;
        }

        .help-block {
            color: red;
        }
    </style>

    <!-- END: Custom CSS-->
</head>

<body>
    <div>

        <body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
            <!-- BEGIN: Content-->
            <div class="app-content content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-header row"></div>
                    <div class="content-body">
                        <!-- login page start -->
                        <section id="auth-login" class="row flexbox-container">
                            <div class="col-xl-8 col-11">
                                <div class="card bg-authentication mb-0">
                                    <div class="row m-0">
                                        <!-- left section-login -->
                                        <div class="col-md-7 col-12 px-0">
                                            <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                                <div class="card-header pb-1">
                                                    <div class="card-title">
                                                        <img src="app-assets/images/pages/wb/3.png" style=" width: auto; max-width: 100%; ">
                                                    </div>
                                                </div>
                                                <h3 style="text-align:center">
                                                    Candidate Portal
                                                </h3>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="divider">
                                                            <div class="divider-text text-uppercase text-muted">
                                                                <small> Please Enter Your CNIC </small>
                                                            </div>
                                                        </div>

                                                        <form method="POST" action="">
                                                            <input type="hidden" name="_token" value="TwtRodWISEz4qGu7Ddhpd8h4zO2Y1SJv9zHnxTDv">
                                                            <div class="form-group mb-50">
                                                                <label class="text-bold-600" for="exampleInputEmail1">Login ID</label>
                                                                <div class="controls">
                                                                    <input type="text" placeholder="Please enter CNIC or Passport Number " class="form-control" name="cnic" maxlength="13" required data-validation-required-message="This field is required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                                <div class="controls">
                                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required data-validation-required-message="This Password field is required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                                <div class="text-left">
                                                                    <div class="checkbox checkbox-sm" style="display:none;">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                        <label class="checkboxsmall" for="exampleCheck1">
                                                                            <small>Keep me LoggedIn</small>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <a href="forgotpassword.html" class="card-link">
                                                                        <small>Forgot Password?</small>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary glow w-100 position-relative">Login
                                                                <i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                                                            </button>
                                                        </form>
                                                        <hr>
                                                        <div class="text-center">
                                                            <small class="mr-25">Don't have an account?</small>
                                                            <a href="register.php">
                                                                <big>Sign up</big>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- right section image -->
                                        <div class="col-md-5 d-md-block d-none text-center align-self-center p-3">
                                            <img src="app-assets/images/pages/wb/1c.png" style=" width: auto; max-width: 100%; ">
                                            <div class="card-header pb-1">
                                                <p style="line-height: 2.5rem;color:darkblue;font-size:19px;">
                                                    اگر آپ کسی اسامی کے لئے اہل ہیں اور درخواست دیناچا ہتے ہیں

                                                    تو آخر ی تاریخ کا انتظارنہ کریں اور فوراً آن لائن اپلائی کریں
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- login page ends -->
                    </div>
                </div>
            </div>

            <!-- END: Content-->
            <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="../s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
            <script>
                $(":input").inputmask();
            </script>
    </div>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b54daa8dc81c8fc","version":"2023.3.0","b":1,"token":"d916c8714fc7434a88ee303955b2329b","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from portal.nts.org.pk/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2023 18:36:21 GMT -->

</html>