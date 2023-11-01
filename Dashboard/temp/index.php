<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>زاوية - لوحة التحكم</title>
    <style>
    #loader {
        transition: all .3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000
    }

    #loader.fadeOut {
        opacity: 0;
        visibility: hidden
    }

    .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out
    }

    @-webkit-keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0)
        }

        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }
    }

    @keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0
        }
    }
    </style>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
    </script>
    <div>
        <?php include 'components/sidebar.php';?>
        <div class="page-container">

            <?php include 'components/header.php'; ?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item w-100">
                            <div class="row gap-20">
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">
                                              الفئات
                                            </h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                                <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">
                                            <?php
                                            $cmd =  "select * from cats";
                                            $res = mysqli_query($con,$cmd);
                                            $count = mysqli_num_rows($res);
                                            echo $count;
                                             ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6>الإعلانات</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                                <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">
                                                        <?php
                                                        $cmd =  "select * from advs";
                                                        $res = mysqli_query($con,$cmd);
                                                        $count = mysqli_num_rows($res);
                                                        echo $count;
                                                          ?>
                                                      </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">المستخدمين</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed">
                                                    <span id="sparklinedash3"></span></div>
                                                <div class="peer">
                                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">
                                                      <?php
                                                        $cmd =  "select * from users";
                                                        $res = mysqli_query($con,$cmd);
                                                        $count = mysqli_num_rows($res);
                                                        echo $count;
                                                        ?>
                                               
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     


                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">الإعدادات</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash4"></span></div>
                                                <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">
                                                        <?php
                                                    //  $cmd =  "select * from sub_cats";
                                                    //  $res = mysqli_query($con,$cmd);
                                                    //  $count = mysqli_num_rows($res);
                                                    //  echo $count;
                                                    ?>    
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">النسخ الإحتياطي</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash4"></span></div>
                                                <div class="peer"><span
                                             class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">
                                                        <?php
                                                    // $cmd =  "select * from products";
                                                    // $res = mysqli_query($con,$cmd);
                                                    // $count = mysqli_num_rows($res);
                                                    // echo $count;
                                                    ?>    
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include 'components/footer.php'; ?>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/vendor.js"></script>
    <script type="text/javascript" src="assets/js/bundle.js"></script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"5fa98ad07f1f0fde","version":"2020.11.6","si":10}'></script>
</body>

</html>