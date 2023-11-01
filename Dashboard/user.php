<?php
include './../dbcontext/connect.php';
include './components/checkAuth.php';
?>

<?php
$user_id = $_GET['user_id'];
$sql = "select * from users where user_id = '$user_id'";
$result = $con->query($sql);
$row = mysqli_fetch_array($result);
$user_token = $row['user_token'];
?>

<?php
function getUser($token)
{
    global $con;
    $sql = "select * from users where user_token = '$token'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    return $row['user_name'];
};
function getCat($id){
    global $con;
    $sql = "select * from cats where type_id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    return $row['title'];
}
?>


<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>User Table</title>
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
            <?php include 'components/header.php'; ?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                        <h4 class="c-grey-900 mT-10 mB-30"></h4>
                        <div class="row">
                            <div class="col-md-12">



                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="c-grey-900 mB-20" style="color:#f37021">
                                                <?php echo $row['user_name']; ?>
                                            </h4>
                                        </div>

                                    </div>
                                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <th>Name</th>
                                            <th>Value</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Value</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <tr>
                                                <td>Customer Name</td>
                                                <td>
                                                    <?php echo $row['user_name']; ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Customer Token</td>
                                                <td>
                                                    <?php echo $row['user_token']; ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td> Customer Phone</td>
                                                <td>
                                                    <?php echo $row['user_phone']; ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Customer Email</td>
                                                <td>
                                                    <?php echo $row['user_email']; ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Date Registered</td>
                                                <td>
                                                    <?php echo $row['date_registered']; ?>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>User Props</td>
                                                <td>
                                                    <?php echo "---" ?>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>




                                
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="c-grey-900 mB-20" style="color:#f37021">
                                                <?php echo $row['user_name']; ?>
                                            </h4>
                                        </div>

                                    </div>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th>رقم الإعلان</th>
                                                <th>عنوان الإعلان</th>
                                                <th>نوع الإعلان</th>
                                                <th>أسم المستخدم</th>
                                                 <th>حالة الإعلان</th>
                                                <th>تعديل</th>
                                                <th>حذف</th>
                                                <th>عرض</th>
                                            </tr>

                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <tr>
                                                <th>رقم الإعلان</th>
                                                <th>عنوان الإعلان</th>
                                                <th>نوع الإعلان</th>
                                                <th>أسم المستخدم</th>
                                                <th>حالة الإعلان</th>
                                                <th>تعديل</th>
                                                <th>حذف</th>
                                                <th>عرض</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                        $sql = "select * from properties where prop_owner = '$user_token'";
                                        $result = $con->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['prop_id']; ?></td>
                                                <td><?php echo $row['adv_title']; ?></td>
                                                <td><?php echo getCat($row['prop_type']) ?></td>
                                                <td><?php  echo getUser($row['prop_owner'])?></td>
                                                 <td>
                                                 <a> 
                                                    <?php
                                                    switch($row['prop_status'])
                                                    {
                                                        case 'pending':
                                                            echo "<a class='btn btn-primary' style='color:#FFF'>قيد المراجعة</a>";

                                                            break;

                                                        case 'active':
                                                            echo "<a class='btn btn-success' style='color:#FFF'>مقبول</a>";
                                                            break;
                                                        case 'rejected':
                                                            echo "<a class='btn btn-danger' style='color:#FFF'>محظور</a>";
                                                            break;
                                                      
                                                    }
                                                   ?>
                                                 </a>
                                                </td>
                                                <td>
                                                 <a href="edit_adv.php?adv_id=<?php echo $row['prop_id'] ?>"
                                                        >
                                                        <img src="assets/images/edit.png" style="width:50px;height:50px"/>                                                    
                                                    </a>
                                                </td>
                                    
                                                <td>
                                                 <a onclick="return confirm('Are You Sure to Delete This Add?');"
                                                        href="advs/delete.php?prop_id=<?php echo $row['prop_id'] ?>"
                                                        >
                                                        <img src="assets/images/delete.png" style="width:50px;height:50px"/>                                                    
                                                    </a>
                                                </td>
                                                                                                
                                                <td>
                                                 <a>
                                                        <img src="assets/images/eye.png" style="width:50px;height:50px"/>      
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