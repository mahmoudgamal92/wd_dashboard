<?php
include './../dbcontext/connect.php';
$cat_id = $_GET['cat_id'];
$cmd = "select * from cats where type_id = '$cat_id'";
$result = mysqli_query($con, $cmd);
$cat = mysqli_fetch_array($result);

// Get All Inputs Where Cat Id , and just Check in Each row if the cat is exist with same input id 

$cmd1 = "select * from cat_inputs where cat_id = '$cat_id'";
$result1 = mysqli_query($con, $cmd1);

$inputs = [];
while( $row = mysqli_fetch_array($result1))
{
    $inputs[] = $row['input_id'];
}
//echo count( $inputs);
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
    <meta name="description" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Omah :  Property Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Omah - Property Bootstrap Admin Dashboard</title>
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
        <?php include 'components/nav_header.php'; ?>
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

            <form method="POST" action="api/input/update_cat.php">
                <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>" />
                <!-- row -->
                <div class="container">
                    <div class="form-head page-titles d-flex  align-items-center">

                        <div class="me-auto  d-lg-block">
                            <h2 class="text-black font-w600">
                                <?php echo $cat['title']; ?>
                            </h2>
                        </div>
                        <button type="submit" class="btn btn-primary rounded light me-3">
                            حفظ
                        </button>
                        <a href="javascript:void(0);" class="btn btn-primary rounded"><i
                                class="fas fa-cog me-0"></i></a>
                    </div>





                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    مدخلات العقار
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width50">
                                                    <div
                                                        class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="custom-control-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th><strong>INPUT NO.</strong></th>
                                                <th><strong>TITLE</strong></th>
                                                <th><strong>PLACEHOLDER</strong></th>
                                                <th><strong>TYPE</strong></th>
                                                <th><strong>ROLE</strong></th>
                                                <th><strong>DESC</strong></th>
                                                <th><strong>LABEL</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $cmd = "select * from inputs";
                                            $res = $con->query($cmd);
                                            while ($row = $res->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheckBox2" name="inputs[]"
                                                                value="<?php echo $row['input_id']; ?>"
                                                                <?php
                                                                
                                                                if(in_array($row['input_id'],$inputs)) {
                                                                    echo "checked";
                                                                }
                                                                else
                                                                {

                                                                }
                                                                ?>
                                                                >
                                                            <label class="custom-control-label"
                                                                for="customCheckBox2"></label>
                                                        </div>
                                                    </td>
                                                    <td><strong>
                                                            <?php echo $row['input_id']; ?>
                                                        </strong></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="w-space-no">
                                                                <?php echo $row['input_title']; ?>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['input_type']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['input_role']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><i
                                                                class="fas fa-circle text-success me-1"></i> Active</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>


                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="api/input/delete.php?id=<?php
                                                        echo $row['input_id']; ?>"
                                                            class="btn btn-danger shadow btn-xs sharp">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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