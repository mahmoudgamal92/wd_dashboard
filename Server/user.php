<?php
require __DIR__ . '/notification/send.php';
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../config/dbconnect.php';
$title = "أهلا بكم في عقاراتك";
$body = "فقط نود الترحيب بكم";
$cmd = "select notification_token from users";
$res = mysqli_query($con, $cmd);
if(mysqli_num_rows($res) > 0)
{
    $json_Array = array();
    while($info = mysqli_fetch_array($res)){
    send_notification($info['notification_token'],$title , $body);
    array_push($json_Array,$info);
}                
    http_response_code(200);
   
    send_notification($json_Array,$title,$body);
    echo json_encode(array(
        "success" => "true",
        "data" => $json_Array));
    exit();
}

else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array(
        "success" => "false",
        "message" => "Woops! Something went wrong."
    ));
}
?>