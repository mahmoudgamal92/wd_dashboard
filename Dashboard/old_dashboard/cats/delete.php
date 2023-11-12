<?php
include_once './../components/dbconnect.php';
    $id = $_GET['cat_id'];
    $cmd = "delete from cats where type_id = '$id'";
    if (mysqli_query($con,$cmd))
    {
        header("Location:./../categories.php?deleted=true");
    }
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    mysqli_close($con);
?>