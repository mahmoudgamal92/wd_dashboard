<?php
include_once './../../dbcontext/connect.php';
    $id = $_GET['prop_id'];
    $cmd = "delete from properties where prop_id = '$id'";
    if (mysqli_query($con,$cmd))
    {
        header("Location:./../props.php?deleted=true");
    }
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    mysqli_close($con);
?>