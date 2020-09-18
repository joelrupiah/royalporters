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
  <body style="background-color:grey">

    <div class="container">

      <div class="card mx-auto text-center text-muted" style="width:400px;margin-top:200px;background-color:purple;border-radius:0px">

        <!--<div class="card-header mx-auto bg-dark text-white font-weight-bold">

          <span>Login Form</span>

          

        </div>-->

        <div class="card-body">

        <h4 class="text-white float-left mb-3">Login</h4>

          <form method="post" action="login_check.php">

            <div class="input-group form-group">

              <div class="input-group-prepend">

                <span class="input-group-text" style="background-color:#f67f93;color:#fff;border-radius:0px"><i class="fa fa-user"></i></span>

              </div>

              <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" style="border-radius:0px">

            </div>

            <div class="input-group form-group">

              <div class="input-group-prepend">

                  <span class="input-group-text" style="background-color:#f67f93;color:#fff;border-radius:0px"><i class="fa fa-key"></i></span>

              </div>

                  <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" style="border-radius:0px">

            </div>

              <div class="form-group">

                <button type="submit" name="login_submit" value="login" class="btn btn-secondary text-white btn-block" style="background-color:black">LOGIN</button>

              </div>

              <div class="form-group">

                <a href="#" class="fab fa-facebook px-2" style="text-decoration:none;font-size:25px;color:#3b5998"></a>
                <a href="#" class="fab fa-twitter px-2" style="text-decoration:none;font-size:25px;color:#55acee"></a>
                <a href="#" class="fab fa-instagram px-2" style="text-decoration:none;font-size:25px;color:#e95950"></a>
                <a href="#" class="fab fa-google-plus px-2" style="text-decoration:none;font-size:25px;color:#dd4b39"></a>

              </div>

              <div class="form-group">

                <p class="form-group-text"><a href="register.php" style="text-decoration:none;color:#f67f93">Don't have an account? Register</a></p>

              </div>

          </form>

        </div>

      </div>

    </div>

  </body>
</html>
