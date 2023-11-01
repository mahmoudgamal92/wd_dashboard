<?php
include './../../../dbcontext/connect.php';
$input_type = $_POST['input_type'];
$input_title = $_POST['input_title'];
$input_placeholder = "test";
$input_desc = $_POST['input_desc'];
$input_role = $_POST['input_role'];
?>

<?php
$sql = "insert into inputs (input_title,input_placeholder,input_type,input_role,input_desc) 
values ('$input_title' ,'$input_placeholder','$input_type','$input_role','$input_desc')";
if($con->query($sql))
{
    header("Location:./../../inputs.php");
}
?>
