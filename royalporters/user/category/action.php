<div class='row'>
<?php

include("../../db.php");


if (isset($_POST['getCategory'])) {
	$category_id = isset($_GET['id']);
	
	$product_query = "SELECT * FROM products WHERE 'category_id' = $category_id  ORDER BY RAND() LIMIT 0,4";
	$run_product = mysqli_query($con, $product_query);

	if (mysqli_num_rows($run_product) > 0) {
		
		while ($row=mysqli_fetch_assoc($run_product)) {
			// var_dump($run_product);die;
			
			$product_image = $row['product_image1'];
			$product_name = $row['product_name'];
			$product_price = $row['product_price'];
			$product_code = $row['product_code'];
			$product_id = $row['product_id'];

			echo "

				<div class='col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2 mt-sm-2 mt-md-2 mt-lg-2 mt-xl-2 mb-2 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2'>

      			<form action='add_cart.php' method='post' id='form-products'>

				<div class='card'>

        		<div class='card-body'>

               	<img class='img-responsive d-block w-100' src='$product_image'>

               	<p>$product_name</p>
               	<p class='float-left'>$product_price</p>
				   
               	<input type='text' value='$product_code' style='display:none' id='product_code'>

                <button type='submit' name='submit_product' class='float-right' id='add_to_cart' style='background-color:white;color:pink;border:0px;outline:none'  data-id='$product_id '>
                <i class='fas fa-cart-plus' style='font-size:20px;''></i>

                  </button>

        		</div>

      			</div>

      			</form>

      			</div>

			";

		}

	}


}

?>

</div>