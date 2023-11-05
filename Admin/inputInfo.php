<?php
include './../dbcontext/connect.php';
?>


<?php
         $input_id = $_GET['id'];
         $sql = "select * from inputs where input_id  = '$input_id'";
		 $result = mysqli_query($con, $sql);
         $input = mysqli_fetch_array($result);

         $sql2 = "select * from input_values where input_id = '$input_id'";
         $result2 =  mysqli_query($con, $sql2);
         $values = mysqli_fetch_array($result2);

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
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title><?php echo $input['input_desc']; ?></title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>


<body dir="rtl">

    <!--*******************
        Preloader start******-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--********** Preloader End  **********-->

    <!--*********** Main wrapper start **********-->

    <div id="main-wrapper">
        <!--********** Nav header start *************-->
        <?php include 'components/nav_header.php'; ?>

        <!--***************  Nav header end ***********-->

        <!--************* Chat box start **************-->
        <?php include 'components/chatbox.php'; ?>
        <!--************* Chat box End *************-->

        <!--*************** Header start ************-->
        <?php include 'components/header.php'; ?>
        <!--************ Header end ********-->

        <!--***************** Sidebar start *********-->
        <?php include 'components/sidebar.php'; ?>
        <!--********** Sidebar end *********-->


		<!--*********** Content body start ***********-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			<div class="form-head page-titles">
				<div class="row">

					<div class="col-md-10">
						<div class="me-auto  d-lg-block">
								<h2 class="text-black font-w600">
								<?php echo $input['input_desc']; ?>
								</h2>
						</div>
					</div>

					<div class="col-md-2">
						<div class="row">
							<div class="col-md-6">
							 <a href="javascript:void(0);" class="btn btn-primary rounded">
								<i class="fas fa-cog me-0"></i>
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
								إضافة قيمة جديدة للمدخل	
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="basic-form">

									<form method="POST" action="api/input/input_val.php">
										<input type="hidden" name="action" value="create">
										<input type="hidden" name="input_id" value="<?= $input_id ?>">
										<div class="row">

											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-default" name="param"
														placeholder="أدخل أسم الخيار " required>
												</div>
											</div>

											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded" name="value"
														placeholder=" أدخل القيمة البرمجية " required>
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




				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-12">
								<div class="card text-center">
									<div class="card-body">

										<div class="position-relative mb-3 d-inline-block">
											<img src="images/input.png" alt="" class="rounded" width="140">
										</div>

										<h4 class="text-black fs-20 font-w600">
										<?php echo $input['input_desc']; ?>
                                        </h4>

										<span class="mb-3 text-black d-block">
										<?php echo $input['input_role']; ?>
										</span>

										<p> 
										<?php echo $input['input_type']; ?>
									    </p>
										
									</div>
									<div class="card-footer border-0 pt-0">
										<a href="javascript:void(0);" class="btn btn-outline-primary d-block rounded">
											<i class="las la-pen scale5 me-2"></i>
                                          تعديل
									</a>
									</div>
								</div>
							</div>
					
						</div>
					</div>

					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card property-features">
									<div class="card-header border-0 pb-0">	
										<h3 class="fs-20 text-black mb-0">
                                            خيارات المدخل 
                                        </h3>

										<a class="btn btn-primary rounded" data-bs-toggle="modal"
										data-bs-target="#exampleModalCenter">
                                        إضافة خيار جديد
                                            </a>
									</div>
                                    
									<div class="card-body">
									<table class="table table-responsive-md">
									<thead>
										<tr>

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
										$cmd = "select * from input_values where input_id = '$input_id'";
										$res = $con->query($cmd);
										while ($row = $res->fetch_assoc()) {

											?>
										<tr>

											<td>
												<strong>
													<?php echo $row['input_id']; ?>
												</strong>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<span class="w-space-no">
														<?php echo $row['value']; ?>
													</span>
												</div>
											</td>
											<td>
												<?php echo $row['param']; ?>
											</td>
										
											<td>
												<div class="d-flex align-items-center"><i
														class="fas fa-circle text-success me-1"></i> Active</div>
											</td>
											<td>
												<div class="d-flex">
													<a href="inputinfo.php?id=<?=$row['input_id']?>" class="btn btn-primary shadow btn-xs sharp me-1">
														<i class="fas fa-eye"></i>
													</a>


												</div>
											</td>

											<td>
												<a href="api/input/delete.php?id=<?php  
												echo $row['input_id']; ?>" class="btn btn-danger shadow btn-xs sharp">
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



                        <div class="col-xl-12">
								<div class="card property-features">
									<div class="card-header border-0 pb-0">	
										<h3 class="fs-20 text-black mb-0">
                                           تصميم المدخل 
                                        </h3>
									</div>
                                    
									<div class="card-body">
                                        <p>
                                      للإصدار القادم
                                        </p>
									</div>
								</div>
							</div>



						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**************** Content body End **************-->

        <!--************** Footer start ***************-->
        <?php include 'components/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--************* Main wrapper End ************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
</body>
</html>