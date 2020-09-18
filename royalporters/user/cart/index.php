<?php

include("../../db.php");
include("header.php");
//$cart_id = '';

if ($cart_id != '') {
	$sql = "SELECT * FROM cart_items WHERE id = '{$cart_id}' ";
	$cartQ = mysqli_query($con, $sql);

	// $cartQ 		   = $con->query("SELECT * FROM cart_items WHERE cart_id ='{$cart_id}' ");
	// $cart  		   = mysqli_fetch_assoc($cartQ);
	// $cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}' ");
	$result = mysqli_fetch_assoc($cartQ);
	$items = json_decode($result['items'], true);
	// var_dump($items);die;
	$i = 1;
	$sub_total = 0;
	$item_count = 0;
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">My Shopping Cart</h2>
			<hr>
			<?php if ($cart_id == '') : ?>
				<div class="bg-gradient-danger">
					<p class="text-center text-danger">Your shopping cart is empty !</p>
				</div>
				<div class="text-center">
					<a href="../../user" class="btn btn-primary mb-2" style="border:0px"><< Continue Shopping</a>
				</div>
			<?php else : ?>
				<table class="table table-bordered table-stripped table-condensed table-hover">
					<thead style="background-color: purple;color: pink">
						<th>#</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Sub-total</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
						foreach ($items as $item) {
							$product_id = $item['id'];
							// $productQ = $db->query("SELECT * FROM products WHERE id = '{$product_id}' ");

							$sql = "SELECT * FROM products WHERE product_id = '{$product_id}' ";
							$productQ = mysqli_query($con, $sql);

							$product = mysqli_fetch_assoc($productQ);
							$available = $product['quantity'];

							// var_dump(($sql));die;
							// $sArray = explode(',', $product['sizes']);
							// foreach ($sArray as $sizeString) {
							// 	$s = explode(':', $sizeString);
							// 	if ($s[0] == $item['size']) {
							// 		$available = $s[1];
							// 	}
							// }
						?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $product['product_name']; ?></td>
								<td><?= money($product['product_price']); ?></td>
								<td>
									<button class="btn btn-light btn-sm" onclick="update_cart('removeone', '<?= $product['product_id']; ?>')" style="border-radius: 50%">-</button>

									<?= $item['quantity']; ?>
									<?php if ($item['quantity'] < $available) : ?>
										<button class="btn btn-light btn-sm" onclick="update_cart('addone', '<?= $product['product_id']; ?>')" style="border-radius: 50%">+</button>
									<?php else : ?>
										<span class="text-danger">MAX</span>
									<?php endif ?>

								</td>
								<td><?= money($item['quantity'] * $product['product_price']); ?></td>
								<td>
									<button class="btn btn-danger btn-sm" onclick="delete_cart('<?= $product['product_id']; ?>')">Remove</button>
								</td>
							</tr>

						<?php
							$i++;
							$item_count += $item['quantity'];
							$sub_total += ($item['quantity'] * $product['product_price']);
							// $tax = TAXRATE * $sub_total;
							// $tax = number_format($tax, 2);
							$grand_total = $sub_total;
							// $grand_total = $sub_total;
						} ?>
					</tbody>
				</table>
				<legend>Total</legend>
				<table class="table table-bordered text-right table-stripped table-condensed">
					<thead class="totals-table-header" id="htotal" style="background-color: purple;color: pink">
						<th>Total item</th>
						<th>Sub total</th>
						<th>Grand total</th>
					</thead>
					<tbody id="btotal">
						<tr>
							<td><?= $item_count ?></td>
							<td><?= money($sub_total) ?></td>
							<td class="bg-light"><?= money($grand_total) ?></td>
						</tr>
					</tbody>
				</table>
				<a href="../../user" class="btn btn-primary float-left" style="background-color: pink;color: white">Continue Shopping</a>
				<a class="btn btn-primary float-right mb-3" href="../checkout.php" style="background-color: purple;color: white">Checkout</a>
			<?php endif; ?>
		</div>
	</div>
</div>

<footer class="page-footer font-small lighten-3 py-4" id="about" style="background-color:black">

<?php include("../footer.php"); ?>