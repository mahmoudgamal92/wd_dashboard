<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aqartech :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Aqartech :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Aqartech :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>لوحة التحكم عقارنك</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>

<body dir="rtl">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/logo-text.png" alt="">
                <img class="brand-title" src="images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--*************  Nav header end *************-->

        <!--************* Chat box start ***************-->
        <?php include 'components/chatbox.php'; ?>
        <!--************* Chat box End *************-->


        <!--*************** Header start ************-->
        <?php include 'components/header.php'; ?>
        <!--************ Header end ********-->

        <!--***************** Sidebar start *********-->
        <?php include 'components/sidebar.php'; ?>
        <!--********** Sidebar end *********-->

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-xl-4 col-lg-12 col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="text-center p-3 overlay-box "
                                style="background-image: url(images/big/img1.jpg);">
                                <div class="profile-photo">
                                    <img src="images/logo.png" width="100" class="img-fluid rounded-circle" alt=""
                                        style="background-color:#FFF">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">
                                    الباقة الأساسية
                                </h3>
                                <p class="text-white mb-0">
                                    2000 SR
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد الإعلانات</span>
                                    <strong class="text-muted">
                                        100
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد المستخدمين</span>
                                    <strong class="text-muted">
                                        5
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">فترة التجديد</span>
                                    <strong class="text-muted">
                                        شهريا
                                    </strong>
                                </li>
                            </ul>
                            <div class="card-footer border-0 mt-0">
                                <button class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-bell-o"></i>
                                    <span>
                                        تعديل البيانات
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>








                    <div class="col-xl-4 col-lg-12 col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="text-center p-3 overlay-box "
                                style="background-image: url(images/big/img1.jpg);">
                                <div class="profile-photo">
                                    <img src="images/logo.png" width="100" class="img-fluid rounded-circle" alt=""
                                        style="background-color:#FFF">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">
                                    الباقة الفضية
                                </h3>
                                <p class="text-white mb-0">
                                    2000 SR
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد الإعلانات</span>
                                    <strong class="text-muted">
                                        100
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد المستخدمين</span>
                                    <strong class="text-muted">
                                        5
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">فترة التجديد</span>
                                    <strong class="text-muted">
                                        شهريا
                                    </strong>
                                </li>
                            </ul>
                            <div class="card-footer border-0 mt-0">
                                <button class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-bell-o"></i>
                                    <span>
                                        تعديل البيانات
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>





                    <div class="col-xl-4 col-lg-12 col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="text-center p-3 overlay-box "
                                style="background-image: url(images/big/img1.jpg);">
                                <div class="profile-photo">
                                    <img src="images/logo.png" width="100" class="img-fluid rounded-circle" alt=""
                                        style="background-color:#FFF">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">
                                    الباقة الذهبية
                                </h3>
                                <p class="text-white mb-0">
                                    2000 SR
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد الإعلانات</span>
                                    <strong class="text-muted">
                                        100
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">عدد المستخدمين</span>
                                    <strong class="text-muted">
                                        5
                                    </strong>
                                </li>


                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">فترة التجديد</span>
                                    <strong class="text-muted">
                                        شهريا
                                    </strong>
                                </li>
                            </ul>
                            <div class="card-footer border-0 mt-0">
                                <button class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-bell-o"></i>
                                    <span>
                                        تعديل البيانات
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>




            </div>
        </div>
        <!--**************Content body end ***********-->

        <!--************* Footer start *************-->
        <?php include 'components/footer.php'; ?>
        <!--************** Footer end *****************-->


    </div>
    <!--******** Main wrapper end ***********-->
    <!--************* Scripts ***************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
</body>

</html>