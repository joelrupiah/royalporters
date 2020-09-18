<?php

	include("database.php");

	$sql = "SELECT * FROM products ORDER BY id DESC";
	$query = mysqli_query($connect, $sql);

	if (mysqli_num_rows($query) > 0) {
		while ($row=mysqli_fetch_assoc($query)) {

			$product_image = $row['id'];
			$product_name = $row['name'];
			$product_price = $row['image'];
			$product_code = $row['price'];

			foreach ($query as $row) {
				
				echo "

					<div class='row'>

				<div class='col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2 mt-sm-2 mt-md-2 mt-lg-2 mt-xl-2 mb-2 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2'>

      			<form action='' method='post' id='form-products'>

				<div class='card'>

        		<div class='card-body'>

               	<img class='img-responsive d-block w-100' src='$product_image'>

               	<p>$product_name</p>

               	<p class='float-left'>$product_price</p>

               	<input type='product_code' type='text' value='$product_code' style='display:none'>

                <button type='submit' name='submit_product' class='float-right' id='add_to_cart' style='background-color:white;color:pink;border:0px;outline:none' onclick='getData()' data-id='$product_id '>
                <i class='fas fa-cart-plus' style='font-size:20px;''></i>

                  </button>

        		</div>

      			</div>

      			</form>

      			</div>

      			</div>

				";

			}
		}
	}


?>