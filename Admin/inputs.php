<?php
include './../dbcontext/connect.php';
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
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head page-titles">
					<div class="row">

						<div class="col-md-8">
							<div class="me-auto  d-lg-block">
								<h2 class="text-black font-w600">
									مدخلات العقارات
								</h2>
							</div>
						</div>

						<div class="col-md-4">
							<div class="row">

								<div class="col-md-6">
									<a class="btn btn-primary rounded" data-bs-toggle="modal"
										data-bs-target="#exampleModalCenter">جديد</a>
								</div>

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
									إضافة مدينة جديدة
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="basic-form">



									<form action="api/input/insert.php" method="POST">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-default"
														name="input_label" placeholder="أدخل أسم المدخل">
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<input type="text" class="form-control input-rounded"
														name="input_desc" placeholder="أدخل وصف المدخل">
												</div>
											</div>


										</div>


										<div class="row">
											<div class="col-md-12">
												<select name="input_type" class="default-select form-control wide mb-3">
													<option value="text_input">مدخل نصي</option>
													<option value="number_input">مدخل رقمي </option>
													<option value="select">إختيار واحد من متعدد</option>
													<option value="checkgrid">إختيار متعدد من متعدد</option>
													<option value="toggle"> زر التبديل </option>
													<option value="confirm"> زر تأكيد</option>
												</select>
											</div>
											<div class="col-md-12">

												<select name="input_role" class="default-select form-control wide mb-3">
													<option value="primary">
														مدخل أساسي
													</option>
													<option value="secondry">
														مدخل إضافي
													</option>

												</select>


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
					</div>
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

											<td><strong>
													<?php echo $row['input_id']; ?>
												</strong></td>
											<td>
												<div class="d-flex align-items-center">
													<span class="w-space-no">
														<?php echo $row['input_desc']; ?>
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