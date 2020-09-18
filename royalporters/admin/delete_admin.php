<?php

include("../db.php");

$id = $_GET['id'];

$querydlt = "DELETE FROM superadminlogin WHERE id=$id";

$resultdlt = mysqli_query($con, $querydlt) or die(mysqli_error());
header("Location:add_user.php");

?>
