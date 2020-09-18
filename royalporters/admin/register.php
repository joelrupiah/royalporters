<?php

session_start();

include("../db.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../edit.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../main.js"></script>
  </head>
  <body>

    <div class="container">

      <div class="card mx-auto text-center bg-dark text-muted">

        <div class="card-header mx-auto bg-dark text-white font-weight-bold">

          <span>SignUp Form</span>

        </div>

        <div class="card-body">

          <?php

          if (isset($_POST['register_submit'])) {

            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $password = password_hash($password,PASSWORD_DEFAULT);

            $s = "SELECT * FROM superadminlogin WHERE username='$username'";

            $result = mysqli_query($con, $s);

            $num = mysqli_num_rows($result);

            if ($num > 0) {
              echo "<script>alert('Username already taken')</script>";
             // header("Location:register.php");
            }else {

              $reg = "INSERT INTO superadminlogin(username, email, password)VALUES('$username', '$email', '$password')";
              mysqli_query($con, $reg);
              echo "<script>alert('Registration successful')</script>";
              header('Location:login.php');

            }

            }

          ?>

          <form method="post" action="register.php">

            <div class="input-group form-group">

              <div class="input-group-prepend">

                <span class="input-group-text" style="background-color:#f67f93;color:#fff;"><i class="fa fa-user"></i></span>

              </div>

              <input type="text" name="username" class="form-control" placeholder="Username">

            </div>

            <div class="input-group form-group">

              <div class="input-group-prepend">

                  <span class="input-group-text" style="background-color:#f67f93;color:#fff;"><i class="fa fa-envelope"></i></span>

              </div>

                <input type="text" name="email" class="form-control" placeholder="E-mail">

            </div>

            <div class="input-group form-group">

              <div class="input-group-prepend">

                  <span class="input-group-text" style="background-color:#f67f93;color:#fff;"><i class="fa fa-key"></i></span>

              </div>

                  <input type="password" name="password" class="form-control" placeholder="Password">

            </div>

              <div class="input-group form-group">

                <div class="input-group-prepend">

                    <span class="input-group-text" style="background-color:#f67f93;color:#fff;"><i class="fa fa-key"></i></span>

                </div>

                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">

              </div>

              <div class="form-group">

                <button type="submit" name="register_submit" value="" class="btn btn-secondary text-white btn-block">REGISTER</button>

              </div>

              <div class="form-group">

                <a href="#" class="fab fa-facebook px-2" style="text-decoration:none;font-size:25px;color:#3b5998"></a>
                <a href="#" class="fab fa-twitter px-2" style="text-decoration:none;font-size:25px;color:#55acee"></a>
                <a href="#" class="fab fa-instagram px-2" style="text-decoration:none;font-size:25px;color:#e95950"></a>
                <a href="#" class="fab fa-google-plus px-2" style="text-decoration:none;font-size:25px;color:#dd4b39"></a>

              </div>

          </form>

        </div>

      </div>

    </div>

  </body>
</html>
