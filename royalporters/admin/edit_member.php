<?php

include("../db.php");

if (isset($_POST['editdatamember'])) {

  $id = $_POST['update_id'];

  $member_name = $_POST['member_name'];
  $member_email = $_POST['member_email'];
  /*$facebook_link = $_POST['facebook_link'];
  $twitter_link = $_POST['twitter_link'];
  $instagram_link = $_POST['instagram_link'];
  $google_link = $_POST['google_link'];*/
  $short_description = $_POST['short_description'];
  $member_details = $_POST['member_details'];
  $member_photo = $_FILES['member_image1']['name'];
  $path = '../img/'.$member_photo;

  $query = "UPDATE team_members SET member_name = '$member_name', member_email = '$member_email', short_description = '$short_description', member_details = '
    $member_details', member_image1 = '$path' WHERE member_id = '$id'";

  $query_run = mysqli_query($con, $query);

  if ($query_run) {
            move_uploaded_file($_FILES['member_image1']['tmp_name'], $path);
            mysqli_query($con,$query_run);
            header("Location:member_details.php");
        }else{
            $msg = 'Image Upload Failed';
        }

}

?>
