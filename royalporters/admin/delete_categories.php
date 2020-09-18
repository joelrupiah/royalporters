<?php

include("../db.php");

$id = $_GET['id'];

$querydltpr = "DELETE FROM categories WHERE cat_id=$id";

$resultdltpr = mysqli_query($con, $querydltpr) or die(mysqli_error());
header("Location:categories.php");

?>
