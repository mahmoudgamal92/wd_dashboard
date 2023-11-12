<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: multipart/form-data");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once './../../config/dbconnect.php';
$title =  $_POST['title'];
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

$cmd = "insert into cats (title,thumbnail,date_created) VALUES 
('$title', '$gallery','$date_created')";
$res = mysqli_query($con, $cmd);
if($res){
    // set response code - 201 created
    http_response_code(200);
    // tell the user
    echo json_encode(array(
        "success" => "true",    
        "message" => "Cat. was created.",
        ));
}


else{
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(array(
        "success" => "false",
        "message" => mysqli_error($con),
    ));
}