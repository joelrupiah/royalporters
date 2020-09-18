
<?php
include("../../db.php");
if ($cart_id != '') {


    $sql = "SELECT * FROM cart_items WHERE id = '{$cart_id}' ";
    $cartQ = mysqli_query($con, $sql);

    // $cartQ 		   = $con->query("SELECT * FROM cart_items WHERE cart_id ='{$cart_id}' ");
    // $cart  		   = mysqli_fetch_assoc($cartQ);


    // $cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}' ");
    $result = mysqli_fetch_assoc($cartQ);
    $items = json_decode($result['items'], true);
    // var_dump($items);die;
    echo $items;
}
?>
