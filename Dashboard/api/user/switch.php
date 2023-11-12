<?php
include_once './../components/dbconnect.php';
    $id = $_GET['user_id'];
    $action = $_GET['action'];

    $cmd = "update users set user_status = '$action' where user_id = '$id'";
    if (mysqli_query($con,$cmd))
    {
        header("Location:./../users.php?updated=true");
    }
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    mysqli_close($con);
?>