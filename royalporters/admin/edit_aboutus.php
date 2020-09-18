<?php

include("../db.php");

if (isset($_POST['editdata_about'])) {

  $id = $_POST['update_id'];

  $about_details = $_POST['about_details'];

  $query = "UPDATE about SET about_details = '$about_details' WHERE about_id = '$id'";

  mysqli_query($con,$query);
  header("Location:aboutus.php");

}

?>
