<?php
session_start();
include './../components/dbconnect.php';

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$user_type = $_POST['user_type'];
$date = date("Y-m-d");


$cmd = "select * from users where user_id = '$user_id'";
$res = mysqli_query($con,$cmd);
$user = mysqli_fetch_array($res);


if($password == "")
{
    $password = $user['password'];
}
else
{
    $password = md5($password);
}



if (isset($_POST['upload'])) 
        {
            
        if($_FILES['image']['size'] !== 0)
        {
    	$image = $_FILES['image']['name'];
		$target = "./../uploads/".basename($image);
        $sql="update users set user_name = '$user_name', phone = '$phone_number', email = '$email', password = '$password', 
        user_type = '$user_type', date_registered = '$date',thumbnail = '$image' where user_id = '$user_id'";
        
          if (mysqli_query($con,$sql)  && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
        	header("Location:./../users.php?inserted=true");
        }
    
        else{
        die( "could not insert news right now : ". mysqli_error($con));
        }
    
    
        }
        else
        {
            
      
        $sql="update users set user_name = '$user_name', phone = '$phone_number', email = '$email', password = '$password', 
        user_type = '$user_type', date_registered = '$date' where user_id = '$user_id'";
        
          if (mysqli_query($con,$sql))
        {
        	header("Location:./../users.php?inserted=true");
        }
    
        else{
        die( "could not insert news right now : ". mysqli_error($con));
        }
    
    
            
        }
        
        }
        if (mysqli_query($con,$sql)  && move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
        	header("Location:./../users.php?inserted=true");
        }
    
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    
   mysqli_close($con);
   ?>