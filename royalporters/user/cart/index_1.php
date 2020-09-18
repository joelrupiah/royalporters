<?php
include("load_cart.php");

?>



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="cartModalLabel">My Shopping Cart</h5>
				<hr>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row" id="cart_page">
					<div class="col-md-12">
						<?php if ($cart_id == '') : ?>
							<div class="bg-gradient-danger">
								<p class="text-center text-danger">Your shopping cart is empty!</p>
							</div>
							<div class="text-center">
								<a href="../../user" class="btn btn-primary">Continue Shopping</a>
							</div>
						<?php else : ?>
							<table class="table table-bordered table-stripped table-condensed table-hover">
								<thead>
									<th>#</th>
									<th>Item</th>
									<th>Price</th>
									<th>Quantity</th>
									<!-- <th>Sub-total</th> -->
								</thead>
								<tbody>
									<?php
									foreach ($items as $key => $item) {
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
												<button class="btn btn-light btn-sm" onclick="update_cart('removeone', '<?= $product['product_id']; ?>', '<?= $key ?>')" style="border-radius: 50%">-</button>


												<input type="text" disabled="true" id="quantity<?= $key ?>" name="quantity" value="<?= $item['quantity'] ?>" style="border: none;padding: 10px;width: 40px;text-align: center;">


												<?php if ($item['quantity'] < $available) : ?>
													<button class="btn btn-light btn-sm" onclick="update_cart('addone', '<?= $product['product_id']; ?>', '<?= $key ?>')" style="border-radius: 50%">+</button>
												<?php else : ?>
													<span class="text-danger">MAX</span>
												<?php endif ?>

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
								<thead class="totals-table-header" id="htotal">
									<th>Total item</th>
									<th>Sub total</th>
									<!-- <th>tax</th> -->
									<th>Grand total</th>
								</thead>
								<tbody id="btotal">
									<tr>
										<td>
											<input type="text" disabled="true" id="item_count" name="item_count" value="<?= $item_count ?>" style="border: none;padding: 10px;">
										</td>
										<td>
											<input type="text" disabled="true" id="sub_total" name="sub_total" value="<?= money($sub_total) ?>" style="border: none;padding: 10px;">
										</td>
										<td class="bg-light">
											<input type="text" disabled="true" id="grand_total" name="grand_total" value="<?= money($grand_total) ?>" style="border: none;padding: 10px;">
										</td>
									</tr>
								</tbody>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			<a class="btn btn-lg btn-primary pull-right" href="checkout.php">Checkout</a>

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<script>
	function update_cart(mode, edit_id, key_) {
		// console.log(mode, edit_id, edit_size);

		var data = {
			"mode": mode,
			'edit_id': edit_id,
		};

		jQuery.ajax({
			url: 'cart/update_cart.php',
			method: 'post',
			data: data,
			success: function(data) {
				// console.log(JSON.parse(data));
				var data_v = JSON.parse(data)
				// var loadUrl = 'cart/load_cart.php'
				// // var ajax_load = $("#cart_page").html();
				// // console.log(ajax_load);

				// var data_r = $("#cart_page").load(loadUrl);

				// var d_r = data_r[0]
				// console.log(d_r);

				// $("#cart_page").replaceWith(d_r);


				// console.log(JSON.parse(data));
				$('#sub_total').val(data_v['sub_total'])
				$('#grand_total').val(data_v['grand_total'])
				$('#item_count').val(data_v['item_count'])
				if (mode == 'addone') {
					var new_q = parseInt($('#quantity' + key_).val()) + 1
					$('#quantity' + key_).val(new_q)
					console.log($('#quantity' + key_).val(), new_q)
				} else {
					var new_q = parseInt($('#quantity' + key_).val()) - 1
					$('#quantity' + key_).val(new_q)
					console.log($('#quantity'+key_).val(), new_q)
				}


				// console.log($("#cart_page").load(loadUrl)[0]);
			},
			error: function() {
				alert('something went wrong');
			}
		});
	}
</script>