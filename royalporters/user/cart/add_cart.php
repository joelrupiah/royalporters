<?php
include("../../db.php");
// require_once $_SERVER['DOCUMENT_ROOT'].'/ecommerce/core/init.php';
$product_id = ($_POST['proId']);

// $size  		= sanitize($_POST['size']);
$available 	= 22;
$quantity 	= ($_POST['addToCart']);

$item 		= array();
$item[]		= array(
	'id'       => $product_id,
	'quantity' => $quantity,
);

$domain = ($_SERVER['HTTP_HOST'] != 'localhost')?'.'.$_SERVER['HTTP_HOST']:false;

$sql = "SELECT * FROM products WHERE  product_id= '{$product_id}' ";
$query = mysqli_query($con, $sql);
// $query  = $con->query("SELECT * FROM products WHERE  id= '{$product_id}' ");
$product = mysqli_fetch_assoc($query);
// $_SESSION['success_flash'] = $product['title'].' has been added to you cart.';

//check if cart cookie exists
if ($cart_id != '') {


	$sql = "SELECT * FROM cart_items WHERE id ='{$cart_id}' ";
	$cartQ = mysqli_query($con, $sql);

	// $cartQ 		   = $con->query("SELECT * FROM cart_items WHERE cart_id ='{$cart_id}' ");
	$cart  		   = mysqli_fetch_assoc($cartQ);
	$previous_item = json_decode($cart['items'], true);
	$item_match	   = 0;
	$new_items	   = array();
	foreach ($previous_item as $pitem) {
		if ($item[0]['id'] == $pitem['id'] && $item[0]['size'] == $pitem['size']) {

			$pitem['quantity'] = $pitem['quantity'] + $item[0]['quantity'];
			if ($pitem['quantity'] > $available) {
				$pitem['quantity'] = $available;
			}
			$item_match = 1;
		}

		$new_items[] = $pitem;
	}
	if ($item_match != 1) {
		$new_items = array_merge($item, $previous_item);
	}
	$item_json = json_encode($new_items);
	$cart_expire = date("Y-m-d H:i:s", strtotime('+1day'));
	$sql_q = "UPDATE cart_items SET items= '{$item_json}', expire_date = '{$cart_expire}' WHERE id = '{$cart_id}' ";
	mysqli_query($con, $sql_q);
	setcookie(CART_COOKIE, '', 1, "/", $domain, false);
	setcookie(CART_COOKIE, $cart_id, CART_COOKIE_EXPIRE, '/', $domain, false);
} else {
	//add cart to the database
	$item_json = json_encode($item);
	$cart_expire = date("Y-m-d H:i:s", strtotime('+30days'));
	$sql_q = "INSERT INTO cart_items(items, expire_date) VALUES ('{$item_json}', '{$cart_expire}') ";
	mysqli_query($con, $sql_q);
	$cart_id = $con->insert_id;
	// $cart_id = $con->insert_id;
	// return 'success';
	setcookie(CART_COOKIE,$cart_id,CART_COOKIE_EXPIRE,'/',null);
}
return 'success';
