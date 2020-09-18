<?php
include("../../db.php");
$mode 		  	= sanitize($_POST['mode']);
// $edit_size    	= sanitize($_POST['edit_size']);
$edit_id 	  	= sanitize($_POST['edit_id']);



$sql = "SELECT * FROM cart_items WHERE id ='{$cart_id}' ";
$cartQ = mysqli_query($con, $sql);
$result  		= mysqli_fetch_assoc($cartQ);
$items		  	= json_decode($result['items'], true);
$updated_items 	= array();
$domain			= (($_SERVER['HTTP_HOST'] != 'localhost') ? '.' . $_SERVER['HTTP_HOST'] : false);

if ($mode == 'removeone') {
	foreach ($items as $item) {
		if ((int)$item['id'] == (int)$edit_id) {
			$item['quantity'] -= 1;
		}
		if ($item['quantity'] > 0) {
			$updated_items[] = $item;
		}
	}
}
if ($mode == 'addone') {
	foreach ($items as $item) {
		// var_dump((int)$item['id'] == (int)$edit_id);die;
		if ((int) $item['id'] == (int) $edit_id) {
			$item['quantity'] += 1;
			// var_dump($item['quantity'], 'd2222222wdw');die;
		}
		// var_dump($item['quantity'], 'dwdwdw');die;
		$updated_items[] = $item;
	}
}
if (!empty($updated_items)) {
	// var_dump($item['quantity'], 'dwdwdw',  $updated_items);
	// die;
	$json_updated = json_encode($updated_items);
	$sql_q = "UPDATE cart_items SET items = '{$json_updated}' WHERE id = '{$cart_id}' ";

	// $sql_q = "UPDATE cart_items SET items= '{$json_updated}', expire_date = '{$cart_expire}' WHERE id = '{$cart_id}' ";
	mysqli_query($con, $sql_q);

	$_SESSION['success_flash'] = 'your cat has been updated';
} else {
	$sql_q = "DELETE FROM cart_items WHERE id = '{$cart_id}'";
	mysqli_query($con, $sql_q);
	echo "items deleted";
	setcookie(CART_COOKIE, '', 1, "/", $domain, false);
}