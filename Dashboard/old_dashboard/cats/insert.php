<?php
session_start();
include './../components/dbconnect.php';

$title = $_POST['title'];
$status = $_POST['status'];
if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// image file directory
	$target = "./../uploads/" . basename($image);
	$sql = "insert into cats (title, status,thumbnail) values ('$title','$status','$image')";
}
if (mysqli_query($con, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	header("Location:./../categories.php?inserted=true");
} else {
	die("could not insert news right now : " . mysqli_error($con));
}
mysqli_close($con);
?>