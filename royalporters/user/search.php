<?php

	include("../db.php");
	include("header.php");
	include("carousel.php");

  $search = $_POST['search'];

	$sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'";
	$run_product = mysqli_query($con, $sql);

	if (mysqli_num_rows($run_product) > 0) {

?>

	<div class='row'>
	
	<?php
		
		while ($row=mysqli_fetch_assoc($run_product)) {
			
			$product_image = $row['product_image1'];
			$product_name = $row['product_name'];
			$product_price = $row['product_price'];
			$product_code = $row['product_code'];
			$product_id = $row['product_id'];

	?>

<div class='col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2 mt-sm-2 mt-md-2 mt-lg-2 mt-xl-2 mb-2 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2'>

	<form method="POST" id="form-products">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img class="card-img-top img-responsive d-block w-100" src="<?= $product_image ?>" alt="Card image" style="width:100%;height:300px">
                      <h2><?= money($product_price) ?></h2>
                      <p><?= $product_name ?></p>
                      <a href="#" class="btn btn-default add-to-cart" name="submit_product" id="add_to_cart" style="border: none;box-shadow: none" data-id='<?= $product_id ?>'><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      <!--<button type='submit' name='submit_product' class='btn btn-default add_to_cart' id='add_to_cart' data-id='<?= $product_id ?>'>
                            <i class='fas fa-cart-plus'></i>  Add to cart
                      </button>-->
                    </div>
                    <div class="product-overlay">
                      <div class="overlay-content">
                        <h2><?= money($product_price) ?></h2>
                        <p><?= $product_name ?></p>
                        <a href="#" class="btn btn-default add-to-cart" name="submit_product" style="box-shadow: none" id="add_to_cart" data-id='<?= $product_id ?>'><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                    </div>
                    <div class="choose">
                  <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  </ul>
                </div>
                </div>
                
              </div>
            </form>
</div>

		<?php } ?>
	
	</div>

		<?php } ?>

	</div>
		
<footer class="page-footer font-small lighten-3 py-4 mb-3" id="about" style="background-color:black">

<?php include("footer.php"); ?>