<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>
<?php
if(isset($_POST['action']) || $_GET['action'])
{
    if($_GET['action'])
    {
        $action = $_GET['action'];
        if($action == "list")
        {

        }
        else {
            
        }

    }

    else if ($_POST['action'])
    {

    }


}



    $city_name = $_POST['title'];
    $state_id = $_POST['state_id'];
    $cmd = "insert into cities (state_id ,name) values('$state_id','$city_name')";
    if(mysqli_query($con,$cmd))
    {
    header("Location:./add_city.php?state_id=$state_id&inserted=true");
    }
?>