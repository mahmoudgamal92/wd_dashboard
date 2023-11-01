<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: multipart/form-data");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once './../../config/dbconnect.php';

$prop_id =  $_POST['prop_id'];
$user_token =  $_POST['user_token'];
$date_created = date("Y-m-d H:i:s");


$cmd = "insert into reports (prop_id,user_token,date_created) VALUES ('$prop_id','$user_token','$date_created')";

$res = mysqli_query($con, $cmd);
if($res){
    // set response code - 201 created
    http_response_code(200);
    // tell the user
    echo json_encode(array(
        "success" => true,    
        "message" => "Report Added Successfully"
        ));
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array(
        "success" => false,
        "message" => mysqli_error($con),
    ));
}