<?php
include './components/checkAuth.php';
include './components/dbconnect.php';
?>
<?php
$count_id =  $_POST['count_id'];
$cmd = "select * from states where count_id = '$count_id'";
$res = mysqli_query($con,$cmd);

while($row = mysqli_fetch_array($res))
{
    $state_id = $row['state_id'];
echo "<option value='$state_id'>".$row['name_ar']. "</option>";
}
?>