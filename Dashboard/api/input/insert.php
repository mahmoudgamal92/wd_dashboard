<?php
include './../../../dbcontext/connect.php';
$input_type = $_POST['input_type'];
$input_label = $_POST['input_label'];
$input_placeholder = "test";
$input_desc = $_POST['input_desc'];
$input_role = $_POST['input_role'];
?>

<?php
$sql = "insert into inputs (input_label,input_placeholder,input_type,input_role,input_desc) 
values ('$input_label' ,'$input_placeholder','$input_type','$input_role','$input_desc')";
if($con->query($sql))
{
    header("Location:./../../inputs.php");
}
?>
