<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './../../config/dbconnect.php';

$user_token = $_GET['user_token'];

if(isset($_GET['type']))
{
$prop_type = $_GET['type'];
$cmd = "";

if($prop_type == "1")
{
$cmd = "select * from properties order by prop_id desc";
}

else
{
    $cmd = "select * from properties where prop_type = '$prop_type' order by prop_id desc";
}

$res = mysqli_query($con, $cmd); 

if(mysqli_num_rows($res) > 0)
{
    $json_Array = array();
    while($info = mysqli_fetch_assoc($res))
    {
    $item = array();
    $prop_id = $info['prop_id'];
    $prop_owner = $info['prop_owner'];
    $cmd1 = "select * from favourite where prop_id = '$prop_id' and user_token = '$user_token'";
    $res1 = mysqli_query($con,$cmd1);
    
      $cmd2 = "select * from users where user_token = '$prop_owner'";
      $res2 =  mysqli_query($con,$cmd2);
      $user = mysqli_fetch_assoc($res2);
           
    
     
       if(mysqli_num_rows($res1) > 0)
       {
          $item = array_merge($info,["isFavourite" => true ],["user" => $user]);
       }
       
       else
       {
            $item = array_merge($info,["isFavourite" => false ],["user" => $user]);
       }
       
        array_push($json_Array,$item);
    }

    http_response_code(200);
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

}

else
{
    // where prop_status = 'active' 
$cmd = "select * from properties order by prop_id desc";
$res = mysqli_query($con, $cmd);
if(mysqli_num_rows($res) > 0)
{
    $json_Array = array();
    while($info = mysqli_fetch_assoc($res))
    {
    $item = array();
    $prop_id = $info['prop_id'];
    $prop_owner = $info['prop_owner'];
    $cmd1 = "select * from favourite where prop_id = '$prop_id' and user_token = '$user_token'";
    $res1 = mysqli_query($con,$cmd1);
    
           $cmd2 = "select * from users where user_token = '$prop_owner'";
           $res2 =  mysqli_query($con,$cmd2);
           $user = mysqli_fetch_assoc($res2);
           
    
       if(mysqli_num_rows($res1) > 0)
       {
          $item = array_merge($info,["isFavourite" => true ],["user" => $user]);
       }
       
       else
       {
            $item = array_merge($info,["isFavourite" => false ],["user" => $user]);
       }
        array_push($json_Array,$item);
    }

    http_response_code(200);
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
}

?>