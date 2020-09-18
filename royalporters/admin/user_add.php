<?php

include("../db.php");

  if (isset($_POST['savedatauser'])) {


    $username = mysqli_real_escape_string($con, $_POST['adminname']);
    $email = mysqli_real_escape_string($con, $_POST['adminemail']);
    $password = mysqli_real_escape_string($con, $_POST['adminpassword']);
    $password = password_hash($password,PASSWORD_DEFAULT);

      if (($username < 0) && ($email < 0) && ($password < 0)) {
        var_dump($password);
        echo "<script>alert('Field is empty')</script>";
      }else {

          $add = "INSERT INTO superadminlogin(username, email, password)VALUES('$username', '$email', '$password')";
            mysqli_query($con, $add);
          // var_dump($result);
            echo "<script>alert('Registration successful')</script>";
          // header("Location:add_user.php");

            echo "<script type='text/javascript'>window.location.href = 'add_user.php';</script>";
            exit();

        }

  }

?>

       