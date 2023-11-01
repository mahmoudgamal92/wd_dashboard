<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: multipart/form-data");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
include_once './../../config/dbconnect.php';
require __DIR__ . '/../notification/send.php';
$user_name =  $_POST['user_name'];
$user_email =  $_POST['user_email'];
$user_phone =  $_POST['user_phone'];
$prop_type =  $_POST['prop_type'];
$req_type =  $_POST['req_type'];
$state =  $_POST['state'];

$city =  $_POST['city'];
$price_type =  $_POST['price_type'];
$min_price =  $_POST['min_price'];
$max_price =  $_POST['max_price'];
$min_space =  $_POST['min_space'];
$max_space =  $_POST['max_space'];

$prop_desc =  $_POST['prop_desc'];
$date_created = date("Y-m-d H:i:s");


$cmd = "insert into search_for_me (user_name,email,phone_number,req_type,realstate_type,state,city,price_type,min_price,max_price,min_space,max_space,req_desc,date_created) VALUES 
('$user_name','$user_email','$user_phone','$req_type','$prop_type','$state','$city','$price_type','$min_price','$max_price','$min_space','$max_space','$prop_desc',
'$date_created')";

$res = mysqli_query($con, $cmd);
if($res){
    $cmd1 = "select notification_token from users";
    $res1 = mysqli_query($con, $cmd1);
   $title = "تم إضافة طلب جديد بمدينة ".$state;
   $body  = "يمكنك الإطلاع علية الأن";
    while($user = mysqli_fetch_array($res1))
    {
      send_notification($user['notification_token'],$title,$body);  
    }

    http_response_code(200);
    echo json_encode(array(
        "success" => true,    
        "meassage" => "تمت الإضافة بنجاح"
        ));
}

else{
    http_response_code(503);
    echo json_encode(array(
        "success" => false,
        "message" => mysqli_error($con),
    ));
}