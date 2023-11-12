<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
$state_id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title> المدن </title>
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

        <?php include 'components/sidebar.php'; ?>
        <div class="page-container">
            <?php include 'components/header.php';?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                <?php include 'components/alerts.php' ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                <div class="row">
                                   <div class="col-md-8">
                                   <h4 class="mB-20" 
                                   style="color:#f37021">
                                       الدول المتاحة للإعلان بها
                                   </h4>
                                   </div>
                               <div class="col-md-4">
                               <a href="add_cat.php" class="btn btn-primary" 
                               style="padding-left:50px;padding-right:50px;background-color:#f37021">
                                إضافة
                               </a>
                               </div>
                              </div>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Country Name AR</th>
                                                <th>Country Name EN</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                             <tr>
                                                <th>ID</th>
                                                <th>Country Name AR</th>
                                                <th>Country Name EN</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                        $sql = "select * from cities where state_id = '$state_id'";
                                        $result = $con->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['count_id']; ?></td>
                                                <td><?php echo $row['name_ar']; ?></td>
                                                <td><?php echo $row['name_en'] ?></td>
                                                <td>
                                                 <a onclick="return  confirm('Are You Sure to Delete This Categorey?');"
                                                        href="cats/delete.php?cat_id=<?php echo $row['cat_id'] ?>"
                                                        >
                                                        <img src="assets/images/delete.png" style="width:50px;height:50px"/>                                                    </a>
                                                </td>



                                                <td>
                                                 <a class="btn btn-primary" href="states.php?id=<?php echo $row['count_id'] ?>">
                                                     عرض المدن
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
            </main>
            <?php
     include 'components/footer.php';
     ?>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/vendor.js"></script>
    <script type="text/javascript" src="assets/js/bundle.js"></script>
</body>

</html>