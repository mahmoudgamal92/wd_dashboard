<?php
session_start();
include './../dbcontext/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap');
*{
  font-family: 'Cairo', sans-serif ;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: right;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  text-transform: uppercase;
  outline: 0;
  background: #002347;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #333333;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #1260be;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background-color:orange;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

.login_form{
  text-align: right;
  direction: rtl;
}
    </style>
    <script src="js/sweetalert.js"></script>
</head>
<body>
<?php
  if(isset($_POST['admin_email']))
  {
  $email = $_POST['admin_email'];
  $pwd =$_POST['admin_pwd'];
  $cmd = "select * from admins where admin_email ='$email' and admin_password = '$pwd'";
  $result = mysqli_query($con,$cmd);
  $count=mysqli_num_rows($result);
  if($count == 1)
  {
          $row = mysqli_fetch_array($result);
          $_SESSION['admin_name'] = $row['admin_name'];
          echo"<script>window.location.href='index.php';</script>";
  }
  else{
  ?>
<script>
  swal({
  title: 'Wrong User Or Password',
  type: 'warning',
  showCancelButton:  false,
  confirmButtonColor: '#DD6B55',
  confirmButtonText: 'Yes!'
}).then(() => {
  if (result.value) {
    // handle Confirm button click
  } else {
    // result.dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
  }
});
    </script>
<?php
}
  }
?>
    <div class="login-page">
     
        <div class="form">
          <form class="login_form" action="login.php" method="POST">
            <input name="admin_email"  type="text" placeholder="أدخل البريد الإلكتروني" required>
            <input name="admin_pwd" type="password" placeholder="كلمة المرور" required/>
            <button type="submit">تسجيل الدخول</button>
            <p class="message">ليس لديك حساب? <a href="#">تواصل مع الأدمن</a></p>
          </form>
        </div>
      </div>
</body>
</html>