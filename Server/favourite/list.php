<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';

$user_token = $_GET['user_token'];

$cmd = "select * from favourite where user_token = '$user_token'";
$res = mysqli_query($con, $cmd);
if(mysqli_num_rows($res) > 0)
{
    
        $json_Array = array();
        while($info = mysqli_fetch_assoc($res))
        {
        $prop_id = $info['prop_id'];
        $cmd1 = "select * from properties where prop_id = '$prop_id'";
        $res1 = mysqli_query($con,$cmd1);
        $prop = mysqli_fetch_assoc($res1);
        array_push($json_Array,$prop);
        }                
    http_response_code(200);
    echo json_encode(array(
        "success" => true,
        "data" => $json_Array));
    exit();
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array(
        "success" => false,
        "message" => "Woops! Something went wrong."
    ));
}
?>