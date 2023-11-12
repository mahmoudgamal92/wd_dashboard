<?php
include './../../../dbcontext/connect.php';
?>

<?php

if(isset($_POST['action']) || $_GET['action'])
{
    if($_GET['action'])
    {
        $action = $_GET['action'];
        if($action == "delete")
        {
            $id = $_GET['id'];
            $cmd = "delete from districts where id = '$id'";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../districts.php?deleted=true");
            }
        }
    }

    else if($_POST['action'])
    {
        $action = $_POST['action'];
        if($action == "create")
        {
            $name = $_POST['name'];
            $coords = $_POST['coords'];
            $city_id = $_POST['city_id'];
            $cmd = "insert into districts (city_id , name ,coords) values ('$city_id','$name','$coords')";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../districts.php?inserted=true");
            }
        }
        else if($action == "update") 
        {
            
        }
    }
} 

?>