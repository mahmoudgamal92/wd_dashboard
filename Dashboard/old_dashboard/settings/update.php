<?php
session_start();
include './../components/dbconnect.php';

$key = $_POST['key'];



function update_val($val,$title)
{    
    include './../components/dbconnect.php';
    $cmd = "update settings set value_ar = '$val' where key_val = '$title'";
    if(mysqli_query($con,$cmd))
    {
        header("Location:./../settings.php?updated=true");
    } 
    else
        {
        die( "could not insert news right now : ". mysqli_error($con));
        }
}



switch ($key) {
    
  case "general_settings":
    update_val($_POST['app_name'] , 'app_name');
    update_val($_POST['home_page_title'] , 'home_page_title');
    update_val($_POST['email'] , 'primary_email');
    update_val($_POST['phone'] , 'primary_phone');
    
    break;

    case "policy_condition":
    update_val($_POST['terms'] , 'terms');
    update_val($_POST['policy'] , 'policy');
    break;
        
    case "social_media":
    update_val($_POST['twitter'] , 'twitter');
    update_val($_POST['facebook'] , 'facebook');
    update_val($_POST['youtube'] , 'youtube');
    update_val($_POST['linkedin'] , 'linkedin');
    update_val($_POST['instagram'] , 'instagram');
    break;

}
?>
