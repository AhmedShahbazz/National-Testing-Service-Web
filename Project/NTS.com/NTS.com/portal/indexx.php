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
        <div class="sticky-wrapper">
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
                        <h1>Open Applications</h1>
                    </div>
                </div>
                <div class="page-content woocommerce">
                    <div class="container clear-fix">
                        <div class="grid-col-row">
                            <div class="grid-col grid-col-12">
                                <div role="main">
                                    <div itemscope="" itemtype="http://schema.org/Product" class="product">
                                        <div class="tabs">
                                            <div class="block-tabs-btn clear-fix">
                                                <div class="tabs-btn active" data-tabs-id="newProjects" id="newProjects">Open Applications</div>
                                            </div>
                                            <div class="tabs-keeper">
                                                <div class="container-tabs active" data-tabs-id="cont-newProjects">
                                                    <div class="page-content ">
                                                        <div class="container clear-fix ">
                                                            <div class="grid-col-row ">
                                                                <div class="grid-col grid-col-12 ">
                                                                    <main>
                                                                        <div class="page-content woocommerce">
                                                                            <div class="container clear-fix">
                                                                                <div class="grid-col-row">
                                                                                    <div class="grid-col grid-col-12">
                                                                                        <!-- <div id="list-or-grid">
                             <div class="grid-view active" title="Switch to grid view">
                                <i class="fa fa-th-large"></i>
                            </div>
                            <div class="list-view" title="Switch to list view">
                                <i class="fa fa-th-list"></i>
                            </div> 
                        </div>-->
                                                                                        <ul class="products grid-col-12">
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTQ=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Aptitude Test (NAT 2023-V)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission is:</span> &nbsp; Tuesday, 2nd May 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="applytest1.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Apply</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!-- <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTQ=">National Aptitude Test (NAT 2023-V)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTU=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Graduate Assessment Test (GAT General 2023-III)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission is:</span> &nbsp; Tuesday, 2nd May 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="applytest2.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> apply</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!-- <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTU=">Graduate Assessment Test (GAT General 2023-III)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTY=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Graduate Assessment Test (GAT Subject 2023-II)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission is:</span> &nbsp; Tuesday, 2nd May 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="applytest3.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> apply</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!-- <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTY=">Graduate Assessment Test (GAT Subject 2023-II)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Situation Vacant National Testing Service</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission is:</span> &nbsp; Sunday, 23rd April 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="applytest.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> apply</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!-- <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Situation Vacant National Testing Service</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </main>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container-tabs" data-tabs-id="cont-oldProjects">
                                                    <div class="page-content ">
                                                        <div class="container clear-fix ">
                                                            <div class="grid-col-row ">
                                                                <div class="grid-col grid-col-12 ">
                                                                    <main>
                                                                        <div class="page-content woocommerce">
                                                                            <div class="container clear-fix">
                                                                                <div class="grid-col-row">
                                                                                    <div class="grid-col grid-col-12">
                                                                                        <ul class="products">
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>CAA Model School & College (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 3rd April 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MTAxMTE=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">CAA Model School & College (Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Pothohar Cadet College Chakwal
                                                                                                        (Admission Test 2023)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Saturday, 18th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/02_23/PCC_Chakwal_Feb2023_Online/Chakwal.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Pothohar Cadet College Chakwal
(Admission Test 2023)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Cadet College Bhurban Murree
                                                                                                        (Admission Test 2023)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 17th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/01_23/CC_Bhurban_Jan2023_Online/Bhurban.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Cadet College Bhurban Murree
(Admission Test 2023)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Test of English for International Communication (TOEIC 2023-III)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 13th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MTAxMDI=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Test of English for International Communication (TOEIC 2023-III)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Lareb Mustafa Institute Of Nursing, Gambat
                                                                                                        (Admission 2022 - 23)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 10th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/03_23/LarebInstitute_March2023/Laraib.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Lareb Mustafa Institute Of Nursing, Gambat
(Admission 2022 - 23)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Faisalabad Electric Supply Company Limited (FESCO) Career Opportunities for Disabled Persons</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 6th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MTAxMDA=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Faisalabad Electric Supply Company Limited (FESCO) Career Opportunities for Disabled Persons</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Agri Tech Ltd, Trainee Engineers and Trainee Apprentices for Plants situated in Mianwali & Haripur</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Saturday, 4th March 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MTAxMDM=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Agri Tech Ltd, Trainee Engineers and Trainee Apprentices for Plants situated in Mianwali & Haripur</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Fauji Fertilizer Company Limited , Management Trainee(Engineers/Chemists-2023)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Wednesday, 15th February 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/12_22/FFC_Dec2022/FFC_Dec22.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Fauji Fertilizer Company Limited , Management Trainee(Engineers/Chemists-2023)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Primary & Secondary Healthcare Department Govt. Of The Punjab Career Opportunities Punjab Aids Control Program</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Tuesday, 31st January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/OTU=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Primary & Secondary Healthcare Department Govt. Of The Punjab Career Opportunities Punjab Aids Control Program</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Primary & Secondary Healthcare Department Govt Of Punjab Career Opportunities At "Strengthening Of Development Wing Of Primary & Secondary Healthcare Department"</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Wednesday, 25th January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/ODk=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Primary & Secondary Healthcare Department Govt Of Punjab Career Opportunities At "Strengthening Of Development Wing Of Primary & Secondary Healthcare Department"</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Punjab Probation and Parole Service</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Tuesday, 10th January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/OTA=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Punjab Probation and Parole Service</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>POPULATION WELFARE DEPARTMENT SITUATIONS VACANT IN ADP Scheme titled as �Establishment of Adolescent Health Centres In 24 Family Health Clinics attached with District Head Quarters Hospitals 2021-23�</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Tuesday, 10th January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/ODc=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">POPULATION WELFARE DEPARTMENT SITUATIONS VACANT IN ADP Scheme titled as �Establishment of Adolescent Health Centres In 24 Family Health Clinics attached with District Head Quarters Hospitals 2021-23�</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Indus College of Family Medicine and Public Health (ICFMPH)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Thursday, 5th January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/12_22/Indus College_Dec2022/IndusCollege.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Indus College of Family Medicine and Public Health (ICFMPH)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>CAREER OPPORTUNITIES AT "IMPROVEMENT IN MEDICO-LEGAL REGIME ACROSS HOSPITALS IN PUNJAB"</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Thursday, 5th January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/Nzc=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">CAREER OPPORTUNITIES AT "IMPROVEMENT IN MEDICO-LEGAL REGIME ACROSS HOSPITALS IN PUNJAB"</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Faisalabad Electric Supply Company Limited (FESCO) Career Opportunity</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Tuesday, 3rd January 2023 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjA=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Faisalabad Electric Supply Company Limited (FESCO) Career Opportunity</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>SITUATIONS VACANT IN ADP Scheme titled as "Establishment of Strategic Planning Unit (SPU) (2019 � 2024)"</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 12th December 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NzQ=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">SITUATIONS VACANT IN ADP Scheme titled as "Establishment of Strategic Planning Unit (SPU) (2019 � 2024)"</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>SITUATIONS VACANT IN ADP Scheme titled as �INCENTIVIZATION IN FAMILY PLANNING SERVICES PUNJAB (2021 � 2024)�</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 12th December 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NzY=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">SITUATIONS VACANT IN ADP Scheme titled as �INCENTIVIZATION IN FAMILY PLANNING SERVICES PUNJAB (2021 � 2024)�</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Punjab Cane Commissioner, Job opportunities</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Saturday, 10th December 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NzI=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Punjab Cane Commissioner, Job opportunities</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Punjab Cane Commissioner, Job opportunities Contract Based</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Saturday, 10th December 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NzE=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Punjab Cane Commissioner, Job opportunities Contract Based</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>(Doctor of Pharmacy Pharm. D) Shifa College of Pharmaceutical Sciences, Shifa Tameer-e-Millat University, Islamabad</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Wednesday, 23rd November 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDU=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">(Doctor of Pharmacy Pharm. D) Shifa College of Pharmaceutical Sciences, Shifa Tameer-e-Millat University, Islamabad</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Population Welfare Department Situations Vacant In ADP Scheme Strengthening Services, Access & Management of Family Planning Programme in Punjab (2021-2024)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Wednesday, 16th November 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjM%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Population Welfare Department Situations Vacant In ADP Scheme Strengthening Services, Access & Management of Family Planning Programme in Punjab (2021-2024)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>SITUATIONS Vacant In ADP Scheme "Strengthening Services, Access & Management of Family Planning Programme in Punjab (2021-2024)"</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Wednesday, 16th November 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjM=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">SITUATIONS Vacant In ADP Scheme "Strengthening Services, Access & Management of Family Planning Programme in Punjab (2021-2024)"</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Oil & Gas Development Company Limited OGDCL, Screening Test</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Thursday, 10th November 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjI=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Oil & Gas Development Company Limited OGDCL, Screening Test</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Govt of the Punjab Primary & Secondary Health Care JOB OPPORTUNITIES AT ESTABLISHMENT OF PUNJAB HEALTH & WELLNESS RADIO STATION Department</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 31st October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NTg%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Govt of the Punjab Primary & Secondary Health Care JOB OPPORTUNITIES AT ESTABLISHMENT OF PUNJAB HEALTH & WELLNESS RADIO STATION Department</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Faisalabad Electric Supply Company Limited (FESCO) Career Opportunity</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 31st October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjA%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Faisalabad Electric Supply Company Limited (FESCO) Career Opportunity</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Gujranwala Electric Power Company (GEPCO) Career Opportunities</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 31st October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NjE%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Gujranwala Electric Power Company (GEPCO) Career Opportunities</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Company Ltd Career Opportunities</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 17th October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDc%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Company Ltd Career Opportunities</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Company Ltd Career Opportunities</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 17th October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDg%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Company Ltd Career Opportunities</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>NTDCL Career Opportunities</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 17th October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDg=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">NTDCL Career Opportunities</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span> ADP Scheme Restarting Bio-Metric Attendance System & Queue Management System (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Sunday, 16th October 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/eyJpdiI6ImUybTdCamQrcDZrMUd4c1RvUHlIWlE9PSIsInZhbHVlIjoicmdieTQyVUlZQXZ3NXlYekV2dEloZz09IiwibWFjIjoiMDhjMmZmMDdmODJhOGIyMzhmM2I2ZjkwODQxZGFkMjk2MzYxZWQwMGFkMzAxZjgxNTI2NjFlNzdhNjViYmIwMiJ9" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM="> ADP Scheme  Restarting Bio-Metric Attendance System & Queue Management System (Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Despatch Company Ltd (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 30th September 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDQ=" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Despatch Company Ltd (Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Despatch Company Ltd (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 30th September 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/NDQ%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Despatch Company Ltd (Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Despatch Company Ltd
                                                                                                        (Screening Test)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 30th September 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/09_22/NTDCL_Sep2022/NTDCL.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Despatch Company Ltd
(Screening Test)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>The University of Azad Jammu And Kashmir Muzaffarabad
                                                                                                        (Situation Vacant)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 5th September 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/08_22/AJK_Uni_Aug2022_Online/AJK.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">The University of Azad Jammu And Kashmir Muzaffarabad
(Situation Vacant)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Govt of the Punjab Primary & Secondary Health Care Department Career Opportunities At Health Information & Service Delivery Unit (HISDU)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Tuesday, 23rd August 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/eyJpdiI6Ijd4VEp4ZS9tMFYyOHN3QTZycmtjb1E9PSIsInZhbHVlIjoiR3hKaVpicDFjTWZ1TXdyNmVRdnZKZz09IiwibWFjIjoiMjdmMGQ0ODA2ZDJlMjM2M2RiMjk4NTQ4MTRmNTIyYzBjMGEzOGJjMDQwOWE5MThhNDU0ZjhhYzU2YzllNWY3NiJ9" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Govt of the Punjab Primary & Secondary Health Care Department Career Opportunities At Health Information & Service Delivery Unit (HISDU)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Population Welfare Department Situations Vacant In ADP Scheme Establishment Of Adolescent Health Centres (2021-2023)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Thursday, 4th August 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MzE%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Population Welfare Department Situations Vacant In ADP Scheme Establishment Of Adolescent Health Centres (2021-2023)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Population Welfare Department Situation Vacant In ADP Scheme(Establishment Of Model Family Planning Centres(July,2021-June,2024))</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Thursday, 4th August 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/Alldetail/MzA%3D" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Population Welfare Department Situation Vacant In ADP Scheme(Establishment Of Model Family Planning Centres(July,2021-June,2024))</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>National Transmission & Despatch Company
                                                                                                        (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 16th May 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/05_22/NTDCL_May_2022_Online/NTDC.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">National Transmission & Despatch Company
(Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Government of the Punjab Primary & Secondary Healthcare Department
                                                                                                        (Career Opportunities at District Health Authorities(Junior Technician))</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Friday, 15th April 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk/Test&amp;Products/Announced/03_22/PSHCD_JT_March2022_Online/PSHD.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Government of the Punjab Primary & Secondary Healthcare Department
(Career Opportunities at District Health Authorities(Junior Technician))</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Govt of the Punjab Primary & Secondary Health Care Department(Career Opportunities at Hepatitis & Infection Control Program)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 28th March 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="https://portal.nts.org.pk/" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Govt of the Punjab Primary & Secondary Health Care Department(Career Opportunities at Hepatitis & Infection Control Program)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Government of the Punjab Primary & Secondary Healthcare Department
                                                                                                        (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 21st March 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk//Test&amp;Products/Announced/02_22/PSHD_PCNDP_March2022_Online/PSHCDP.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Government of the Punjab Primary & Secondary Healthcare Department
(Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Government of the Punjab Literacy & Non Formal Basic Education Department
                                                                                                        (Career Opportunities)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 17th January 2022 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk//Test&amp;Products/Announced/1221/PunLiteracy_Jan2022_Online/PL.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Government of the Punjab Literacy & Non Formal Basic Education Department
(Career Opportunities)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                            <li class="product" style="text-align: left;">
                                                                                                <!--<div class="picture">
                <img src="" alt="" style="height: 270px;">
                <span class="hover-effect"></span>
                <div class="link-cont">
                    <a href="admin/" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                    <a href="../https://portal.nts.org.pk/Alldetail/MTAxMTM=" class=" cws-left cws-slide-right"><i class="fa fa-link"></i>
                    &nbsp; 
                    </a>
                </div>
            </div>-->
                                                                                                <div class="product-name">
                                                                                                    <span>Azad Jammu & Kashmir High Court, Muzaffarabad
                                                                                                        (Situation Vacant)</span>
                                                                                                </div>
                                                                                                <div class="price" style="float:left;">
                                                                                                    <span class="amount"><span style="color:#999;">Last Date of Application Form Submission was:</span> &nbsp; Monday, 17th August 2020 &nbsp;
                                                                                                        <a style="margin-top:-15px;" href="http://nts.org.pk//Test&amp;Products/Announced/12_22/AJK_Court_Online2/AJK.php" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-book"></i> Details</a>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--  <div class="product-description">
                <div class="short-description">
                    <p>../https://portal.nts.org.pk/Alldetail/MTAxMTM=">Azad Jammu & Kashmir High Court, Muzaffarabad
(Situation Vacant)</p>
                </div>
            </div>-->
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </main>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="divider-color " />
                                </div>
                            </div>
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

</body>

</html>