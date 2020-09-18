<?php
include('../../db.php');

$order_id = $_GET['id'];
$status = $_POST['status'];

// var_dump($order_id);

$sql = "UPDATE orders SET status = '$status' WHERE orders.order_id = $order_id";
// var_dump($sql);

// var_dump($sql);
mysqli_query($con, $sql);
// header("Location:../orders.php");
echo "<script type='text/javascript'>window.location.href = '../orders.php';</script>";
exit();