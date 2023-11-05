<?php
include './../../dbcontext/connect.php';
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
            $cmd = "delete from packages where package_id = '$id'";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../packages.php?deleted=true");
            }
        }
       
    }

    else if($_POST['action'])
    {
        $action = $_POST['action'];
        if($action == "create")
        {
            $package_title = $_POST['title'];
            $package_price = $_POST['price'];
            $package_desc = $_POST['desc'];
            $package_duration = $_POST['duration'];
            $max_ads = $_POST['max_ads'];
            $max_featured = $_POST['featured'];

            $cmd = "insert into packages (package_title , package_price ,package_desc,package_duration, max_ads , max_featured) values
             ('$package_title','$package_price','$package_desc','$package_duration' ,'$max_ads',' $max_featured')";

            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../packages.php?inserted=true");
            }
        }
        else if($action == "update") 
        {
            
        }
    }
} 

?>