<?php
include_once './../../components/dbconnect.php';
$id = $_GET['id'];
$most_selling = $_GET['most_selling'];
if ($most_selling == "0")
{
$cmd = "update products set most_selling = 1 where product_id = '$id'";
$res = mysqli_query($con,$cmd);
if($res)
        {
        header("Location:./../products.php?updated=true");
        }
}
else
{
    $cmd = "update products set most_selling = 0 where product_id = '$id'";
    $res = mysqli_query($con,$cmd);  
    if($res)
            {
            header("Location:./../products.php?updated=true");
            }
}
?>