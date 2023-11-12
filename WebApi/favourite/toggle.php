<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: multipart/form-data");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once './../../config/dbconnect.php';

$user_token =  $_GET['user_token'];
$prop_id =  $_GET['prop_id'];
$date_created = date("Y-m-d");

$cmd = "select * from favourite where user_token = '$user_token' and prop_id = '$prop_id'";
$res = mysqli_query($con, $cmd);
if(mysqli_num_rows($res) == 0)
{
$cmd = "insert into favourite (prop_id,user_token,date_created) VALUES ('$prop_id', '$user_token','$date_created')";
$res = mysqli_query($con, $cmd);
if($res){
    // set response code - 201 created
    http_response_code(200);
    // tell the user
    echo json_encode(array(
        "success" => true,    
        "message" => "Added to Favourite",
        ));
}
}
else
{
    $cmd = "delete from favourite where prop_id = '$prop_id' and user_token = '$user_token'";
    $res = mysqli_query($con, $cmd);
    if($res){
    // set response code - 201 created
    http_response_code(200);
    // tell the user
    echo json_encode(array(
        "success" => true,    
        "message" => "Deleted From Favourite",
        ));
}
}
?>