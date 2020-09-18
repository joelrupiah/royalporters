<?php
require_once 'config.php';
require_once 'helpers.php';

$con = new mysqli("localhost", "root", "", "royalporters");


$cart_id = '';
if (isset($_COOKIE['SBw34qwUy76hdf4q'])) {
	$cart_id = ($_COOKIE[CART_COOKIE]);
}

?>
