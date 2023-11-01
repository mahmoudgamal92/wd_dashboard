<?php
session_start();
include './../components/dbconnect.php';

$cat_id = $_POST['cat_id'];
$name_ar = $_POST['name_ar'];
$name_en = $_POST['name_en'];
$cat_status = $_POST['cat_status'];


if (isset($_POST['upload'])) {
    
    if($_FILES['image']['size'] !== 0)
        {
        $image = $_FILES['image']['name'];
       	$target = "./../uploads/".basename($image);
        $sql=" update cats set name_ar='$name_ar', name_en='$name_en', cat_status='$cat_status',image = '$image' where cat_id='$cat_id'";
        
        if (mysqli_query($con,$sql)&& move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
        	header("Location:./../categories.php?updated=true");
        }
        else{
        die( "could not insert news right now : ". mysqli_error($con));
        }
        }
        else
        {
            
        $sql=" update cats set name_ar='$name_ar', name_en='$name_en', cat_status='$cat_status' where cat_id='$cat_id'";
        if (mysqli_query($con,$sql))
        {
        	header("Location:./../categories.php?updated=true");
        }
        else{
        die( "could not insert news right now : ". mysqli_error($con));
        }
        
        
        }
        
        
    }

mysqli_close($con);
?>