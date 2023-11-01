<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>
<?php
    $city_name = $_POST['title'];
    $state_id = $_POST['state_id'];
    $cmd = "insert into cities (state_id ,name) values('$state_id','$city_name')";
    if(mysqli_query($con,$cmd))
    {
    header("Location:./add_city.php?state_id=$state_id&inserted=true");
    }
?>