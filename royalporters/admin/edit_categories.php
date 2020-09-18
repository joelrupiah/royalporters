<?php

include("../db.php");

if (isset($_POST['editdata_category'])) {

  $id = $_POST['update_id'];

  $category_name = $_POST['category_name'];

  $query = "UPDATE categories SET category_name = '$category_name' WHERE cat_id = '$id'";

  mysqli_query($con,$query);
  header("Location:categories.php");

}

?>
