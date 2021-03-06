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
  $i = 1;
  $sub_total = 0;
  $item_count = 0;

  foreach ($items as $item) {
    $product_id = $item['id'];
    // $productQ = $db->query("SELECT * FROM products WHERE id = '{$product_id}' ");

    $sql = "SELECT * FROM products WHERE product_id = '{$product_id}' ";
    $productQ = mysqli_query($con, $sql);

    $product = mysqli_fetch_assoc($productQ);
    $available = $product['quantity'];
    $i++;
    $item_count += $item['quantity'];
    $sub_total += ($item['quantity'] * $product['product_price']);
    // $tax = TAXRATE * $sub_total;
    // $tax = number_format($tax, 2);
  }
    $grand_total = $sub_total;
    // var_dump($grand_total);die;
} else {
    $grand_total = 0;

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../../edit.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../main.js"></script>
</head>

<body>

  <style>
    .container-fluid {

      margin-top: 20px;
      padding: 0px;
      overflow: hidden;
      outline: none;

    }

    .btn {
      border: 1px solid black;
      border-radius: 0px;
    }
  </style>

  <div class="container-fluid">

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3 text-center text-muted">

        <p class="text-dark">Need Help</p>
        <a class="text-dark text-muted fa fa-phone" href="../contact.php" style="text-decoration:none;">&nbsp;&nbsp; Call &nbsp; 0700000000</a>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3 text-center">

        <a href="../index.php"><img class="img-responsive" src="../../img/logo4.jpg"></a>

        <hr>

        <div class="row">

          <div class="col-8 col-sm-8 col-md-9 col-lg-8 col-xl-8 text-center text-muted">

            <nav class="navbar navbar-expand-lg navbar-light top-header mb-2">

              <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                  <li class="nav-item active">
                    <a class="nav-link ml-lg-0" href="../index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>

                  <!--display categories-->


                  <!--display categories-->

                  <li class="nav-item dropup">


                    <a class="nav-link dropup-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropup" aria-haspopup="true" aria-expanded="false">
                      Shop
                    </a>

                    <?php

                    $sqlcategory = "SELECT * FROM categories";
                    $run_cat = mysqli_query($con, $sqlcategory);

                    ?>

                    <ul class="dropup-menu list-unstyled" style="border:0px;display:none">

                      <?php


                      while ($row = mysqli_fetch_assoc($run_cat)) {
                        $cid = $row['cat_id'];
                        $cat_name = $row['category_name'];

                      ?>

                        <li>

                          <a class="text-muted" id="show_products" data-id="<?= $cid ?>" href="../category.php?id=<?= $cid ?>" style="text-decoration:none"><?= $cat_name ?>
                          </a>

                        </li>

                      <?php } ?>

                    </ul>

                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact</a>
                  </li>
                </ul>

              </div>
            </nav>

          </div>

          <div class="col-4 col-sm-4 col-md-3 col-lg-4 col-xl-4 text-center">

            <form class="form-inline" action="../search.php" method="post">

              <div class="md-form my-0">

                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" style="outline:none;">

              </div>

            </form>

          </div>

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center text-muted mt-5">

        <button type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="And here's some amazing content. It's very engaging. Right?" style="box-shadow: none; border:none">

          <a href="" style="color: black;text-decoration: none">
            <span class="fas fa-shopping-cart" style="color:purple"></span>

            <span class="badge" style="color:purple"></span>

            <span class="total_price" style="color:purple"><?= money($grand_total) ?></span>

        </button>
        </a>

        <!--<a class="btn" id="cart_popover" data-toggle="popover" data-placement="bottom" title="Shopping Cart" style="box-shadow:none;font-weight:bold;font-size:17px">

                                      My Cart               


            <i class="fa fa-cart-arrow-down"></i><span id="cart_number">1</span>

          </a>-->

        <!--<div id="navbar-cart" class="navbar-collapse collapse">

            <ul class="shop">

              <li>

                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">

                  <span class="fas fa-shopping-cart"></span>

                  <span class="badge"></span>

                  <span class="total_price">$ 0.00</span>
                
                </a>
              
              </li>
            
            </ul>
          
          </div>-->

      </div>

      <div id="popover_content_wrapper" style="display: none">
        <span id="cart_details">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
            </tbody>
          </table>

        </span>
        <div style="align:right">
          <a href="#" class="btn btn-primary" id="check_out_cart">
            <span class="glyphicon glyphicon-shopping-cart"></span> Check out
          </a>
          <a href="#" class="btn btn-default" id="clear_cart">
            <span class="glyphicon glyphicon-trash"></span> Clear
          </a>
        </div>
      </div>

    </div>

  </div>

  </div>

  </div>

  <div class="container-fluid mt-5">