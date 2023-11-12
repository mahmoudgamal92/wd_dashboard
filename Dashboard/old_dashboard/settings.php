<?php
include './../dbcontext/connect.php';
include './components/checkAuth.php';
?>

<?php
function get_value($param)
{
  global $con;
  $cmd = "select * from settings where key_val = '$param'";
  $result = mysqli_query($con,$cmd);
  $row = mysqli_fetch_array($result);
  return $row['value_ar'];
}
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>الإعدادات العامة</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <style>
    .nav-item .active {
      background-color: #007bff;
      color: #FFF;
    }

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

    <?php include 'components/sidebar.php'; ?>
    <div class="page-container">
      <?php include 'components/header.php';?>
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <?php  include 'components/alerts.php' ?>
            <h4 class="c-grey-900 mT-10 mB-30">صفحة الإعدادات</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">

                  <div class="row">
                    <div class="container my-4">
                      <!--Grid row-->
                      <div class="row">

                        <!--Grid column-->
                        <div class="col-md-3 mb-4 ">

                          <ul class="nav md-pills pills-secondary d-flex flex-column"
                            style="border:1px solid grey;border-radius:5px">

                            <li class="nav-item" style="border-bottom:1px solid grey;">
                              <a class="nav-link active" data-toggle="tab" href="#basic_information" role="tab">
                                البيانات الاساسية
                              </a>
                            </li>
                            


                                <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#policy_privacy" role="tab">
                               السياسة والخصوصية
                              </a>
                            </li>

                         
                            <!--<li class="nav-item">-->
                            <!--  <a class="nav-link" data-toggle="tab" href="#contact" role="tab">-->
                            <!--   صفحة التواصل-->
                            <!--  </a>-->
                            <!--</li>-->

                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#footer" role="tab">
                              روابط التواصل الاجتماعي
                              </a>
                            </li>
                          </ul>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-9 mb-4">

                          <!-- Tab panels -->
                          <div class="tab-content pt-0">




                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="basic_information" role="tabpanel">
                              <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">

                                  <form action="settings/update.php" method="POST" enctype="multipart/form-data">
                                      
                                      
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">
                                       أسم التطبيق
                                      </label>
                                      <input name="key" value="general_settings" type="hidden" />
                                      <input name="app_name" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo get_value('app_name')?>">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">
                                      * عنوان الصفحة الرئيسية
                                      </label>
                                      <input name="home_page_title" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="<?php echo get_value('home_page_title')?>">
                                    </div>


                                    <div class="form-group">
                                      <label for="exampleInputEmail1">
                                      * البريد الالكتروني الرئيسي
                                      </label>
                                      <input name="email" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo get_value('primary_email')?>">
                                    </div>



                                     <div class="form-group">
                                      <label for="exampleInputEmail1">
                                      * رقم هاتف التواصل
                                      </label>
                                      <input name="phone" type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo get_value('primary_phone')?>">
                                    </div>

                                   

                                   
                                    <button class="btn btn-primary" type="submit">
                                      Submit
                                    </button>
                                  </form>
                                </div>

                              </div>
                            </div>
                            <!--/.Panel 1-->


                         <!--Panel 6-->
                            <div class="tab-pane fade" id="policy_privacy" role="tabpanel">
                              <form action="settings/update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">
                                  شروط الإعلان *
                                  </label>
                                  <input name="key" value="policy_condition" type="hidden" />
                                  <textarea rows="3" cols="200" name="terms" class="form-control"
                                    style="margin-bottom:50px;text-align:right;direction:rtl">
                                      <?php echo get_value('terms');?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">
                                  السياسات و الخصوصية *
                                  </label>
                                  <textarea rows="3" cols="200" name="policy" class="form-control"
                                    style="margin-bottom:50px;text-align:right;direction:rtl"><?php echo get_value('policy');?></textarea>
                                </div>
                                <div class="form-group" style="margin-top:20px;text-align:center">
                                  <button class="btn btn-primary" type="submit">
                                    حفظ
                                  </button>
                                </div>
                              </form>

                            </div>

                            <!--Panel 5 -->
                            <div class="tab-pane fade" id="footer" role="tabpanel">
                              <form action="settings/update.php" method="POST" enctype="multipart/form-data">
                                <input name="key" value="social_media" type="hidden" />



                                <div class="form-group" style="display:flex">
                                  <img src="./assets/social/twitter.png" style="width:35px;margin-right:10px" />
                                  <input name="twitter" type="text" class="form-control"
                                    value="<?php echo get_value('twitter');?>" style="margin-right:10px">
                                  <button class="btn btn-primary">
                                    <span>+</span>
                                  </button>
                                </div>



                                <div class="form-group" style="display:flex">
                                <img src="./assets/social/facebook.png" style="width:35px;margin-right:10px" />
                                  <input name="facebook" type="text" class="form-control"
                                    value="<?php echo get_value('facebook');?>" style="margin-right:10px">
                                  <button class="btn btn-primary">
                                    <span>+</span>
                                  </button>
                                </div>


                                <div class="form-group" style="display:flex">
                                  <img src="./assets/social/youtube.png" style="width:35px;margin-right:10px" />
                                  <input name="youtube" type="text" class="form-control" style="margin-right:10px"
                                    value="<?php echo get_value('youtube');?>">
                                  <button class="btn btn-primary">
                                    <span>+</span>
                                  </button>
                                </div>

                                <div class="form-group" style="display:flex">
                                  <img src="./assets/social/linkedin.png" style="width:35px;margin-right:10px" />
                                  <input name="linkedin" type="text" class="form-control"
                                    value="<?php echo get_value('linkedin');?>" style="margin-right:10px">
                                  <button class="btn btn-primary">
                                    <span>+</span>
                                  </button>
                                </div>
                                
                              
                             
                                <div class="form-group" style="margin-top:20px;text-align:center">
                                  <button class="btn btn-primary" type="submit">
                                    Submit
                                  </button>
                                </div>
                              </form>
                            </div>

                            <!-- Panel 5-->

                          </div>
                        </div>
                        <!--Grid column-->
                      </div>
                      <!--Grid row-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php
     include 'components/footer.php';
     ?>
    </div>
  </div>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(".custom-file-input").on("change", function () {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>

</html>