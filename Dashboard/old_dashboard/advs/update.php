<?php
session_start();
include './../components/dbconnect.php';

$prop_id = $_POST['prop_id'];
$user_token = $_POST['user_token'];
$prop_title = $_POST['prop_title'];
$prop_price = $_POST['prop_price'];
$prop_space = $_POST['prop_space'];
$prop_type = $_POST['prop_type'];
$prop_status = $_POST['prop_status'];
$date_created = date("Y-m-d H:i:s");

if (isset($_POST['upload'])) {
	// If User Upload both Primary Image and Gallery Images
	if ($_FILES['prop_images']['size'][0] !== 0) {

		// Get Gallery Images
		$gallery_count = count($_FILES['prop_images']['name']);
		$gallery_images = array();
		for ($i = 0; $i < $gallery_count; $i++) {
			$filename = $_FILES['prop_images']['name'][$i];
			array_push($gallery_images, $filename);
			move_uploaded_file($_FILES['prop_images']['tmp_name'][$i], './../uploads/' . $filename);
		}
		$gallery = implode(",", $gallery_images);
		$cmd1 = "update properties set adv_title = '$prop_title', prop_status = '$prop_status',prop_price = '$prop_price',prop_space = '$prop_space',prop_type= '$prop_type', 
			prop_images = '$gallery' where prop_id = '$prop_id'";

		if (mysqli_query($con, $cmd1)) {
			header("Location:./../props.php?inserted=true");
		} else {
			die("could not insert news right now : " . mysqli_error($con));
		}
	}
	// If User Does Not Upload Any Images 
	else {
		$cmd4 = "update properties set adv_title = '$prop_title', prop_status = '$prop_status',prop_price = '$prop_price',prop_space = '$prop_space',prop_type= '$prop_type' where prop_id = '$prop_id'";


		if (mysqli_query($con, $cmd4)) {
			header("Location:./../props.php?inserted=true");
		} else {
			die("could not insert news right now : " . mysqli_error($con));
		}
	}
}
mysqli_close($con);
?>