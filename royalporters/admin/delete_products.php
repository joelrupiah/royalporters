<?php

include("../db.php");

$id = $_GET['id'];

$querydltpr = "DELETE FROM products WHERE product_id=$id";

$resultdltpr = mysqli_query($con, $querydltpr) or die(mysqli_error());
header("Location:product_details.php");

?>
