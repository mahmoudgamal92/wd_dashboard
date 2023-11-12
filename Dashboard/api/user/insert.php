<?php
session_start();
include './../components/dbconnect.php';

$user_name = $_POST['user_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$user_type = $_POST['user_type'];
$date = date("Y-m-d");

function create_token(){
    $token = md5(uniqid(rand(), true));
    return $token;
}

$user_token = create_token();

if (isset($_POST['upload'])) 
        {
            
    	$image = $_FILES['image']['name'];
		$target = "./../uploads/".basename($image);
		
        $sql="insert into users (user_name, phone, email, password, user_type, date_registered, user_token,thumbnail ) values
        ('$user_name','$phone_number','$email','$password','$user_type','$date','$user_token','$image')";
        
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