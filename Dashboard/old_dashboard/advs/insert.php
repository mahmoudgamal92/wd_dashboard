<?php
session_start();
include './../components/dbconnect.php';

$user_token = $_POST['user_token'];
$adv_title = $_POST['adv_title'];
$adv_cat = $_POST['adv_cat'];
$adv_url = $_POST['adv_url'];
$adv_action = $_POST['adv_action'];
$adv_status = "pending";
$adv_featured = $_POST['adv_featured'];
$adv_type = $_POST['adv_type'];
$adv_keywords = $_POST['tags'];
$date_created = date("Y-m-d H:i:s");

$cmd = "select * from users where user_token = '$user_token'";
$res = mysqli_query($con,$cmd);
$user = mysqli_fetch_array($res);
$user_name = $user['user_name'];



		if($_FILES['video']['size'] !== 0)
		{
		 	$video = $_FILES['video']['name'];
	    	$target = "./../uploads/".basename($video);
	    	
    		$gallery_count =  count($_FILES['gallery_images']['name']);
    		$gallery_images = array();
    		for($i=0 ; $i<$gallery_count ; $i++)
    		{
    			$filename =  $_FILES['gallery_images']['name'][$i];
    			array_push($gallery_images,$filename);
    
    			move_uploaded_file($_FILES['gallery_images']['tmp_name'][$i], './../uploads/'.$filename);
    		}

		$gallery = implode(",",$gallery_images);
        $cmd = "insert into advs(user_token,user_name,adv_title,adv_featured,adv_status,cat_id,action,url,thumbnail,gallery,date_created,adv_type,adv_kewords) 
         values('$user_token','$user_name','$adv_title','$adv_featured','$adv_status','$adv_cat','$adv_action','$adv_url','$video','$gallery','$date_created','$adv_type','$adv_keywords')";
            

            if (mysqli_query($con,$cmd) && move_uploaded_file($_FILES['video']['tmp_name'], $target))
            {
                header("Location:./../advs.php?inserted=true");
            }
            else{
            die( "could not insert news right now :  => video seq ". mysqli_error($con));
            }
            mysqli_close($con);
                        
            }
        
        else
        {

            $gallery_count =  count($_FILES['gallery_images']['name']);
            $gallery_images = array();

            for($i=0 ; $i<$gallery_count ; $i++)
            {
                $filename =  $_FILES['gallery_images']['name'][$i];
                array_push($gallery_images,$filename);

                move_uploaded_file($_FILES['gallery_images']['tmp_name'][$i], './../uploads/'.$filename);
            }

            $gallery = implode(",",$gallery_images);
            $cmd = "insert into advs(user_token,user_name,adv_title,adv_featured,adv_status,cat_id,action,url,thumbnail,gallery,date_created,adv_type,adv_kewords) 
            values('$user_token','$user_name','$adv_title','$adv_featured','$adv_status','$adv_cat','$adv_action','$adv_url','null','$gallery','$date_created','$adv_type','$adv_keywords')";
                

                if (mysqli_query($con,$cmd))
                {
                    header("Location:./../advs.php?inserted=true");
                }
                else{
                die( "could not insert news right now :  => no video seq  ". mysqli_error($con));
                }
                mysqli_close($con);

            }
                
?>