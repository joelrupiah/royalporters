<?php

include("../db.php");

$id = $_GET['id'];

$querycarousel = "DELETE FROM carousel WHERE id=$id";

$resultcarousel = mysqli_query($con, $querycarousel) or die(mysqli_error());
header("Location:slider.php");

?>
