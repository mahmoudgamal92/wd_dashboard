<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include './../../dbcontext/connect.php';


$cmd = "select * from cat_inputs where cat_id = 3";
$res = mysqli_query($con, $cmd);
$inputs = array();
$newArray = array();
    while($info = mysqli_fetch_assoc($res))
    {
        $input_id = $info['input_id'];
        $cmd2 = "select * from inputs where input_id = '$input_id'";
        $res2 = mysqli_query($con, $cmd2);
        $input = mysqli_fetch_assoc($res2);
        array_push($inputs,$input);
    }
    
    foreach ($inputs as $input) {
        $values = array();
       $input_id = $input["input_id"];
       $cmd1 = "select * from input_values where input_id = '$input_id'";
       $res1 = mysqli_query($con,$cmd1);
   
       while($single = mysqli_fetch_assoc($res1))
       {
        array_push($values,$single);
       }

       $item =  array_merge($input,["values" => $values]);
       array_push($newArray,$item); 
    }

    http_response_code(200);
    echo json_encode(array(
        "success" => "true",
        "data" => $newArray));
    exit();
?>