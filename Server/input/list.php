<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include './../../dbcontext/connect.php';

$json_Array = array();

$cmd = "select * from inputs";
$res = mysqli_query($con, $cmd);

    while($info = mysqli_fetch_assoc($res))
    {

    $item = array();
    $state = array();

    $input_id = $info['input_id'];
    $cmd1 = "select * from input_values where input_id = '$input_id'";
    $res1 = mysqli_query($con,$cmd1);

    while($single = mysqli_fetch_assoc($res1))
    {
        array_push($state,$single);
    }

    $item = array_merge($info,["state" => $state ]);
    array_push($json_Array,$item);
    }

    http_response_code(200);
    echo json_encode(array(
        "success" => "true",
        "data" => $json_Array));
    exit();


?>