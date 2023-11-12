<?php
include './../../../dbcontext/connect.php';

$id = $_GET['id'];
    $cmd = "delete from inputs where input_id = '$id'";
    if (mysqli_query($con,$cmd))
    {
        header("Location:./../../inputs.php");
    }
    else{
    die( "could not insert news right now : ". mysqli_error($con));
    }
    mysqli_close($con);
?>