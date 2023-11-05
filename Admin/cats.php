<?php
include './../dbcontext/connect.php';
?>
<?php
         $sql = "select * from cats";
		 $result = mysqli_query($con, $sql);
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
	<meta name="description" content="Aqar.Tech :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Aqar.Tech :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Aqar.Tech :  Property Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title>Aqar.Tech - Property Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>
<body dir="rtl">

    <!--********* Preloader start ******-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--******************* Preloader end *****************-->

    <!--*************** Main wrapper start ***************-->
    <div id="main-wrapper">

        <!--***************** Nav header start ****************-->
        <?php include 'components/nav_header.php'; ?>
        <!--***************  Nav header end ******************-->
		
		<!--************* Chat box start ***************-->
		<?php include 'components/chatbox.php'; ?>
		<!--************* Chat box End *************-->


		<!--*************** Header start ************-->
		<?php include 'components/header.php'; ?>
		<!--************ Header end ********-->

		<!--***************** Sidebar start *********-->
		<?php include 'components/sidebar.php'; ?>
		<!--********** Sidebar end *********-->



	
		<!--**************** Content body start ***************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="form-head page-titles d-flex  align-items-center">
					<div class="me-auto  d-lg-block">
						<h2 class="text-black font-w600">
                            فئات العقارات
                        </h2>
						
					</div>
					<a href="javascript:void(0);" class="btn btn-primary rounded light me-3">Refresh</a>
					<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-cog me-0"></i></a>
				</div>


				<div class="row">
					<div class="col-xl-12">
						<div class="card house-bx">
							<div class="card-body">
								<div class="media align-items-center">
									<svg width="88" height="85" viewBox="0 0 88 85" fill="none" xmlns="http://www.w3.org/2000/svg">	
										<path d="M77.25 	30.8725V76.25H10.75V30.8725L44 8.70001L77.25 30.8725Z" fill="url(#paint0_linear)"/><path d="M2 76.25H86V85H2V76.25Z" fill="url(#paint1_linear)"/>	<path d="M21.25 39.5H42.25V76.25H21.25V39.5Z" fill="url(#paint2_linear)"/><path d="M52.75 39.5H66.75V64H52.75V39.5Z" fill="url(#paint3_linear)"/><path d="M87.9424 29.595L84.0574 35.405L43.9999 8.70005L3.94237 35.405L0.057373 29.595L43.9999 0.300049L87.9424 29.595Z" fill="url(#paint4_linear)"/><path d="M49.25 62.25H70.25V65.75H49.25V62.25Z" fill="url(#paint5_linear)"/>
										<path d="M52.75 50H66.75V53.5H52.75V50Z" fill="url(#paint6_linear)"/><path d="M28.25 57C28.25 57.4642 28.0656 57.9093 27.7374 58.2375C27.4092 58.5657 26.9641 58.75 26.5 58.75C26.0359 58.75 25.5908 58.5657 25.2626 58.2375C24.9344 57.9093 24.75 57.4642 24.75 57C24.75 56.5359 24.9344 56.0908 25.2626 55.7626C25.5908 55.4344 26.0359 55.25 26.5 55.25C26.9641 55.25 27.4092 55.4344 27.7374 55.7626C28.0656 56.0908 28.25 56.5359 28.25 57Z" fill="url(#paint7_linear)"/><defs><linearGradient id="paint0_linear" x1="19.255" y1="28.8075" x2="64.1075" y2="73.6775" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#F9F9DF"/><stop offset="1" stop-color="#B6BDC6"/></linearGradient><linearGradient id="paint1_linear" x1="2" y1="80.625" x2="86" y2="80.625" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#3C6DB0"/><stop offset="1" stop-color="#291F51"/></linearGradient><linearGradient id="paint2_linear" x1="22.9825" y1="40.6025" x2="37.8575" y2="69.915" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#F0CB49"/><stop offset="1" stop-color="#E17E43"/></linearGradient><linearGradient id="paint3_linear" x1="52.75" y1="51.75" x2="66.75" y2="51.75" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#7BC7E9"/><stop offset="1" stop-color="#3C6DB0"/></linearGradient><linearGradient id="paint4_linear" x1="0.057373" y1="17.8525" x2="87.9424" y2="17.8525" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#E17E43"/><stop offset="1" stop-color="#85152E"/></linearGradient><linearGradient id="paint5_linear" x1="784.25" y1="216.25" x2="1036.25" y2="216.25" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#3C6DB0"/><stop offset="1" stop-color="#291F51"/></linearGradient><linearGradient id="paint6_linear" x1="570.75" y1="179.5" x2="682.75" y2="179.5" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#3C6DB0"/><stop offset="1" stop-color="#291F51"/></linearGradient><linearGradient id="paint7_linear" x1="98.25" y1="195.25" x2="105.25" y2="195.25" gradientUnits="userSpaceOnUse"><stop offset="" stop-color="#E17E43"/><stop offset="1" stop-color="#85152E"/></linearGradient></defs>
									</svg>
									<div class="media-body">
										<h4 class="fs-22 text-white">إجمالي الفئات </h4>
										<p class="mb-0">
										22
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
					<?php 
			  while($prop = mysqli_fetch_array($result))
			  {
				?>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="row border-bottom mx-0 pt-4 px-2 align-items-center">


									<div
										class="col-xl-3 col-xxl-4 col-lg-6 col-sm-12 mb-sm-4 mb-3 align-items-center media">
                                                
												<img class="me-sm-4 me-3 img-fluid rounded" width="90"
											src="images/house.png" style="margin:10px" alt="user image">
                                            


										<div class="media-body">
											<span class="text-primary d-block">
											<?php echo "#".$prop['type_id']; ?>
											</span>
											<h3 class="fs-20 text-black font-w600 mb-1">
											<?php echo $prop['title'];?>
											</h3>
											<span class="d-block mb-lg-0 mb-0">
											</span>
										</div>

									</div>


									<div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3 text-lg-center">
										<small class="mb-2 d-block">الحالة</small>
										<span class="text-black font-w600">
										<?php echo $prop['status'];?>
										</span>
									</div>

									<div class="col-xl-2 col-xxl-3 col-lg-6 col-sm-4 mb-sm-4 mb-3">
										<small class="mb-2 d-block">تاريخ الإضافة</small>
										<span class="text-black font-w600">
										<?php echo $prop['date_created'];?>
										</span>
									</div>

									<div class="col-xl-2 col-xxl-2 col-lg-3 col-sm-4 mb-sm-4">
										<div class="dropdown ms-4  mt-auto mb-auto">
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
												<a class="dropdown-item" href="cat_inputs.php?cat_id=<?php echo $prop['type_id']; ?>">تحديد المدخلات</a>
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

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
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
	
	<!-- Datatable -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script>
		(function($) {
		 
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		   
		})(jQuery);
	</script>
</body>

<!-- Mirrored from Aqar.Tech.dexignzone.com/xhtml/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 14:04:45 GMT -->
</html>