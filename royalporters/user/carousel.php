
   
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">

    <?php

        // $con = new mysqli("localhost", "root", "", "e_commmm");

        $result = $con->query("SELECT image_path FROM carousel");

      ?>

      <ol class="carousel-indicators">

      <?php

        $i = 0;

          foreach ($result as $row) {
          $actives = '';
          if ($i == 0) {
          $actives = 'active';
        }

    ?>
        
        <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
     
        <?php $i++; } ?>

      </ol>

      <?php

        // $con = new mysqli("localhost", "root", "", "e_commmm");

        $result = $con->query("SELECT image_path FROM carousel");

      ?>
  
  <div class="carousel-inner">

  <?php

    $i = 0;

      foreach ($result as $row) {
      $actives = '';
      if ($i == 0) {
      $actives = 'active';
        }

    ?>
    
    <div class="carousel-item <?= $actives; ?>">
     
      <img class="img-responsive d-block w-100" src="<?php echo $row['image_path']; ?>" style="height:400px;">
    
    </div>

    <?php $i++; } ?>
  
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    
    <span class="sr-only">Previous</span>
 
  </a>
 
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    
    <span class="sr-only">Next</span>
  
  </a>

</div>
</div>

      <div class="container mb-2">
