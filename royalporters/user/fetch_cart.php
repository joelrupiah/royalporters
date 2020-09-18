<?php

session_start();

include("../db.php");

/*if (isset($_POST['addToCart'])) {

  $p_id = $_POST['proId'];
  $sqlcart = "SELECT * FROM cart WHERE pro_id='$p_id'";
  $run_query = mysqli_query($con, $sqlcart);
  $count = mysqli_num_rows($run_query);

  if ($count > 0) {
    echo "<script>alert('Product already added into the cart')</script>";
  }else {
    $sqlcartt = "SELECT * FROM products WHERE product_id='$p_id'";
    $runn_query = mysqli_query($con, $sqlcartt);
    $row = mysqli_fetch_assoc($runn_query);
    $pr_id = $row['product_id'];
    $pr_name = $row['product_name'];
    $pr_price = $row['product_price'];
    $pr_details = $row['product_details'];

    $sqlcarttt = "INSERT INTO cart (id, pro_id, pro_name, pro_quantity, pro_price, total_amount)
    VALUES (NULL, '$pr_id', '$pr_name', '1', '$pr_price', '$pr_price')";

    if(mysqli_query($con, $sqlcarttt)){
      exit;
    }
  }

}*/

/*Cart Popover*/

/*if (isset($_POST['get_cart_product'])) {
  $pro_id = $_POST['proId'];
  $sqllcart = "SELECT * FROM cart WHERE pro_id='$pro_id'";
  $run_queryy = mysqli_query($con,$sqllcart);
  $count = mysqli_fetch_assoc($run_queryy);
  if ($count > 0) {
    $no = 1;
    while ($row = mysqli_fetch_assoc($run_queryy)) {
      $id = $row['id'];
      $proo_id = $row['pro_id'];
      $proo_name = $row['pro_name'];
      $proo_price = $row['pro_price'];

      echo "

      <div class='row'>

        <div class='col-md-3'>$no</div>
        <div class='col-md-3'>$proo_id</div>
        <div class='col-md-3'>$proo_name</div>
        <div class='col-md-3'>$proo_price</div>

      </div>

      ";

      $no = $no + 1;
    }
  }
}*/

?>
