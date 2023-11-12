<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>
<?php
$user_id = $_GET['user_id'];
$cmd = "select * from users where user_id = '$user_id'";
$res = mysqli_query($con,$cmd);
$user = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>تعديل بيانات المستخدم</title>
    <style>
        .inputLabel{
            text-align: right;
            width:100%;
            margin-bottom:20px
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
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

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
                        <div class="row">
                            <div class="masonry-item col-md-12">
                                <div class="bgc-white p-20 bd">

                                    <h4 class=" inputLabel c-grey-900 mT-10 mB-30">
                                 تعديل بيانات المستخدم 
                                    </h4>
                                    <div class="mT-30" style="direction:rtl">
                                        <form action="users/update.php" method="POST" enctype="multipart/form-data">

                                            <div class="form-group">
                                       
                                                <label class="inputLabel" for="exampleInputEmail1" >
                                                 أسم المستخدم 
                                                </label>
                                                <input name="user_id" type="hidden" value="<?php echo  $user_id ?>">
                                                <input name="user_name" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                  value="<?php echo $user['user_name'] ?>"
                                                    >
                                            </div>


                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1">
                                               رقم الجوال
                                                </label>
                                                <input name="phone_number" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                   value="<?php echo $user['phone'] ?>">
                                            </div>



                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1">
                                              البريد الألكتروني
                                                </label>
                                                <input name="email" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                  value="<?php echo $user['email'] ?>">
                                            </div>



                                            
                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1" style="color:red">
                                                    *  أدخل كلمة المرور اذ كنت تريد اعادة تعيين كلمة المرور

                                                </label>
                                                <input name="password" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="كلمة المرور">
                                            </div>




                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1" style="color:red">
                                            تأكيد كلمة المرور
                                                </label>
                                                <input name="c_password" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="تأكيد كلمة المرور">
                                            </div>

                                            <div class="form-group">
                                            <label class="inputLabel" for="exampleInputEmail1">
                                              تغيير نوع المستخدم 
                                                </label>
                                            <select class="form-control" name="user_type">
                                                <option value="advertiser" 
                                                <?php
                                                if($user['user_type'] == "advertiser")
                                                echo "selected";
                                                ?> > 
    
                                                معلن
                                                
                                                </option>
                                                
                                                <option value = "regular"
                                                  <?php
                                                if($user['user_type'] == "regular")
                                                echo "selected";
                                                ?> >  مستخدم عادي</option>
                                            </select>
                                             </div>
                                             
                                             
                                             
                                            <div class="form-group">
                                                 <label class="inputLabel" for="exampleInputEmail1">
                                                  تغيير صورة المستخدم 
                                                </label>
                                              <input name="image" type="file" class="form-control" placeholder="أختر صورة المستخدم ">
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="upload">
                                                حفظ
                                            </button>
                                        </form>
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
    <script type="text/javascript" src="assets/js/vendor.js"></script>
    <script type="text/javascript" src="assets/js/bundle.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
    </script>
</body>

</html>