<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>

<?php
$id = $_GET['id'];
$sql = "select * from stores where store_id = '$id'";
$result = $con->query($sql);
$store = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <title>تعديل المتجر</title>
    <style>
        .form-group {
            direction: rtl;
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

        bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: inline-block;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: 22px;
            cursor: text;
        }

        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            padding: 0 6px;
            margin: 0;
            width: auto;
            max-width: inherit;
        }

        .bootstrap-tagsinput.form-control input::-moz-placeholder {
            color: #777;
            opacity: 1;
        }

        .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput input:focus {
            border: none;
            box-shadow: none;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white;
        }

        .bootstrap-tagsinput .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "x";
            padding: 0px 2px;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover {
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }

        .gallery img {
            width: 120px;
            height: 180px;
            margin: 10px;
            border-radius: 10px;
        }

        .inputLabel {
            text-align: right;
            width: 100%;
            margin-bottom: 20px;
            color: red;
           
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
                        <form action="stores/update.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="masonry-item col-md-12">
                                   
                                 <div class="bgc-white p-20 bd">
                                        <div class="mT-30">

                                            <h4 class=" inputLabel c-grey-900 mT-10 mB-30">
                                                تعديل  المتجر
                                            </h4>

                                        

                                            <input name="store_id" type="hidden" 
                                            value="<?php echo $store['store_id'] ?>">

                                            <div class="form-group" style="direction:rtl">
                                                
                                                <label class="inputLabel" for="exampleInputEmail1">
                                                    أدخل عنوان المتجر *
                                                </label>
                                                
                                                <input name="store_name" type="text" class="form-control"
                                                    value="<?php echo $store['store_name'] ?>">
                                            </div>
                                            
                                            
                                           
                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1">
                                                   * تغيير حالة المتجر
                                                </label>
                                                <select class="form-control" name="store_status">
                                                    <option value="0">
                                                    غيير حالة المتجر
                                                    </option>

                                                    <option value="active"
                                                    <?php
                                                    if($store['store_status'] == 'active'){
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                    >
                                                     مقبول
                                                    </option>

                                                    <option value="pending"
                                                    <?php
                                                    if($store['store_status'] == 'pending'){
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                    >
                                                   تحت لمراجعة
                                                    </option>

                                                    <option value="rejected"
                                                    <?php
                                                    if($store['store_status'] == 'rejected'){
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                    >
                                                    مرفوض
                                                    </option>

                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <label class="inputLabel" for="exampleInputEmail1">
                                                    أختر فئة  المتجر *
                                                </label>
                                                <select class="form-control" name="store_cat">
                                                    <option value="0">
                                                        أختر فئة المتجر
                                                    </option>
                                                    <?php 
                                                $cmd = "select * from cats";
                                                $res = mysqli_query($con,$cmd);
                                                while ($row = mysqli_fetch_array( $res))
                                                {
                                                ?>
                                                    <option value="<?php echo $row['cat_id'];?>"
                                                    <?php
                                                    if($row['cat_id'] == $store['store_cat'])
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>
                                                    >
                                                        <?php echo $row['name_ar']." - ".$row['name_en'] ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                            </div>

                                            <div class="form-group" style="direction:rtl">
                                                <label class="inputLabel" for="exampleInputEmail1">
                                                  ادخل رقم المتجر
                                                </label>
                                                <input name="store_phone" type="text" class="form-control" value="<?php echo 
                                                $store['store_phone'] ?>">
                                            </div>


                                    
                                             <div class="form-group" style="direction:rtl">
                                                <label class="inputLabel" for="exampleInputEmail1"
                                                style="margin-top:50px;color:#000"
                                                >
                                                * صور المعرض الحالية
                                                </label>
                                             

                                                <div class="row" style="margin-top:50px">
                                           
                                                <div class="col-md-2" style="margin:5px">
                                                    <img class="gallery_img" 
                                                    src="./uploads/<?php echo $store['store_image']?>" style="width:100%;height:180px"/>
                                                </div>
                                                 
                                                    </div>
                                                    
                                                    <label class="inputLabel" for="exampleInputEmail1"
                                                style="margin-top:50px"
                                                >
                                                 * تحميل صور جديدة
                                                </label>
                                                <input name="store_image" type="file" class="form-control"
                                                    id="gallery-photo-add"
                                                    multiple>
                                                <div class="gallery" style="text-align:right"></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="masonry-item col-md-12">
                                    <div class="bgc-white p-20 bd">
                                        <div class="mT-30">
                                            <button class="btn btn-success" type="submit" name="upload"> حفظ التعديلات
                                            </button>
                                            <button class="btn btn-primary" type="reset"> الغاء</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
    <script>
        var input = document.querySelector('input[name=tags]');
        new Tagify(input)
    </script>
    
    
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        f_img.onchange = evt => {
            const [file] = f_img.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }    
    </script>

    <script>
        $(function () {
            // Multiple images preview in browser
            var imagesPreview = function (input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function (event) {
                            $($.parseHTML('<img class="gallery">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function () {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script>

    <script>
        function get_sub_cats() {
            var cat_id = document.getElementById("parent_cat").value;
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText !== 0) {
                        document.getElementById("child_cat").innerHTML = this.responseText;
                    }
                }
            };
            xhr.open("POST", "get_subcats.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("cat_id=" + cat_id.trim());
        }
    </script>
</body>

</html>