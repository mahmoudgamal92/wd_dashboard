<?php
include './../dbcontext/connect.php';
?>

<?php
$user_id = $_GET['user_id'];
$sql = "select * from users where user_id = '$user_id'";
$result = $con->query($sql);
$user = mysqli_fetch_array($result);
$user_token = $user['user_token'];


$sql = "select * from properties where prop_owner = '$user_token'";
$props = $con->query($sql);
?>

<?php
function getUser($token)
{
    global $con;
    $sql = "select * from users where user_token = '$token'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    return $row['user_name'];
}
;
function getCat($id)
{
    global $con;
    $sql = "select * from cats where type_id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    return $row['title'];
}
?>



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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">


                <div class="form-head page-titles d-flex  align-items-center">
                    <div class="col-md-8 me-auto  d-lg-block">
                        <h2 class="text-black font-w600">
                            بيانات العميل
                        </h2>

                    </div>
                    <div class="col-md-4">

                        <a href="javascript:void(0);" class="btn btn-danger rounded me-3">تعديل</a>
                        <a href="javascript:void(0);" class="btn btn-primary rounded light me-3">إعادة تحميل</a>
                        <a href="javascript:void(0);" class="btn btn-primary rounded"><i
                                class="fas fa-cog me-0"></i></a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-xxl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card bg-primary text-center">
                                    <div class="card-body">
                                        <h2 class="fs-30 text-white">
                                            <?php
                                            echo $user['user_name'];
                                            ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="position-relative mb-3 d-inline-block">
                                            <img src="images/user.png" alt="" class="rounded" width="140">
                                            <a href="#" class="profile-icon"><i class="las la-cog"></i></a>
                                        </div>
                                        <h4 class="text-black fs-20 font-w600">
                                            <?php
                                            echo $user['user_name'];
                                            ?>
                                        </h4>
                                        <span class="mb-3 text-black d-block">Agent</span>

                                        <ul class="property-social">
                                            <li><a href="javascript:void(0);"><i class="lab la-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="lab la-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary d-block rounded">
                                            <i class="las la-phone scale5 me-2"></i>
                                            <?php echo $user['user_phone'] ?>

                                        </a>
                                    </div>


                                    <div class="card-footer border-0 pt-0">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary d-block rounded">
                                            <i class="las la-email scale5 me-2"></i>
                                            <?php echo $user['user_email'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <?php
                        while ($prop = $props->fetch_assoc()) {
                            ?>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="row border-bottom mx-0 pt-4 px-2 align-items-center">


                                                <div
                                                    class="col-xl-3 col-xxl-4 col-lg-6 col-sm-12 mb-sm-4 mb-3 align-items-center media">
                                                    
                                                        <img class="me-sm-4 me-3 img-fluid rounded" width="90"
                                                            src="images/man.png" style="margin:10px" alt="user image">
                                                     


                                                    <div class="media-body">
                                                        <span class="text-primary d-block">
                                                            <?php echo "#" . $prop['adv_number']; ?>
                                                        </span>
                                                        <h3 class="fs-20 text-black font-w600 mb-1">
                                                            <?php echo $prop['adv_title']; ?>
                                                        </h3>
                                                        <span class="d-block mb-lg-0 mb-0">
                                                        </span>
                                                    </div>

                                                </div>


                                                <div
                                                    class="col-xl-2 col-xxl-3 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3 text-lg-center">
                                                    <small class="mb-2 d-block">العنوان</small>
                                                    <span class="text-black font-w600">
                                                        <?php echo $prop['prop_address']; ?>
                                                    </span>
                                                </div>

                                                <div class="col-xl-2 col-xxl-3 col-lg-6 col-sm-4 mb-sm-4 mb-3">
                                                    <small class="mb-2 d-block">نوع الإعلان</small>
                                                    <span class="text-black font-w600">
                                                        <?php echo $prop['adv_type']; ?>
                                                    </span>
                                                </div>

                                                <div class="col-xl-2 col-xxl-2 col-lg-3 col-sm-4 mb-sm-4">
                                                    <div class="dropdown ms-4  mt-auto mb-auto">
                                                        <div class="btn-link" data-bs-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="customer.php?user_id=<?php echo "1" ?>">عرض
                                                                البيانات</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

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