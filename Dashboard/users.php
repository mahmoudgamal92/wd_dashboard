<?php
include './../dbcontext/connect.php';
include './components/checkAuth.php';
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>لوحة التحكم  | قائمة المستخدمين</title>
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
                        <h4 class="c-grey-900 mT-10 mB-30"></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                <div class="row">
                                   <div class="col-md-8">
                                   <h4 class="c-grey-900 mB-20" style="color:#f37021">
                                   قائمة المستخدمين
                                    </h4>
                                   </div>

                                   <div class="col-md-4">
                                  <!--<a class="btn btn-primary" href="add_user.php">-->
                                  <!--  إضافة مستخدم-->
                                  <!--</a>-->
                                   </div>
                              
                              </div>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                               <th>Img</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>User Status</th>
                                                <th>Switch</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Img</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>User Status</th>
                                                <th>Switch</th>
                                                <th>Delete</th>
                                                <th>View</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                        $sql = "select * from users order by user_id desc";
                                        $result = $con->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <?php
                                                if($row['user_image'] == "")
                                                {
                                                ?>
                                                
                                              <td><img src="./assets/user.png" style="width:50px;height:50px;"/></td>
                                              <?php
                                                }
                                              else
                                              {
                                              ?>
                                            <td><img src="./uploads/<?php echo $row['user_image']?>" style="width:50px;height:50px;border-radius:25px;"/></td>
                                             <?php
                                              }
                                              ?>
                                                <td><?php echo $row['user_id']; ?></td>
                                                <td><?php echo $row['user_name']; ?></td>
                                                <td><?php echo $row['user_email']; ?></td>
                                                <td>
                                                <?php

                                                    if($row['user_status'] == "active") {
                                                        echo "<a style='color:green'>
                                                        نشط
                                                        </a>";
                                                    } else {
                                                        echo "<a  style='color:red'>
                                                        محظور
                                                        </a>";
                                                    }
                                                    ?>
                                                </td>


                                                <td>
                                                <?php

                                                    if($row['user_status'] == "active") {
                                                        ?>
                                                         <a 
                                                         
                                                         href="users/switch.php?user_id=<?php echo $row['user_id']?>&action=panned">   
                                                        <img src="assets/images/hide.png" style="width:45px;height:45px"/>       
                                                        </a>
                                                        <?php
                                                    } else {
                                                        ?>
                                                         <a 
                                                         href="users/switch.php?user_id=<?php echo $row['user_id']?>&action=active">   
                                                        <img src="assets/images/view.png" style="width:50px;height:50px"/>       
                                                        </a>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="users/delete.php?user_id=<?php echo $row['user_id'] ?>">   
                                                        <img src="assets/images/delete.png" style="width:50px;height:50px"/>                                         </a>
                                                </td>
                                                
                                                <td>
                                                    <a href="user.php?user_id=<?php echo  $row['user_id'];?>">                                         
                                                        <img src="assets/images/eye.png" style="width:50px;height:50px">
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