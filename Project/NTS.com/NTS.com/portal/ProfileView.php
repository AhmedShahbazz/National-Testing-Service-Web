<?php
    include 'include/config.php';

    session_start();

    $cnic = $_SESSION['cnic'];

    $profilePic;

    $email;
    $ph_number;
    $first_name;
    $last_name;
    $father_name;
    $dob;
    $perm_adress;
    $post_adress;
    $alternate_ph_number;
    $province;
    $dstrict;
    $gender;
    $bloodGroup;
    $religion;
    $materialStatus;

    $disability;

    $degreeYear;
    $degreeCat;
    $degsSubject;
    $yearPassing;
    $markingType;
    $Obtmarks;
    $totalMarks;
    $university;

    $profilePer;

    $getDataSQL = "SELECT * FROM users WHERE cnic = '$cnic'";

    $result = mysqli_query($conn, $getDataSQL);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $profilePer = $row["complePer"];
    } else {
        echo "No results found.";
    }





$booling = false;


$getDataSQL = 'SELECT firstName,lastName,ph_number,email,fatherName,DOB,gender,province,religion,maritalStatus,University,yearOfPassing,totalMarks,obtainedMarks,jobType,organization,dateFrom,dateTo,profilepic FROM users inner join individualdata on users.cnic = individualdata.cnic left join individualeducation on users.cnic = individualeducation.cnic left join individualexp on users.cnic = individualexp.cnic where users.cnic = ?';
$stmt = mysqli_prepare($conn, $getDataSQL);
mysqli_stmt_bind_param($stmt, 's', $param_cnic);
$param_cnic = '3540121722763';
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
if (mysqli_stmt_num_rows($stmt) == 1) {
    mysqli_stmt_bind_result($stmt, $first_name,$last_name,$ph_number,$email,$father_name,$dob,$gender,$province,$religion,$materialStatus,$university,$yearPassing,$totalMarks,$Obtmarks,$jobType,$organization,$dateFrom,$dateTo,$profilePic);
    if (mysqli_stmt_fetch($stmt)) {
        $booling = true;
    }
} else {
    $err = true;
}


?>

<html class="loaded" lang="en" data-textdirection="ltr" data-arp-injected="true"><!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTS - Candidate (Portal)</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-todo.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
    <!-- END: Custom CSS-->
    <style>
        @import url('/assets/css/urdu_fonts.css');

        b {
            font-family: 'Noto Naskh Arabic', serif;
            font-size: 1.5em;
            direction: rtl;
        }

        body {
            font-family: 'Noto Nastaliq Urdu Draft', serif;
        }

        font {
            font-size: 15px;
        }

        .card-content {
            border-top: 18px solid #c52d2f;
            border-radius: 5px;
        }

        .text-success {
            color: #c52d2f !important;
        }
    </style>
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout 2-columns navbar-sticky footer-static pace-done menu-expanded vertical-menu-modern" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-new-gr-c-s-check-loaded="14.1105.0" data-gr-ext-installed="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <!-- END: Header-->
    <div class="header-navbar-shadow"></div>
    <!-- BEGIN: Main Menu-->
    <!-- END: Main Menu-->
    <style>
        .navigation li {
            position: relative;
            white-space: nowrap;
            border-bottom: 1px solid cadetblue;
        }
    </style>
    <?php include('include/header.php') ?>
    <!-- END: Header-->
    <?php include('include/sidebar.php') ?>
    <script>
        displayed = 0;
        window.addEventListener("keydown", function(event) {
            $("#success-alert").alert('close');
            $("#zindabad").alert('close');
        });

        function showloader() {
            document.getElementById('zindabad').style.display = '';
            var closeMenuid = document.getElementById('closeMenu');
            if ($(window).width() < '1200') {
                $(closeMenuid).click();
            }
            setTimeout(function() {
                document.getElementById('zindabad').style.display = 'none';
            }, 4000);
        }
    </script>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <style>
        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%;
            font-weight: 700;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
            font-weight: 700;
        }

        .text-warning {
            color: #000 !important;
        }

        .progress {
            display: flex;
            height: 2rem;
            background-color: #eaecf4;
            border-radius: 0.35rem;
        }

        sup {
            top: 0em;
        }

        label.text-uppercase.p-0.m-0 {
            font-size: 9px;
        }

        .text-success {
            color: #c52d2f !important;
            text-transform: capitalize;
        }

        .text-justify {
            text-align: none;
        }

        .form-group {
            margin-bottom: 0rem;
        }

        .equal-cols {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0"> Profile</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard">
                                            <i class="bx bx-home-alt"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body ">
                <!-- Form wizard with icon tabs section start -->
                <section id="personal Info">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="MyPersonalInfo">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <h4 class="float-left  text-success"><strong><span class="text-secondary"></span> Personal Information</strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" id="completecolor" style="width:<?php echo $profilePer ?>%;border-radius: 0px;background-color:#04AA6D;">
                                                                <b style="    direction: ltr !important;">Profile Complete: <span id="profileCompleteness"><?php echo $profilePer . " " ?></span>%</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mt-2 p-0 bg-danger text-white text-center text-uppercase small d-none" id="cvMs1"></div>
                                                </div>
                                            </div>
                                            <div class=" mt-3">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                                        <div style="max-width:120px;">
                                                            <div class="d-flex justify-content-center align-items-center rounded animated zoomIn" style="width:120px;height:120px;background-color:rgb(233,236,239);">
                                                                <img src="app-assets/images/candidate/user.png" alt="img placeholder" class="img-fluid rounded" style="height:120px;width:100%;max-height:120px;max-width:120px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="display: flex;flex-direction: column;justify-content: space-evenly;align-content: flex-start;align-items: flex-start;" class="col-lg-10 col-md-8 col-sm-12 text-left animated fadeIn pr-0 pt-0 mt-0">
                                                        <div class="d-block p-0 m-0">
                                                                <i style="padding-right: 10px;" class="bx bx-user-check"></i> <?php echo $first_name . " " . $last_name ?></div>
                                                        <div class="d-block p-0 m-0"><i style="padding-right: 10px;" class="bx bx-fingerprint"></i><?php echo $cnic ?></div>
                                                        <div class="d-block p-0 m-0"><i style="padding-right: 10px;" class="bx bx-phone-call"></i><?php echo $ph_number ?></div>
                                                        <div class="d-block p-0 m-0"><i style="padding-right: 10px;" class="bx bx-envelope"></i><?php echo $email ?></div>
                                                    </div>
                                                    <div id="MyContactInfo" style="width:100%;margin-left: 10px;margin-right: 10px;border-bottom: none;">
                                                        <div class="card rounded-0 mb-1 mt-3 p-3">
                                                            <div class="row">
                                                                <div class="col-md-4  border-right">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">Father Name: </label> <?php echo $father_name ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4  border-right">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">Date of Birth: </label> <?php echo $dob ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">MARITAL STATUS: </label> <?php echo $materialStatus ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="m-0 p-0 mt-2 mb-2">
                                                            <div class="row">
                                                                <div class="col-md-4 border-right">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">Gender: </label> <?php echo $gender ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4  border-right">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">DOMICILE: </label> <?php echo $province ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">RELIGION: </label><?php echo $religion ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <section id="Education Info">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="MyEducation">
                                    <div class="card-body p-2 pl-3 pr-3">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <h4 class="float-left  text-success"><strong><span class="text-secondary"></span>Education</strong></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mt-2 p-0 bg-danger text-white text-center text-uppercase small d-none" id="cvMs3"></div>
                                            </div>
                                            <div class="row bg-light border border-top-0 mb-1" style="font-size:13px!important;">
                                                <div class="col-12">
                                                    <div class="row mb-1 pt-1">
                                                        <div class="col-5 col-xl-7 col-lg-7 col-md-5 col-sm-5 border-right">
                                                            <div class="row border-bottom">
                                                                <div class="col-12 text-left"><label class="text-uppercase p-0 m-0"><b>Education (Degree)</b></label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left">University / Board</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-3 border-right">
                                                            <div class="row border-bottom p-0 m-0">
                                                                <div class="col-12 text-center">
                                                                    <label class="text-uppercase p-0 m-0"><b>Duration</b></label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-center">Date</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-xl-2 col-lg-2 col-md-3 col-sm-3">
                                                            <div class="row border-bottom p-0 m-0">
                                                                <div class="col-12 text-center"><label class="text-uppercase p-0 m-0"><b>Marks</b></label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center m-0 p-0 border-right" style="font-size: 9px;">Obtained</div>
                                                                <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center m-0 p-0" style="font-size: 10px;">Total</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group text-center">
                                                        <b style="text-align:center;color:red;font-size: 15px;">No Education Record Found.</b>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="MyEducation">
                                    <div class="card-body p-2 pl-3 pr-3">
                                        <div class="row border-bottom">
                                            <div class="col-lg-12 col-md-12">
                                                <h6 class="float-left text-uppercase text-success"><strong><span class="text-secondary">4:</span> Job/Work Experience</strong></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-2 p-0 bg-danger text-white text-center text-uppercase small d-none" id="cvMs5"></div>
                                        </div>
                                        <div class="mt-0" "="">
                                 <div class=" row bg-light border border-top-0 mb-1" style="font-size:13px!important;">
                                            <div class="col-12">
                                                <div class="row mb-1 pt-1">
                                                    <div class="col-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 border-right">
                                                        <div class="row">
                                                            <div class="col-12 text-left"><label class="text-uppercase p-0 m-0"><b>Job Type/Work Details</b></label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                        <div class="row">
                                                            <div class="col-12 text-center"><label class="text-uppercase p-0 m-0"><b>Experience</b></label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col  border-left-warning" style="border-width:3.2px!important;"></div>
                                        </div>
                                        <hr class="m-0 p-0 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group text-center">
                                                    <b style="text-align:center;color:red;font-size: 15px;">No Experience Record Found.</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--<section id="validation">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-content">
                           <div class="card-body">
                              <fieldset>
                              <div class="card rounded-0 mb-1" id="MyExpFields">
                                 <div class="card-body p-2 pl-3 pr-3">
                                    <div class="row border-bottom">
                                       <div class="col-lg-12 col-md-12">
                                          <h5 class="float-left  text-success"><strong><span class="text-secondary">4:</span> Fields of Experience</strong></h5>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col mt-2 p-0 bg-danger text-white text-center text-uppercase small d-none" id="cvMs4"></div>
                                    </div>
                                    <div class="mt-2" id="RsCdv4"><span class="badge p-2 badge-success ml-0 mt-0 mr-2 mb-2 rounded-0">Information Technology(IT)<a href="javascript::;" class="ml-2 pt-0 pb-0 pr-1 pl-1 mr-0 bg-white"">
									<i class="fa fa-times text-danger"></i></a></span><span class="badge p-2 badge-success ml-0 mt-0 mr-2 mb-2 rounded-0">Education<a href="javascript::;" class="ml-2 pt-0 pb-0 pr-1 pl-1 mr-0 bg-white">
									<i class="fa fa-times text-danger"></i></a></span>
									<span class="badge p-2 badge-success ml-0 mt-0 mr-2 mb-2 rounded-0">Project Management<a href="javascript::;" class="ml-2 pt-0 pb-0 pr-1 pl-1 mr-0 bg-white" onclick="cvdRS('CvDv4',4,29791);">
									<i class="fa fa-times text-danger"></i></a></span>
									<span class="badge p-2 badge-success ml-0 mt-0 mr-2 mb-2 rounded-0">Software<a href="javascript::;" class="ml-2 pt-0 pb-0 pr-1 pl-1 mr-0 bg-white" onclick="cvdRS('CvDv4',4,106356);">
									<i class="fa fa-times text-danger"></i></a></span></div>
                                 </div>
                              </div>
                              <fieldset>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>-->
    </div>
    </div>
    </div>
    </div>
    <footer class="footer footer-static footer-light d-print-none">
        <p class="text-center">
            National Testing Service - Pakistan 2021. All Rights Reserved.
            <br>
            <small>Design and Developed by NTS <span class="text-info">IT Department</span></small>
        </p>
    </footer>
    <!-- END: Footer-->
    <script src="app-assets/js/option.js"></script>
    <script src="app-assets/js/masking.js"></script>
    <script>
        $(document).ready(function() {
            $("input#checker").bind("click", function(o) {
                if ($("input#checker:checked").length) {
                    $("#enddate").val($("#startdate").val());
                } else {
                    $("#enddate").val("");
                }
            });
        });
        $(document).ready(function() {
            $('#disability').on('change', function() {
                    if (['field2', 'field3'].indexOf(this.value) > -1) {
                        $("#image").show();
                    } else {
                        $("#image").hide();
                    }
                })
                .change();
        });
        $(":input").inputmask();
    </script>
    <script>
        function validateCheckBox(ele) {
            var checkBox = $(ele).attr('data-name');
            if ($(ele).is(":checked")) {
                //console.log(checkBox);
                var check = $('input[data-name=' + checkBox + ']').removeAttr('required');
            } else {
                $('input[data-name=' + checkBox + ']').prop('required', true);
            }
        }
    </script>
    <!-- BEGIN: Vendor JS-->
    <script src="/livewire/livewire.js?id=ef0c4e092e24439bb958" data-turbo-eval="false" data-turbolinks-eval="false"></script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'QdS247OhLfPIJW6miYvwmbYOFJgEuQVPw9AVMVgE';
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        document.addEventListener("DOMContentLoaded", function() {
            window.livewire.start();
        });
    </script>
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="assets/js/barcode.js"></script>
    <script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="/app-assets/js/qrcode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;7ba400310bd93e17&quot;,&quot;version&quot;:&quot;2023.3.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;d916c8714fc7434a88ee303955b2329b&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
</body><!-- END: Body--><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>