<?php

    include("../db.php");

    if (isset($_POST['savedataslider'])) {
        
        $image = $_FILES['image']['name'];

        $path = '../img/'.$image;

        $sql = "INSERT INTO carousel(image_path)VALUES('$path')";
        mysqli_query($con, $sql);

        if ($sql) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path);

            $msg = 'Image Uploaded Successfuly';
            echo "<script type='text/javascript'>window.location.href = 'slider.php';</script>";
            exit();
        }else{
            $msg = 'Image Upload Failed';
            echo "<script type='text/javascript'>window.location.href = 'slider.php';</script>";
            exit();
        }

    }

?>