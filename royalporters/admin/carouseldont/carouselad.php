<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>

    <!--DEMONSTRATION-->

    <div class="container">

        <?php

    $con = new mysqli("localhost", "root", "", "royalporters");

    $msg = '';

    if (isset($_POST['upload'])) {
        
        $image = $_FILES['image']['name'];

        $path = '../img/'.$image;

        $sql = $con->query("INSERT INTO carousel (image_path) 
            VALUES('$path')");

        if ($sql) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path);

            $msg = 'Image Uploaded Successfuly';
        }else{
            $msg = 'Image Upload Failed';
        }

    }

?>
    

    <form class="w-100" action="" method="post" enctype="multipart/form-data">
  <!-- Default input -->
  <h5 class="text-center">ADD ADVERTISMENT</h5>

  <div class="form-group">
      
    <h5 class="text-center text-danger"><?php echo $msg; ?></h5>

  </div>

  <div class="form-group">
    <input type="file" name="image" class="form-control" placeholder="upload image" required="">
  </div>

<div class="form-group">

    <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image">

  <!--<button class="btn btn-success btn-block float-right" type="submit" name="upload_carousel">upload</button>-->

</div>

</form>

    </div>

    <div class="container">

        <?php

    $con = new mysqli("localhost", "root", "", "royalporters");

    $msg = '';

    if (isset($_POST['upload_news'])) {
        
        $image = $_FILES['image']['name'];

        $path = '../img/'.$image;

        $sql = $con->query("INSERT INTO newspapers (newspaper_image) 
            VALUES('$path')");

        if ($sql) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path);

            $msg = 'Newspaper Uploaded Successfuly';
        }else{
            $msg = 'Newspaper Upload Failed';
        }

    }

?>
    

    <form class="w-100" action="" method="post" enctype="multipart/form-data">
  <!-- Default input -->
  <h5 class="text-center">ADD NEWSPAPER</h5>

  <div class="form-group">
      
    <h5 class="text-center text-danger"><?php echo $msg; ?></h5>

  </div>

  <div class="form-group">
    <input type="file" name="image" class="form-control" placeholder="upload image" required="">
  </div>

<div class="form-group">

    <input type="submit" name="upload_news" class="btn btn-warning btn-block" value="Upload Image">

  <!--<button class="btn btn-success btn-block float-right" type="submit" name="upload_carousel">upload</button>-->

</div>

</form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
  </body>
  </html>