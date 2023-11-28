<?php
include './../../../dbcontext/connect.php';
if(isset($_POST['action']) || $_GET['action'])
{
    $input_id = $_GET['id'];
    if($_GET['action'])
    {
        $action = $_GET['action'];
        $input_id = $_GET['id'];
        $input_val = $_GET['val'];
        if($action == "delete")
        {
            $cmd = "delete from input_value where id = '$input_val'";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../inputinfo.php?id=$input_id");
            }
        }
    }
    else if($_POST['action'])
    {
        $action = $_POST['action'];
        if($action == "create")
        {
            $input_id = $_POST['input_id'];
            $value = $_POST['value'];
            $param = $_POST['param'];
            
            $cmd = "insert into input_values (input_id,value ,param) values ('$input_id','$value','$param')";

            if(mysqli_query($con,$cmd))
            {
            header("Location:./../..//inputinfo.php?id=$input_id");
            }
        }
        else if($action == "update") 
        {
        }
    }
} 
?>