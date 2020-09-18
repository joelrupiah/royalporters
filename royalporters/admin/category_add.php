<?php

include("../db.php");

if (isset($_POST['savedatacategory'])) {
	
	$category_name = $_POST['category_name'];

	$sql = "INSERT INTO categories(category_name)
	VALUES('$category_name')";
	$result = mysqli_query($con, $sql);

	if ($result) {
		echo "<script>alert('Category Added');</script>";
		header('Location: categories.php');
	}else{
		echo "<script>alert('Process Failed');</script>";
	}

}