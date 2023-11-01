<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';

$prop_type = $_GET['prop_type'];
$adv_type = $_GET['adv_type'];
$state = $_GET['prop_state'];
$min_price = $_GET['min_price'];
$max_price = (int) $_GET['max_price'];


$cmd = "";
if($prop_type == '1')
{
    $cmd = "select * from properties where adv_type= '$adv_type' AND prop_price < '$max_price' AND prop_address like '%$state%'";
}
else{
    $cmd = "select * from properties where prop_type = '$prop_type' AND adv_type= '$adv_type' AND prop_price < '$max_price' AND prop_address like '%$state%'";
}
$res = mysqli_query($con, $cmd);

if(mysqli_num_rows($res) > 0)
{
    $json_Array = array();
    while($info = mysqli_fetch_assoc($res))
    {
    $item = array();
    $prop_owner = $info['prop_owner'];
  
           $cmd1 = "select * from users where user_token = '$prop_owner'";
           $res1 =  mysqli_query($con,$cmd1);
           $user = mysqli_fetch_assoc($res1);
           $item = array_merge($info,["user" => $user]);
           array_push($json_Array,$item);
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
        "message" => mysqli_error($con),
    ));
}
?>