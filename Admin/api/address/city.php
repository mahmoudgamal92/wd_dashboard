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
            $cmd = "delete from cities where city_id = '$id'";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../cities.php?deleted=true");
            }
        }
       
    }

    else if($_POST['action'])
    {
        $action = $_POST['action'];
        if($action == "create")
        {
            $city_name = $_POST['name'];
            $city_coords = $_POST['coords'];
            $state_id = $_POST['state_id'];

            $cmd = "insert into cities (state_id , name ,coords) values ('$state_id','$city_name','$city_coords')";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../cities.php?inserted=true");
            }
        }
        else if($action == "update") 
        {
            
        }
    }
} 

?>