<?php
include("../../db.php");
// $edit_size    	= sanitize($_GET['edit_size']);
$delete_id 	  	= sanitize($_GET['delete_id']);



$sql = "SELECT * FROM cart_items WHERE id ='{$cart_id}' ";
$cartQ = mysqli_query($con, $sql);
$result  		= mysqli_fetch_assoc($cartQ);
$items		  	= json_decode($result['items'], true);
$updated_items 	= array();
$domain			= (($_SERVER['HTTP_HOST'] != 'localhost') ? '.' . $_SERVER['HTTP_HOST'] : false);

foreach ($items as $item) {
	if ((int) $item['id'] == (int) $delete_id) {
		$item['quantity'] = 0;
	}
	if ($item['quantity'] > 0) {
		$updated_items[] = $item;
	}
}
// var_dump($updated_items);
// die;
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
