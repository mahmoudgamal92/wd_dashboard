<?php
include './../dbcontext/connect.php';
?>
<?php
$cmd = "select * from packages";
$res = mysqli_query($con,$cmd);
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
    <!--************** Preloader end ************-->

    <!--************* Main wrapper start *************-->
    <div id="main-wrapper">

        <!--*************** Nav header start ************-->

        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="images/logo_white.png" alt="">

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
            <div class="form-head page-titles">
					<div class="row">

						<div class="col-md-10">
							<div class="me-auto  d-lg-block">
								<h2 class="text-black font-w600">
                                    باقات الإشتراك 
								</h2>
							</div>
						</div>

						<div class="col-md-2">
							<div class="row">
								<div class="col-md-6">
                                <a class="btn btn-primary rounded" data-bs-toggle="modal"
										data-bs-target="#exampleModalCenter">
                                    <div class="row">
                                        <i class="fas fa-plus me-0"></i>
                                        <span> إضافة باقة جديدة </span>
                                    </div>
										
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>



                <div class="modal fade" id="exampleModalCenter">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">
									إضافة باقة جديدة
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="basic-form">

									<form method="POST" action="api/packages.php">
										<input type="hidden" name="action" value="create">
										<div class="row">

											
											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-default" name="title"
														placeholder="أدخل أسم الباقة" required>
												</div>
											</div>

											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="max_ads"
														placeholder=" أدخل عدد الإعلانات الكلية " required>
												</div>
											</div>

                                            <div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="featured"
														placeholder=" أدخل عدد الإعلانات المميزة " required>
												</div>
											</div>


                                            <div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="coords"
														placeholder=" أدخل عدد المستخدمين " required>
												</div>
											</div>

                                            
                                            <div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="price"
														placeholder=" أدخل سعر الباقة  " required>
												</div>
											</div>


                                            <div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="desc"
														placeholder="بيانات إضافية" required>
												</div>
											</div>

                                            
											<div class="col-md-12">
												<div class="mb-3">
													<select dir="rtl" name="duration"
														class="default-select form-control wide mb-3">

														<option value="30">شهريا</option>
														<option value="90">ربع سنوية</option>
                                                        <option value="180">نصف سنوية  </option>
                                                        <option value="365">سنوية</option>
													</select>

												</div>
											</div>



										</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger light"
									data-bs-dismiss="modal">إغلاق</button>
								<button type="submit" class="btn btn-primary">حفظ</button>
							</div>

							</form>

						</div>
					</div>
				</div>



                <div>
                    <div class="container-fluid">
                    <div class="row">
                        <?php

            while($row = mysqli_fetch_array($res))
            {
                ?>
                        <div class="col-xl-3 col-lg-12 col-sm-12">
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
                                        <span class="mb-0">عدد الإعلامات المميزة</span>
                                        <strong class="text-muted">
                                            10
                                        </strong>
                                    </li>



                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0">عدد المستخدمين</span>
                                        <strong class="text-muted">
                                            5
                                        </strong>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0">السعر </span>
                                        <strong class="text-muted">
                                            1550 ريال
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


                        <?php
}
?>
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