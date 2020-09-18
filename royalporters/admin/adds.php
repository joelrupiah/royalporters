<?php

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

  <div class="card mx-auto text-center bg-dark text-muted" style="width:500px">

    <div class="card-header mx-auto bg-dark text-white font-weight-bold">

      <span>ADVERTS</span>

    </div>

    <div class="card-body">

      <?php

      if (isset($_POST['advert_submit'])) {

        $image1 = $_FILES['image1']['name'];

        $dbad = "INSERT INTO carousel(image_1)
        VALUES('$image1')";

        mysqli_query($con, $dbad);
        echo "<script>alert('Advert uploaded')</script>";

      }

      ?>

      <form method="post" action="" enctype="multipart/form-data">

        <div class="input-group form-group">

            <input type="file" name="image1">

        </div>

          <div class="form-group">

            <a href="<?php echo $_SERVER['PHP_SELF'] ?>"><button type="submit" name="advert_submit" value="advert" class="btn btn-secondary text-white btn-block">ADD</button></a>

          </div>

      </form>

    </div>

  </div>

</div>

<script>

</script>

</body>

</html>
