<?php
include("../../db.php");
include("../cart/getCart.php");

$customer_name = sanitize($_POST['customer_name']);
$customer_email = sanitize($_POST['customer_email']);
$customer_number = sanitize($_POST['customer_number']);
$customer_address = sanitize($_POST['customer_address']);
// var_dump($items);die;

// foreach ($items as $item) {
//     $cart_id = $item['id'];
// }
// $cart_id = $cart_id;
// var_dump($cart_id);die;

//add cart to the database
// $item_json = json_encode($item);
// $cart_expire = date("Y-m-d H:i:s", strtotime('+30days'));
$sql_q = "INSERT INTO orders(`customer_name`, `customer_email`, `customer_number`, `customer_address`, `cart_id`) VALUES ('$customer_name', '$customer_email', '$customer_number', '$customer_address', '$cart_id') ";
// var_dump($sql_q);die;
mysqli_query($con, $sql_q);
setcookie(CART_COOKIE, '', 1, "/", $domain, false);

header('Location: ' . '../');
