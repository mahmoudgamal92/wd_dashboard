<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once './../../config/dbconnect.php';

$cats = array();
$states = array();
 
 
// Cats
$cat_cmd = "SELECT * FROM cats";
$cat_res = mysqli_query($con, $cat_cmd);

// countries
$stat_cmd = "SELECT * FROM states";
$stat_res = mysqli_query($con, $stat_cmd);


if(mysqli_num_rows($cat_res) > 0)
{
    while($info = mysqli_fetch_assoc($cat_res))
    {array_push($cats,$info);}   
}


if(mysqli_num_rows($stat_res) > 0)
{
    while($info = mysqli_fetch_assoc($stat_res))
    {array_push($states,$info);}                
}

    http_response_code(200);
    // tell the user
    echo json_encode(array(
        "success" => "success",
        "data" => [
            "cats" => $cats,
            "states" => $states,
        ]
    ));
?>