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

    <!--********* Preloader Start ********-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--********* Preloader End ***********-->

    <!--********* Main wrapper start ***********-->
    <div id="main-wrapper">

        <!--************* Nav header start ***************-->
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
            <div class="container-fluid">
                <div class="page-titles">
                    <h3>
                        إضافة مدخل جديد
                    </h3>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">إضافة مدخل جديد</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="api/input/insert.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="text" 
                                                    class="form-control input-default"
                                                    name="input_label"
                                                        placeholder="أدخل أسم المدخل">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control input-rounded"
                                                    name="input_desc"
                                                        placeholder="أدخل وصف المدخل">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <select 
                                                name="input_type"
                                                class="default-select form-control wide mb-3">
                                                    <option value="text_input">مدخل نصي</option>
                                                    <option value="number_input">مدخل رقمي </option>
                                                    <option value="select">إختيار واحد من متعدد</option>
                                                    <option value="checkgrid">إختيار متعدد من متعدد</option>
                                                    <option value="toggle"> زر التبديل </option>
                                                    <option value="confirm"> زر تأكيد</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">

                                                <select 
                                                name="input_role"
                                                class="default-select form-control wide mb-3">
                                                    <option value="primary">
                                                        مدخل أساسي
                                                    </option>
                                                    <option value="secondry">
                                                        مدخل إضافي
                                                    </option>

                                                </select>


                                            </div>


                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">
                                                    إضافة
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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