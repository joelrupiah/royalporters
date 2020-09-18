<?php

include("../db.php");

if (isset($_POST['editdata_products'])) {

  $id = $_POST['update_id'];

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_details = $_POST['product_details'];
  $product_image1 = $_POST['product_image1'];
  $path = '../img/'.$product_image1;

  $query = "UPDATE products SET product_name = '$product_name' ,
  product_price = '$product_price' , product_details = '$product_details' ,
  product_image1 = '$path' WHERE product_id = '$id'";

  //$query_run = mysqli_query($con, $query);

  if ($query) {
            move_uploaded_file($_FILES['product_image1']['tmp_name'], $path);
            mysqli_query($con,$query);
            header("Location:product_details.php");
        }else{
            $msg = 'Image Upload Failed';
        }

  /*if ($query_run) {
    echo "<script> alert('Data updated successfully') </script>";
    header("Location:product_details.php");
  }else {

    echo "<script> alert('Data failed to update') </script>";

  }*/

}

?>
