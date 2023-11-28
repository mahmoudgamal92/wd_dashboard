<?php
include './../../../dbcontext/connect.php';
$cat_id = $_POST['cat_id'];
$cmd = "delete from cat_inputs where cat_id = '$cat_id'";
if(mysqli_query($con,$cmd))
{
foreach ($_POST["inputs"] as $input_id)
{ 
  $cmd = "insert into cat_inputs (cat_id,input_id) values('$cat_id' , '$input_id')";
  $res = mysqli_query($con,$cmd);
}
header("Location:./../../cat_inputs.php?cat_id=".$cat_id);
mysqli_close($con);
}
?>