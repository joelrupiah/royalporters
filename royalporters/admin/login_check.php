<?php

  session_start();

  include("../db.php");

  if(isset($_POST['login_submit'])){

    if (empty($_POST['username']) || empty($_POST['password'])) {
      echo "<script>alert('Both fields are required')</script>";
      header("Location:login_admin.php");
    }else {
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);

      $login = "SELECT * FROM superadminlogin WHERE username = '$username'";

      $resulter = mysqli_query($con,$login);

      if (mysqli_num_rows($resulter) > 0) {

        while ($row=mysqli_fetch_assoc($resulter)) {
          if (password_verify($password, $row['password'])) {

            $_SESSION["username"] = $username;
            header("Location:index_admin.php");

          }else {

            echo "<script>alert('Wrong user details')</script>";
            header("Location:login_admin.php");

          }
        }

      }

    }

  }



    /*if (password_verify($_POST['password'],$hashed_password)) {


    $login = "SELECT * FROM superadminlogin WHERE username = '$username' && password = '$hashed_password'";

    $result2 = mysqli_query($con, $login);

    $num2 = mysqli_num_rows($result2);

  }

    elseif($num2 == 1){
      echo "<script>alert('successful')</script>";
      $_SESSION['username'] = $username;
      header('Location:super_admin.php');
      exit();
    }else {
      echo "<script>alert('failed')</script>";
      header('Location:register.php');
    }

  }*/


?>
