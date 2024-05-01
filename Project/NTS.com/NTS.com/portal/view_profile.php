<?php

include 'config.php';
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">


<head>
    <title>Admin login</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fi/flaticon.css">
    <link rel="stylesheet" href="css/maineffd.css?1681585274">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-iso.css">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-iso.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/demoeffd.css?1681585274">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        /* Googlefont Poppins CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 280px;
            background: #0A2558;
            transition: all 0.5s ease;
            padding-left: 25px;
        }

        .sidebar.active {
            width: 60px;
        }

        .sidebar .logo-details {
            height: 80px;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details i {
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            min-width: 60px;
            text-align: center
        }

        .sidebar .logo-details .logo_name {
            color: #fff;
            font-size: 24px;
            font-weight: 500;
        }

        .sidebar .nav-links {
            margin-top: 10px;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            height: 50px;
        }

        .sidebar .nav-links li a {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li a.active {
            background: #081D45;
        }

        .sidebar .nav-links li a:hover {
            background: #081D45;
        }

        .sidebar .nav-links li i {
            min-width: 60px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }

        .sidebar .nav-links li a .links_name {
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        section {
            padding: 0% !important;
        }

        .home-section {
            position: relative;
            background: #f5f5f5;
            min-height: 100vh;
            width: calc(100% - 280px);
            left: 280px;
            top: 80px;
            transition: all 0.5s ease;
        }

        .sidebar.active~.home-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .home-section nav {
            display: flex;
            justify-content: space-between;
            height: 80px;
            background: #fff;
            display: flex;
            align-items: center;
            position: fixed;
            width: calc(100% - 240px);
            left: 240px;
            z-index: 100;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }

        .sidebar.active~.home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }

        .home-section nav .sidebar-button {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 500;
        }

        nav .sidebar-button i {
            font-size: 35px;
            margin-right: 10px;
        }

        .home-section nav .search-box {
            position: relative;
            height: 50px;
            max-width: 550px;
            width: 100%;
            margin: 0 20px;
        }

        nav .search-box input {
            height: 100%;
            width: 100%;
            outline: none;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            font-size: 18px;
            padding: 0 15px;
        }

        nav .search-box .bx-search {
            position: absolute;
            height: 40px;
            width: 40px;
            background: #2697FF;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 4px;
            line-height: 40px;
            text-align: center;
            color: #fff;
            font-size: 22px;
            transition: all 0.4 ease;
        }

        .home-section nav .profile-details {
            display: flex;
            align-items: center;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            height: 50px;
            min-width: 190px;
            padding: 0 15px 0 2px;
        }

        nav .profile-details img {
            height: 40px;
            width: 40px;
            border-radius: 6px;
            object-fit: cover;
        }

        nav .profile-details .admin_name {
            font-size: 15px;
            font-weight: 500;
            color: #333;
            margin: 0 10px;
            white-space: nowrap;
        }

        nav .profile-details i {
            font-size: 25px;
            color: #333;
        }

        .home-section .home-content {
            position: relative;
        }

        .home-content .overview-boxes {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px;
            margin-bottom: 26px;
        }

        .overview-boxes .box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: calc(100% / 4 - 15px);
            background: #fff;
            padding: 15px 14px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .overview-boxes .box-topic {
            font-size: 20px;
            font-weight: 500;
        }

        .home-content .box .number {
            display: inline-block;
            font-size: 35px;
            margin-top: -6px;
            font-weight: 500;
        }

        .home-content .box .indicator {
            display: flex;
            align-items: center;
        }

        .home-content .box .indicator i {
            height: 20px;
            width: 20px;
            background: #8FDACB;
            line-height: 20px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            margin-right: 5px;
        }

        .box .indicator i.down {
            background: #e87d88;
        }

        .home-content .box .indicator .text {
            font-size: 12px;
        }

        .home-content .box .cart {
            display: inline-block;
            font-size: 32px;
            height: 50px;
            width: 50px;
            background: #cce5ff;
            line-height: 50px;
            text-align: center;
            color: #66b0ff;
            border-radius: 12px;
            margin: -15px 0 0 6px;
        }

        .home-content .box .cart.two {
            color: #2BD47D;
            background: #C0F2D8;
        }

        .home-content .box .cart.three {
            color: #ffc233;
            background: #ffe8b3;
        }

        .home-content .box .cart.four {
            color: #e05260;
            background: #f7d4d7;
        }

        .home-content .total-order {
            font-size: 20px;
            font-weight: 500;
        }

        .home-content .sales-boxes {
            display: flex;
            justify-content: space-between;
            /* padding: 0 20px; */
        }

        /* left box */
        .home-content .sales-boxes .recent-sales {
            width: 65%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .home-content .sales-boxes .sales-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sales-boxes .box .title {
            font-size: 24px;
            font-weight: 500;
            /* margin-bottom: 10px; */
        }

        .sales-boxes .sales-details li.topic {
            font-size: 20px;
            font-weight: 500;
        }

        .sales-boxes .sales-details li {
            list-style: none;
            margin: 8px 0;
        }

        .sales-boxes .sales-details li a {
            font-size: 18px;
            color: #333;
            font-size: 400;
            text-decoration: none;
        }

        .sales-boxes .box .button {
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .sales-boxes .box .button a {
            color: #fff;
            background: #0A2558;
            padding: 4px 12px;
            font-size: 15px;
            font-weight: 400;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        header {
            margin-bottom: 0%;
        }

        .sales-boxes .box .button a:hover {
            background: #0d3073;
        }

        /* Right box */
        .home-content .sales-boxes .top-sales {
            width: 35%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px 0 0;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .sales-boxes .top-sales li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
        }

        .sales-boxes .top-sales li a img {
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 12px;
            margin-right: 10px;
            background: #333;
        }

        .sales-boxes .top-sales li a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sales-boxes .top-sales li .product,
        .price {
            font-size: 17px;
            font-weight: 400;
            color: #333;
        }

        /* Responsive Media Query */
        @media (max-width: 1240px) {
            .sidebar {
                width: 60px;
            }

            .sidebar.active {
                width: 220px;
            }

            .home-section {
                width: calc(100% - 60px);
                left: 60px;
            }

            .sidebar.active~.home-section {
                /* width: calc(100% - 220px); */
                overflow: hidden;
                left: 220px;
            }

            .home-section nav {
                width: calc(100% - 60px);
                left: 60px;
            }

            .sidebar.active~.home-section nav {
                width: calc(100% - 220px);
                left: 220px;
            }
        }

        @media (max-width: 1150px) {
            .home-content .sales-boxes {
                flex-direction: column;
            }

            .home-content .sales-boxes .box {
                width: 100%;
                overflow-x: scroll;
                margin-bottom: 30px;
            }

            .home-content .sales-boxes .top-sales {
                margin: 0;
            }
        }

        @media (max-width: 1000px) {
            .overview-boxes .box {
                width: calc(100% / 2 - 15px);
                margin-bottom: 15px;
            }
        }

        @media (max-width: 700px) {

            nav .sidebar-button .dashboard,
            nav .profile-details .admin_name,
            nav .profile-details i {
                display: none;
            }

            .home-section nav .profile-details {
                height: 50px;
                min-width: 40px;
            }

            .home-content .sales-boxes .sales-details {
                width: 560px;
            }
        }

        @media (max-width: 550px) {
            .overview-boxes .box {
                width: 100%;
                margin-bottom: 15px;
            }

            .sidebar.active~.home-section nav .profile-details {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .sidebar {
                width: 0;
            }

            .sidebar.active {
                width: 60px;
            }

            .home-section {
                width: 100%;
                left: 0;
            }

            .sidebar.active~.home-section {
                left: 60px;
                width: calc(100% - 60px);
            }

            .home-section nav {
                width: 100%;
                left: 0;
            }

            .sidebar.active~.home-section nav {
                left: 60px;
                width: calc(100% - 60px);
            }
        }
    </style>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="overflow: hidden !important;">
    <header class="only-color" style="z-index: 10000;position: fixed;width: 100%;">
        <div class="sticky-menu">
            <div class="" style="padding:2px 45px 2px 45px;display:flex;justify-content: space-between;align-content: stretch;align-items: center;">
                <div>
                    <a href="../index.php" class="logo">
                        <img src="img/nts_logo.png" alt>
                    </a>
                    <a href="../index.php" class="logo">
                        <img src="img/header_imgN.png" alt>
                    </a>
                </div>
                <div style="display: flex;align-items:center">
                    <b style="color: #f58509;font-size:30px">Welcome</b> &nbsp;&nbsp;&nbsp; <span style="font-size:30px"><?php echo $name ?></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="logout.php"><Button style="background-color: #f58509; padding: 5px 20px;border-radius:30px">Logout</Button></a>
                </div>
            </div>
        </div>
    </header>
    <?php
    include "includes/cadidate-sidebar.html";
    ?>
    <section class="home-section">
        <div class="home-content">
            <div class="content">
                <div class="page-title">
                    <div class="grid-row">
                        <h1>My Profile</h1>
                    </div>
                </div>
                <div class="page-content woocommerce">
                    <dic class="container">
                        <style>
                            .row {
                                justify-content: center;
                            }
                        </style>
                        <div class="row" style="justify-content: center !important;">
                            <div style="" class="row">
                                <div class="col-8">
                                    <?php
                                    $getDataSQL = "SELECT * FROM pf WHERE email = '$email'";

                                    $result = mysqli_query($conn, $getDataSQL);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $name = $_SESSION['name'];
                                        echo '
<div class="container" style="display:flex">
<div style="width:50%">
<img style="height: 100%;width: 100%;" src="uploads/' . $row["profile_pic"] . '" alt="User Avatar" class="avatar">
</div>
<table>
<tbody>
<tr>
<td style="border: 1px solid #ccc;"><b>Username</b></td>
<td style="border: 1px solid #ccc;"> ' . $name . ' </td>
</tr>
<tr>
<td style="border: 1px solid #ccc;"><b>Father Name</b></td>
<td style="border: 1px solid #ccc;">' . $row["father_name"] . '</td>
</tr>
<tr>
<th style="border: 1px solid #ccc;"><b>Date of Birth</th>
<td style="border: 1px solid #ccc;">' . $row["dob"] . '</b></td>
</tr>
<tr>
<th style="border: 1px solid #ccc;"><b>Phone Number</th>
<td style="border: 1px solid #ccc;">' . $row["phone_number"] . '</b></td>
</tr>
<tr>
<th style="border: 1px solid #ccc;"><b>Last Degree</b></th>
<td style="border: 1px solid #ccc;">' . $row["last_degree"] . '</td>
</tr>
<tr>
<th style="border: 1px solid #ccc;"><b>Employeement Exp</b></th>
<td style="border: 1px solid #ccc;">' . $row["exp"] . '</td>
</tr>
</tbody>
</table>
</div>
';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="container">
                <div style="color:#f58509;font-weight:bold">
                    <h1 style="font-weight: 600;text-align:center">My Applied Application</h1>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-10">
                        <?php
                        require 'config.php';

                        $query1 = "SELECT * FROM apps WHERE email = '$email'";
                        $query2 = "SELECT * FROM js WHERE email = '$email'";
                        $query3 = "SELECT * FROM ap WHERE email = '$email'";

                        $result1 = mysqli_query($conn, $query1);
                        $result2 = mysqli_query($conn, $query2);
                        $result3 = mysqli_query($conn, $query3);

                        $total1 = mysqli_num_rows($result1);
                        $total2 = mysqli_num_rows($result2);
                        $total3 = mysqli_num_rows($result3);

                        if ($total1 != 0 || $total2 != 0 || $total3 != 0) {
                            echo "


    <table class='table table-success table-striped'>
        <tr>
            <th><b>ID</b></th>
            <th><b>First Name</b></th>
            <th><b>Last Name</b></th>
            <th><b>Test Name</b></th>
            <th><b>Phone Number</b></th>
            <th><b>Address</b></th>
            <th><b>Profile</b></th>
            <th><b>Resume</b></th>
            <th><b>Payment Details</b></th>
        </tr>";

                            // Merge the results from the three tables
                            while ($row = mysqli_fetch_assoc($result1)) {
                                $chkPayment = '';
                                $payment = $row['payment'];
                                if($payment == ""){
                                    $chkPayment = "UnPaid";
                                }else{
                                    $chkPayment = "Paid";
                                }
                                echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['test_name'] . "</td>
            <td>" . $row['phone_number'] . "</td>
            <td>" . $row['address'] . "</td>
            <td><img style='width:40px;height:40px;border-radius: 100%' src='uploads/" . $row['profile_pic'] . "' alt='' width='40'></td>
            <td>" . $row['resume'] . "</td>
            <td>" . $chkPayment . "</td>
        </tr>";
                            }

                            while ($row = mysqli_fetch_assoc($result2)) {
                                $chkPayment = '';
                                $payment = $row['payment'];
                                if($payment == ""){
                                    $chkPayment = "UnPaid";
                                }else{
                                    $chkPayment = "Paid";
                                }
                                echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['test_name'] . "</td>
            <td>" . $row['phone_number'] . "</td>
            <td>" . $row['address'] . "</td>
            <td><img style='width:40px;height:40px;border-radius: 100%' src='uploads/" . $row['profile_pic'] . "' alt='' width='40'></td>
            <td>" . $row['resume'] . "</td>
            <td>" . $chkPayment . "</td>
        </tr>";
                            }

                            while ($row = mysqli_fetch_assoc($result3)) {
                                $chkPayment = '';
                                $payment = $row['payment'];
                                if($payment == ""){
                                    $chkPayment = "UnPaid";
                                }else{
                                    $chkPayment = "Paid";
                                }
                                echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['first_name'] . "</td>
            <td>" . $row['last_name'] . "</td>
            <td>" . $row['test_name'] . "</td>
            <td>" . $row['phone_number'] . "</td>
            <td>" . $row['address'] . "</td>
            <td><img style='width:40px;height:40px;border-radius: 100%' src='uploads/" . $row['profile_pic'] . "' alt='' width='40'></td>
            <td>" . $row['resume'] . "</td>
            <td>" . $chkPayment . "</td>
        </tr>";
                            }

                            echo "
    </table>";
                        } else {
                            echo "No records found";
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <div class="grid-row">
                <div class="grid-col-row clear-fix">
                    <section class="grid-col grid-col-6 footer-about">
                        <h2 class="corner-radius">Contact Us</h2>
                        <div>
                            <h3>NTS Call Center</h3>
                            <p>It is for your information that NTS Call Center is now globally activated. You can contact at the number given below for all your queries and concerns. This number is operational. You can now contact us through this number and all other numbers for info/query are inactivated with immediate effect all over the Pakistan</p>
                        </div>
                        <address>
                            <p></p>
                            <a href="tel:+92-51-844-444-1" class="phone-number">+92-51-844-444-1</a>
                            <br />
                            <a href="https://www.nts.org.pk/cdn-cgi/l/email-protection#58292d3d2a2118362c2b76372a3f762833" class="email"><span class="__cf_email__" data-cfemail="08797d6d7a7148667c7b26677a6f267863">[email&#160;protected]</span></a>
                            <br />
                            <a href="index.php" class="site">www.nts.org.pk</a>
                            <br />
                            <a href="#" class="address">Plot # 96, Street # 4, H-8/1, Islamabad.</a>
                        </address>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/National-Testing-Service-Pakistan-NTS-815650561917551/" class="fa fa-facebook"></a>
                            <a href="https://twitter.com/NTSPKOfficial/" class="fa fa-twitter"></a>
                            <a href="https://www.linkedin.com/company/nts-pakistan/" class="fa fa-linkedin"></a>
                        </div>
                        <aside id="sidebar" class="sidebar_show">
                            <div id="sidebar-trigger">
                                <div class="menu-icon"><i class="icon-m-menu"></i></div>
                            </div>
                            <!--End sidebar-trigger-->
                            <div class="sidebar-main">
                                <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    (function() {
                                        var cx = '003943114272773159532:mxjdgvnlrgm';
                                        var gcse = document.createElement('script');
                                        gcse.type = 'text/javascript';
                                        gcse.async = true;
                                        gcse.src = '../../cse.google.com/cse07b6.html?cx=' + cx;
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(gcse, s);
                                    })();
                                </script>
                                <div style="width:0px;overflow:hidden;height:0px;"> <!-- if you use display:none here, it doesn't work-->
                                    <gcse:search enableHistory="false" disableWebSearch="false"></gcse:search>
                                </div>
                                <div class="sidebar-bottom-wrap">
                                    <form id="searchbox_018341452978912016429:ar475glw1ay" name="" method="get" class="search-form_header" action="#">
                                        <input value="018341452978912016429:ar475glw1ay" name="cx" type="hidden" />
                                        <input value="FORID:11" name="cof" type="hidden" />
                                        <input id="q" style="" name="q" type="text" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}" value="SEARCH" class="textboxsearch">
                                        <span class="submit-wrap"><input type="submit" value="" class="submitsearch" name="submitsearch"><i class="fa fa-long-arrow-right middle-ux"></i></span>
                                    </form>
                                    <!-- <form id="searchbox_XXXXXXXXXX:YYYYYYYYY" action="" class="search-form_header" >
    <input value="XXXXXXXXXX:YYYYYYYYY" name="cx" type="hidden" />
    <input value="FORID:11" name="cof" type="hidden"/>
    <input id="q" style="" name="q" size="75" type="text" class="textboxsearch"/>
    <span class="submit-wrap"><input type="submit" value="" class="submitsearch" name="submitsearch"><i class="fa fa-long-arrow-right middle-ux"></i></span>
</form> -->
                                </div>
                                <!--END sidebar-bottom-wrap-->
                            </div>
                            <!--end sidebar-main-->
                        </aside>
                    </section>
                    <section class="grid-col grid-col-6 footer-contact-form">
                        <h2 class="corner-radius">Head office Location</h2>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3320.2632302434567!2d73.06232780128616!3d33.67624761524989!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76105006f800eeb3!2sNational%20Testing%20Service!5e0!3m2!1sen!2s!4v1597816336412!5m2!1sen!2s" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </section>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="grid-row clear-fix">
                    <div class="copyright">National Testing Service - Pakistan<span></span> 2023 . All Rights Reserved.</div>
                    <nav class="footer-nav">
                        <ul class="clear-fix">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="projectsnew.html">Open Applications</a>
                            </li>
                            <li>
                                <a href="tender.html">Procurement</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ's</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
        </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>