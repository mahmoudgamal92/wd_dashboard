<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';


$user_token =  $_POST['user_token'];
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];

if(isset($_FILES['profile_img'])) 
{
  $target = "./../../uploads/";
  $file_name=$_FILES["profile_img"]["name"];
  $file_tmp=$_FILES["profile_img"]["tmp_name"];
  $target_file = $target . $file_name;
  move_uploaded_file($file_tmp, $target_file);
  
$cmd = "update users set user_name = '$user_name', user_email = '$user_email', user_phone = '$user_phone', user_image = '$file_name'
where user_token = '$user_token'";
if(mysqli_query($con, $cmd))
{
    $cmd = "select * from users where user_token = '$user_token'";
    $res = mysqli_query($con, $cmd);
    $user = mysqli_fetch_assoc($res);
    
    http_response_code(200);
    echo json_encode(array(
         
            "success" => true,
             "user" => $user,
            "message" => "تم تحديث بياناتك بنجاح"
        ));
    exit();
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array([
        "success" => "false",
        "message" => mysqli_error($con)
        ]
    ));
}
}

else
{
  
$cmd = "update users set user_name = '$user_name', user_email = '$user_email', user_phone = '$user_phone' 
where user_token = '$user_token'";
if(mysqli_query($con, $cmd))
{
  $cmd = "select * from users where user_token = '$user_token'";
    $res = mysqli_query($con, $cmd);
    $user = mysqli_fetch_assoc($res);
    
    http_response_code(200);
    echo json_encode(array(
         
            "success" => true,
             "user" => $user,
            "message" => "تم تحديث بياناتك بنجاح"
        ));
    exit();
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array([
        "success" => "false",
        "message" => mysqli_error($con)
        ]
    ));
}    
}

?>