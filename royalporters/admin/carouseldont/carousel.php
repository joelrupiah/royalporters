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

    <!--DEMONSTRATION-->

    <div class="container-fluid mt-5">        

        <div class="row">
            
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

            <img src="../img/ex.jpg" width="100%" height="250px">

            </div>

            <div class="col-3 col-3 col-md-3 col-md-3 col-lg-3 col-xl-3">

                <?php

                $con = new mysqli("localhost", "root", "", 
                "royalporters");

                $result = $con->query("SELECT newspaper_image FROM newspapers");

                ?>


            <!--advert newspaper-->

                <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- The slideshow -->
                <div class="carousel-inner">

                    <?php

                        $i = 0;

                        foreach ($result as $row) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            }

                    ?>
                    
                    <div class="carousel-item <?php echo $actives; ?>">

                        <div class="card" style="border: 0px">
                            
                            <a href="read.php"><img class="card-img-top" src="<?php echo $row['newspaper_image']; ?>" alt="Card image cap" width="100%" height="250px"></a>
                    
                    </div>                        
                        <!--<img src="../img/ex.jpg" alt="Los Angeles" width="100%" height="250px">-->
                    
                    </div>

                    <?php $i++; } ?>
                
                </div>

</div>

            <!--end of newspaper advert-->

            </div>

            <!--dynamic adverts -->
            <div class="col-3 col-3 col-md-3 col-md-3 col-lg-3 col-xl-3">

                <?php

            $con = new mysqli("localhost", "root", "", 
                "royalporters");

            $result = $con->query("SELECT image_path FROM carousel");

        ?>

                
                <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

  <!-- The slideshow -->
                <div class="carousel-inner">

                    <?php

                        $i = 0;

                        foreach ($result as $row) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            }

                    ?>
                    
                    <div class="carousel-item <?php echo $actives; ?>">
                        
                        <img src="<?php echo $row['image_path']; ?>" width="100%" height="250px">
                    
                    </div>

                    <?php $i++; } ?>
                
                </div>

  <!-- Left and right controls -->
                
                </div>

        </div>

    </div>

</body>
</html>