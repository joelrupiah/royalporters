<?php

include("../db.php");

$id = $_GET['id'];

$querycarousel = "DELETE FROM about WHERE about_id=$id";

$resultcarousel = mysqli_query($con, $querycarousel) or die(mysqli_error());
header("Location:aboutus.php");

?>
