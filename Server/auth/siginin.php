<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';
$user_phone =  $_POST['phone'];

// include database and object files
// Check for duplicate email

$cmd = "SELECT * FROM users WHERE user_phone = '$user_phone'";
$res = mysqli_query($con, $cmd);
$user = mysqli_fetch_array($res);
if(mysqli_num_rows($res) > 0)
{
    http_response_code(200);
    echo json_encode(array(
         
            "success" => true,
            "data" => [
                "user_name" => $user['user_name'],
                "phone" => $user['user_phone'],
                "email" => $user['user_email'],
                "user_type" => $user['user_type'],
                "user_image" => $user['user_image'],
                "user_token" => $user['user_token']
                ]
        ));
    exit();
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array([
        "success" => "false",
        "message" => mysqli_error($con)]
    ));
}

?>