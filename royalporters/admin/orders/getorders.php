<?php
include("../db.php");
//     $sql = "SELECT * FROM orders
//             INNER JOIN cart_items ON orders.cart_id = cart_items.id";

// // var_dump($sql);die;

//     $fetch_order = mysqli_query($con, $sql);

//     // $fetch_order 		   = $con->query("SELECT * FROM cart_items WHERE cart_id ='{$cart_id}' ");
//     // $cart  		   = mysqli_fetch_assoc($fetch_order);


//     // $fetch_order = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}' ");
//     $orders = mysqli_fetch_assoc($fetch_order);
//     // $orders = json_decode($result, true);
//     // var_dump($result);die;
//     echo $orders;







$sql = "SELECT * FROM orders
            INNER JOIN cart_items ON orders.cart_id = cart_items.id";
$result = mysqli_query($con, $sql);
// $orders = $result->fetch_assoc();
// $orders = mysqli_fetch_array($result);
    // var_dump($orders);die;


    // echo $orders;
    // $conn->close();
