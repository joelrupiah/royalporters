<?php

include("../db.php");

if (isset($_POST['savedataabout'])) {
	
	$about_details = $_POST['about_details'];

	$sql = "INSERT INTO about(about_details)
	VALUES('$about_details')";
	$result = mysqli_query($con, $sql);

	if ($result) {
		echo "<script>alert('About Us Added');</script>";
		header('Location: aboutus.php');
	}else{
		echo "<script>alert('Process Failed');</script>";
	}

}