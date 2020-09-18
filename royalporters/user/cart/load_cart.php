<?php
include("../../db.php");
// include 'header.php';
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
    
    // echo $items;
}
?>
