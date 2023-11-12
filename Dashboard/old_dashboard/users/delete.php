<?php
include_once './../components/dbconnect.php';
    $id = $_GET['user_id'];
    $cmd = "delete from users where user_id = '$id'";
    if (mysqli_query($con,$cmd))
    {
        header("Location:./../users.php?deleted=true");
    }
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    mysqli_close($con);
?>