<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';


function create_token()
{
    $token = md5(uniqid(rand(), true));
    return $token;
}


function generate_6_digit_number() {
  $number = rand(100000, 999999);
  return $number;
}


// get posted data

$user_name = $_POST['user_name'];
$user_phone = $_POST['phone'];
$user_email = $_POST['email'];
$notification_token = $_POST['notification_token'];
//$otp_code =  generate_6_digit_number();
$otp_code = '123456';

$user_token = create_token();


// include database and object files
// Check for duplicate email

$cmd = "SELECT * FROM users WHERE user_email = '$user_email' or user_phone = '$user_phone'";
$res = mysqli_query($con, $cmd);
if (mysqli_num_rows($res) > 0) {
    // set response code - 503 service unavailable
    http_response_code(503);
    // tell the user
    echo json_encode(
        array(
            "success" => false,
            "message" => "الهاتف أو البريد الإلكتروني مسجل لدينا بالفعل",
            "data" => []
        )
    );
    exit();
} else {
    $cmd = "insert into users (user_name, user_phone, user_email, user_token,notification_token,last_otp) values 
    ('$user_name', '$user_phone', '$user_email' , '$user_token','$notification_token','$otp_code')";
    $res = mysqli_query($con, $cmd);

    if ($res) {
        echo json_encode(
            array(
                "success" => true,
                "message" => "مبروك , تم انشاء حسابك , سيتم التواصل معك عند تفعيل الحساب",
                "data" => [
                    "user_name" => $user_name,
                    "phone" => $user_phone,
                    "email" => $user_email,
                    "user_type" => $user_type,
                    "otp_code" => $otp_code,
                    "user_token" => $user_token,
                ]
            )
        );
    } else {
        // set response code - 503 service unavailable
        http_response_code(503);
        // tell the user
        echo json_encode(
            array(
                "success" => "false",
                "message" => mysqli_error($con),
            )
        );
    }
}
?>