<?php

include("../db.php");

if (isset($_POST['editdatacarousel'])) {

  $id = $_POST['update_id'];

  // $carousel_photo = $_POST['image_path'];
  $carousel_photo = $_FILES['image_path']['name'];
  $path = '../img/'.$carousel_photo;
  // var_dump($path);

  $query = "UPDATE carousel SET image_path = '$path' WHERE id = '$id'";
var_dump($query);
  $query_run = mysqli_query($con, $query);



  if ($query_run) {
            move_uploaded_file($_FILES['image_path']['tmp_name'], $path);
            mysqli_query($con,$query_run);
            header("Location:slider.php");
        }else{
            $msg = 'Image Upload Failed';
        }

}

?>
