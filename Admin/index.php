<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Aqargate :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Aqargate :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Aqargate :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<title>Aqargate - Property Bootstrap Admin Dashboard</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<!-- Vectormap -->
	<link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
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

		<?php include 'components/nav_header.php'; ?>

		<!--**********************************
			Nav header end
		***********************************-->

		<!--************* Chat box start ***************-->
		<?php include 'components/chatbox.php'; ?>
		<!--************* Chat box End *************-->


		<!--*************** Header start ************-->
		<?php include 'components/header.php'; ?>
		<!--************ Header end ********-->

		<!--***************** Sidebar start *********-->
		<?php include 'components/sidebar.php'; ?>
		<!--********** Sidebar end *********-->



		<!--************ Content body start ***************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-md-flex col-md-12 mb-20">

					<div class="col-md-8 me-right d-lg-block">
						<h2 class="text-black" style="text-align:right">لوحة التحكم</h2>
						<p class="mb-0">أهلا بك في لوحة التحكم الخاصة بتطبيق عقار.تك</p>
					</div>

					<div class="col-md-4 me-left d-lg-block">

						<a href="index.html" class="btn btn-primary rounded light me-3">
							إعادة تحميل
						</a>

						<a href="javascript:void(0);" class="btn btn-primary rounded">
							<i class="fas fa-cog me-0"></i>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">

							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<h2 class="fs-36 text-black font-w600">2,356</h2>
												<p class="fs-18 mb-0 text-black font-w500">
													إجمالي عدد العقارات للبيع
												</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1"
													data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>5/8</span>
												<small class="text-primary">71%</small>
												<span class="circle bgl-primary"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<h2 class="fs-36 text-black font-w600">2,206</h2>
												<p class="fs-18 mb-0 text-black font-w500">
													إجمالي عدد العقارات للإيجار
												</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1"
													data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
												<small class="text-success">90%</small>
												<span class="circle bgl-success"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body p-4">
										<div class="media ai-icon">
											<span class="me-3 bgl-primary text-primary">
												<!-- <i class="ti-user"></i> -->
												<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
													height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-user">
													<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
													<circle cx="12" cy="7" r="4"></circle>
												</svg>
											</span>
											<div class="media-body">
												<p class="mb-1">المستخدمين</p>
												<h4 class="mb-0">3280</h4>
												<span class="badge badge-primary">+3.5%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body p-4">
										<div class="media ai-icon">
											<span class="me-3 bgl-warning text-warning">
												<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30"
													height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-file-text">
													<path
														d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
													</path>
													<polyline points="14 2 14 8 20 8"></polyline>
													<line x1="16" y1="13" x2="8" y2="13"></line>
													<line x1="16" y1="17" x2="8" y2="17"></line>
													<polyline points="10 9 9 9 8 9"></polyline>
												</svg>
											</span>
											<div class="media-body">
												<p class="mb-1">المعلنين</p>
												<h4 class="mb-0">2570</h4>
												<span class="badge badge-warning">+3.5%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body  p-4">
										<div class="media ai-icon">
											<span class="me-3 bgl-danger text-danger">
												<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30"
													height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-dollar-sign">
													<line x1="12" y1="1" x2="12" y2="23"></line>
													<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
												</svg>
											</span>
											<div class="media-body">
												<p class="mb-1">إجمالي الإشتراكات</p>
												<h4 class="mb-0">364.50K</h4>
												<span class="badge badge-danger">-3.5%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body p-4">
										<div class="media ai-icon">
											<span class="me-3 bgl-success text-success">
												<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg"
													width="24" height="24" viewBox="0 0 24 24" fill="none"
													stroke="currentColor" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" class="feather feather-database">
													<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
													<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
													<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
												</svg>
											</span>
											<div class="media-body">
												<p class="mb-1">Patient</p>
												<h4 class="mb-0">364.50K</h4>
												<span class="badge badge-success">-3.5%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 text-black">إجمالي الربح</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-2 pb-0">
								<div class="d-flex flex-wrap align-items-center">
									<span class="fs-36 text-black font-w600 me-3">$678,345</span>
									<p class="me-sm-auto me-3 mb-sm-0 mb-3">last month $563,443</p>
									<div class="d-flex align-items-center">
										<svg class="me-3" width="87" height="47" viewBox="0 0 87 47" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M29.8043 20.9254C15.2735 14.3873 5.88029 27.282 3 34.5466V46.2406H85V4.58005C70.8925 -0.868404 70.5398 8.66639 60.8409 19.5633C51.1419 30.4602 47.9677 29.0981 29.8043 20.9254Z"
												fill="url(#paint0_linear)" />
											<path
												d="M3 35.2468C5.88029 27.9822 15.2735 15.0875 29.8043 21.6257C47.9677 29.7984 51.1419 31.1605 60.8409 20.2636C70.5398 9.36665 70.8925 -0.168147 85 5.28031"
												stroke="#37D159" stroke-width="6" />
											<defs>
												<linearGradient id="paint0_linear" x1="44" y1="-36.4332" x2="44"
													y2="45.9686" gradientUnits="userSpaceOnUse">
													<stop stop-color="#37D159" offset="0" />
													<stop offset="1" stop-color="#37D159" stop-opacity="0" />
												</linearGradient>
											</defs>
										</svg>
										<span class="fs-22 text-success me-2">7%</span>
										<svg width="12" height="6" viewBox="0 0 12 6" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M0 6L6 2.62268e-07L12 6" fill="#37D159" />
										</svg>
									</div>
								</div>
								<div id="chartTimeline"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-8 col-xxl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Overview</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown">
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="5" cy="12" r="2"></circle>
														<circle fill="#000000" cx="12" cy="12" r="2"></circle>
														<circle fill="#000000" cx="19" cy="12" r="2"></circle>
													</g>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="d-sm-flex flex-wrap  justify-content-around">
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded me-3 bg-primary p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z"
															fill="white" />
														<path
															d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z"
															fill="white" />
														<path
															d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z"
															fill="white" />
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Sale</p>
													<span class="fs-18 text-black font-w700">2,346 Unit</span>
												</div>
											</div>
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded me-3 bg-success p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z"
															fill="white" />
														<path
															d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z"
															fill="white" />
														<path
															d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z"
															fill="white" />
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Rent</p>
													<span class="fs-18 text-black font-w700">1,252 Unit</span>
												</div>
											</div>
										</div>
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="row">
									<div class="col-xl-12 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-body">
												<div id="monocromeChart"></div>
												<div class="d-flex flex-wrap mt-3">
													<span class="text-black font-w600 me-5 mb-2">
														<svg class="me-2" width="20" height="20" viewBox="0 0 20 20"
															fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="20" height="20" rx="8" fill="#FFB067" />
														</svg>Agent</span>
													<span class="text-black font-w600 mb-2">
														<svg class="me-2" width="20" height="20" viewBox="0 0 20 20"
															fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="20" height="20" rx="8" fill="#B655E4" />
														</svg>Customers</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-body">
												<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Viewed
													<span class="pull-right ms-auto text-dark fs-14">561/days</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Listed
													<span class="pull-right ms-auto text-dark fs-14">3,456 Unit</span>
												</p>
												<div class="progress mb-3" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:90%; height:10px;" role="progressbar">
														<span class="sr-only">90% Complete</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Properties Map Location</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown">
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="5" cy="12" r="2"></circle>
														<circle fill="#000000" cx="12" cy="12" r="2"></circle>
														<circle fill="#000000" cx="19" cy="12" r="2"></circle>
													</g>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-3">
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													Europe
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													Asia
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:100%; height:10px;" role="progressbar">
														<span class="sr-only">100% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													Africa
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													Australia
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:50%; height:10px;" role="progressbar">
														<span class="sr-only">50% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													America
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:70%; height:10px;" role="progressbar">
														<span class="sr-only">70% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">
													USA
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated"
														style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</div>
											<div class="col-lg-9">
												<div id="world-map"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Customer Review</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown">
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="5" cy="12" r="2"></circle>
														<circle fill="#000000" cx="12" cy="12" r="2"></circle>
														<circle fill="#000000" cx="19" cy="12" r="2"></circle>
													</g>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/1.jpg" width="58"
													alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">John Doe</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">5m ago</span>
											</div>
											<p class="fs-14 mb-0">Friendly service
												Josh, Lunar and everyone at Just Property in Hastings deserved a big
												Thank You from us for moving us from Jakarta to Medan during the
												lockdown.
											</p>
										</div>
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/2.jpg" width="58"
													alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Amelia Tuner</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">10h ago</span>
											</div>
											<p class="fs-14 mb-0">I viewed a number of properties with Just Property and
												found them to be professional, efficient, patient, courteous and helpful
												every time.
											</p>
										</div>
										<div class="pb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/3.jpg" width="58"
													alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Jessica Humb</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">2d ago</span>
											</div>
											<p class="fs-14 mb-0">Dealing with Syamsudin and Bakri was a joy. I got in
												touch with Just Property after seeing a couple of properties that caught
												my eye. Both Syamsudin and Bakri strive to deliver a professional
												service and surpassed my expectations - they were not only helpful but
												extremely approachable and not at all bumptious...
											</p>
										</div>
									</div>
									<div class="card-footer border-0 p-0">
										<a href="review.html" class="btn d-block btn-primary rounded">See More
											Reviews</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->

		<!--**********************************
			Footer start
		***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
						target="_blank">DexignZone</a> 2022</p>
			</div>
		</div>
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
		***********************************-->


	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

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

	<!-- Vectormap -->
	<script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
	<script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 0,
				nav: true,
				dots: false,
				navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive: {
					0: {
						items: 1
					},

					480: {
						items: 1
					},

					767: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			})
			/*Custom Navigation work*/
			jQuery('#next-slide').on('click', function () {
				$('.testimonial-one').trigger('next.owl.carousel');
			});

			jQuery('#prev-slide').on('click', function () {
				$('.testimonial-one').trigger('prev.owl.carousel');
			});
			/*Custom Navigation work*/
		}

		jQuery(window).on('load', function () {
			setTimeout(function () {
				carouselReview();
			}, 1000);
		});
	</script>

</body>

</html>