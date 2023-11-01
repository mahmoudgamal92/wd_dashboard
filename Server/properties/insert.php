<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: multipart/form-data");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once './../../config/dbconnect.php';

$adv_number = rand(1000000,10000000000);
$adv_title =  $_POST['adv_title'];
$adv_type =  $_POST['adv_type'];
$prop_type =  $_POST['prop_type'];
$prop_price =  $_POST['prop_price'];
$prop_space =  $_POST['prop_space'];
$prop_desc =  $_POST['prop_desc'];
$prop_owner =  $_POST['prop_owner'];
$prop_coords=  $_POST['prop_coords'];
$prop_address = $_POST['prop_address'];

$bedrooms = $_POST['bedrooms'];
$bathrooms = $_POST['bathrooms'];
$floor = $_POST['floor'];
$street_width = $_POST['street_width'];
$meter_price = $_POST['meter_price'];
$prop_front = $_POST['prop_front'];

$date_created = date("Y-m-d H:i:s");

//Images Handling
$images = array();
$target = "./../../uploads/";
foreach($_FILES['images']['tmp_name'] as $key=>$tmp_name) 
{
  $file_name=$_FILES["images"]["name"][$key];
  $file_tmp=$_FILES["images"]["tmp_name"][$key];
  $target_file = $target . $file_name;
  move_uploaded_file($file_tmp, $target_file);
  array_push($images,$file_name);
}

$gallery = implode(",",$images);
$cmd = "insert into properties (
adv_number,
adv_title,
adv_type,
prop_type,
prop_price,
prop_space,
prop_desc,
prop_coords,
prop_address,
prop_images,
prop_owner,
date_created,
prop_status) VALUES (
'$adv_number',
'$adv_title',
'$adv_type',
'$prop_type',
'$prop_price',
'$prop_space',
'$prop_desc',
'$prop_coords',
'$prop_address',
'$gallery',
'$prop_owner',
'$date_created',
'pending')";

$res = mysqli_query($con, $cmd);
if($res){
    http_response_code(200);
    echo json_encode(array(
        "success" => true,    
        "adv_num" => $adv_number
        ));
}

else{
    http_response_code(503);
    echo json_encode(array(
        "success" => false,
        "message" => mysqli_error($con),
    ));
}