<?php
include './../dbcontext/connect.php';
?>
<?php
         $prop_id = 59;
         $sql = "select * from properties where prop_id = '$prop_id'";
		 $result = mysqli_query($con, $sql);
         $prop = mysqli_fetch_array($result);
         $user_token = $prop["prop_owner"];

         $sql2 = "select * from users where user_token = '$user_token'";
         $result2 =  mysqli_query($con, $sql2);
         $user = mysqli_fetch_array($result2);

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
    <title><?php echo $prop['adv_title']; ?></title>
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


		<!--*********** Content body start *************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="form-head page-titles d-flex  align-items-center">
					<div class="me-auto  d-lg-block">
						<h2 class="text-black font-w600">
                        <?php echo $prop['adv_title']; ?>
                        </h2>
						
					</div>
					<a href="javascript:void(0);" class="btn btn-danger rounded me-3">
                       تعديل بيانات العقار
                    </a>
					<a href="javascript:void(0);" class="btn btn-primary rounded light me-3">
                        تحديث
                    </a>
					<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-cog me-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bg-primary text-center">
									<div class="card-body">
										<h2 class="fs-30 text-white">
                                            سعر العقار
                                        </h2>
										<span class="text-white font-w300">
                                        <?php echo $prop['prop_price']; ?>
                                        </span>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="card text-center">
									<div class="card-body">
										<div class="position-relative mb-3 d-inline-block">
											<img src="images/man.png" alt="" class="rounded" width="140">
											<a href="#" class="profile-icon"><i class="las la-cog"></i></a>
										</div>
										<h4 class="text-black fs-20 font-w600">
                                          <?php echo $user['user_name']?>
                                        </h4>
										<span class="mb-3 text-black d-block">Agent</span>
										<p> <?php echo $user['user_email']?></p>
										<ul class="property-social">
											<li><a href="javascript:void(0);"><i class="lab la-instagram"></i></a></li>
											<li><a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a></li>
											<li><a href="javascript:void(0);"><i class="lab la-twitter"></i></a></li>
										</ul>
									</div>
									<div class="card-footer border-0 pt-0">
										<a href="javascript:void(0);" class="btn btn-outline-primary d-block rounded">
											<i class="las la-phone scale5 me-2"></i>
                                            <?php echo $user['user_phone']?>
									</a>
									</div>
								</div>
							</div>
					
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
						<div class="card">
                        <img src="images/gallery/2.png" alt="" style="border-radius:20px">
                        </div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="image-gallery owl-carousel">
											<div class="items">
												<img src="images/gallery/1.png" alt="">
											</div>
											<div class="items">
												<img src="images/gallery/2.png" alt="">
											</div>
											<div class="items">
												<img src="images/gallery/3.png" alt="">
											</div>
											<div class="items">
												<img src="images/gallery/1.png" alt="">
											</div>
											<div class="items">
												<img src="images/gallery/2.png" alt="">
											</div>
											<div class="items">
												<img src="images/gallery/3.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-xl-12">
								<div class="card property-features">
									<div class="card-header border-0 pb-0">	
										<h3 class="fs-20 text-black mb-0">Property Features</h3>
									</div>
                                    
									<div class="card-body">
										<ul>
											<li><i class="las la-check-circle"></i>Swimming pool</li>
											<li><i class="las la-check-circle"></i>Terrace</li>
											<li><i class="las la-check-circle"></i>Radio</li>
											<li><i class="las la-check-circle"></i>Grill</li>
											<li><i class="las la-check-circle"></i>Cable TV</li>
											<li><i class="las la-check-circle"></i>Air conditioning</li>
											<li><i class="las la-check-circle"></i>Cofee pot</li>
											<li><i class="las la-check-circle"></i>Balcony</li>
											<li><i class="las la-check-circle"></i>Computer</li>
											<li><i class="las la-check-circle"></i>Parquet</li>
											<li><i class="las la-check-circle"></i>Internet</li>
											<li><i class="las la-check-circle"></i>Towelwes</li>
											<li><i class="las la-check-circle"></i>Roof terrace</li>
											<li><i class="las la-check-circle"></i>Oven</li>
										</ul>
									</div>
								</div>
							</div>



                            
							<div class="col-xl-12">
								<div class="card property-features">
									<div class="card-header border-0 pb-0">	
										<h3 class="fs-20 text-black mb-0">
                                            وصف العقار : 
                                        </h3>
									</div>
                                    
									<div class="card-body">
                                        <p>
                                        <?php echo $prop['prop_desc']; ?>
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
	<script>
		function assignedDoctor()
		{
		
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.front-view-slider').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					
					480:{
						items:1
					},			
					
					767:{
						items:1
					},
					1750:{
						items:1
					}
				}
			})
			jQuery('.image-gallery').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					
					480:{
						items:1
					},			
					
					767:{
						items:2
					},
					1750:{
						items:3
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				assignedDoctor();
			}, 1000); 
		});
		
	</script>	
	
</body>

<!-- Mirrored from Aqartech.dexignzone.com/xhtml/property-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 14:04:48 GMT -->
</html>