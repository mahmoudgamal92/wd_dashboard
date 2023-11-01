<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>

<?php
$cat_id = $_GET['cat_id'];
$sql = "select * from cats where cat_id = '$cat_id'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>تعديل فئة اعلانات </title>
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
                                    <h4 class="c-grey-900 mT-10 mB-30">
                                    تعديل الفئة 
                                    </h4>
                                    <div class="mT-30">
                                        <form action="cats/update.php" method="POST" enctype="multipart/form-data">
                                        <input name="cat_id" type="hidden"
                                                  value="<?php echo $row['cat_id'];?>">


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                  أدخل اسم الفئة بالعربية
                                                </label>
                                                <input name="name_ar" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                  value="<?php echo $row['name_ar'];?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                 أدخل اسم الفئة بالإنجليزية
                                                </label>
                                                <input name="name_en" type="text" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    value="<?php echo $row['name_en'];?>">
                                            </div>


                                            <div class="form-group">
                                            <label for="exampleInputEmail1">
                                                 أختر حالة الفئة
                                                </label>
                                            <select class="form-control" name="cat_status">
                                                <option value="1">مفعل</option>
                                                <option value = "0">غير مفعل</option>
                                            </select>
                                             </div>
                                             <div class="form-group">
                                             <label for="exampleInputEmail1">
                                                   * أختر صورة جديدة في حالة اذا كنت تريد تغيير الصورة الحالية
                                                </label>
                                        <input name="image" type="file" class="form-control">
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