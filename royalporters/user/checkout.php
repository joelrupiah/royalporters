<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-wdidth, initial-scale=1" charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../edit.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    </link>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../main.js"></script>
</head>

<body>

    <?php include("header.php"); ?>


    <div class="container">

        <div class="row-fluid">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h4 class="text-center">Checkout</h4>
                <div class="table table-responsive">

                    <table class="table table-bordered table-stripped table-condensed table-hover">
                        <thead style="background-color: purple;color: pink">
                            <th>#</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub-total</th>
                        </thead>
                        <tbody>
                            <?php
                            $item_count = 0;
                            $i = 1;
                            $sub_total = 0;
                            foreach ($items as $item) {
                                $product_id = $item['id'];
                                // $productQ = $db->query("SELECT * FROM products WHERE id = '{$product_id}' ");

                                $sql = "SELECT * FROM products WHERE product_id = '{$product_id}' ";
                                $productQ = mysqli_query($con, $sql);

                                $product = mysqli_fetch_assoc($productQ);
                                $available = $product['quantity'];

                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $product['product_name']; ?></td>
                                    <td><?= money($product['product_price']); ?></td>
                                    <td><?= $item['quantity']; ?></td>
                                    <td><?= money($item['quantity'] * $product['product_price']); ?></td>
                                </tr>

                            <?php
                                $i++;
                                $item_count += $item['quantity'];
                                $sub_total += ($item['quantity'] * $product['product_price']);
                                // $tax = TAXRATE * $sub_total;
                                // $tax = number_format($tax, 2);
                                $grand_total = $sub_total;
                                // $grand_total = $sub_total;
                            } ?>
                        </tbody>
                    </table>
                    <legend>Total</legend>
                    <table class="table table-bordered text-right table-stripped table-condensed">
                        <thead class="totals-table-header" id="htotal" style="background-color: purple;color: pink">
                            <th>Total item</th>
                            <th>Sub total</th>
                            <th>Grand total</th>
                        </thead>
                        <tbody id="btotal">
                            <tr>
                                <td><?= $item_count ?></td>
                                <td><?= money($sub_total) ?></td>
                                <td class="bg-light"><?= money($grand_total) ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--END OF TABLE-->

                </div>

            </div>
        </div>
    </div>

    <div class="container mb-5">

        <div class="row">

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">

                <a href="index.php" style="text-decoration:none">
                    <button class="btn btn-block" style="border-radius:0px;font-size:12.4px;height:50px;background-color:pink;color:white;">CONTINUE TO BASKET</button>
                </a>

            </div>

            <!--contact form-->

            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">

                <h2 class="h1-responsive text-center my-4">Contact us</h2>

                <form id="checkout-form" name="checkout-form" action="checkout/checkout.php" method="post">

                    <div class="md-form">
                        <label for="name" class="">Full Name</label>
                        <input type="text" id="name" name="customer_name" class="form-control">
                    </div>

                    <div class="md-form">
                        <label for="email" class="">Email</label>
                        <input type="text" id="email" name="customer_email" class="form-control">
                    </div>

                    <div class="md-form">

                        <label>Phone</label>
                        <input type="text" id="name" name="customer_number" rows="10" class="form-control">

                    </div>

                    <div class="md-form">
                        <label for="message">Brief Description(Please include your address)</label>
                        <textarea type="text" id="message" name="customer_address" rows="10" class="form-control md-textarea"></textarea>
                    </div>

                    <div class="md-form mt-4">
                        <!-- <button class="btn btn-primary btn-block" name="checkout_email" onclick="document.getElementById('Checkout-form').submit();" style="color:white;background-color:purple">DELIVERY TO THIS ADDRESS</button> -->
                        <button class="btn btn-primary btn-block" name="checkout_email" type="submit" style="color:white;background-color:purple">DELIVER TO THIS ADDRESS</button>
                    </div>

                    <!--<div class="md-form mt-4 float-right">
                                <button class="btn btn-block" href="payment.php" style="border-radius:0px;font-size:12.4px;height:30px;width:200px;background-color:pink;color:white;">MAKE A PAYMENT</button>
                              </div>-->

                </form>

                <div class="status"></div>
            </div>
        </div>

    </div>

    <footer class="page-footer font-small lighten-3 py-4" style="background-color:black">

        <?php include("footer.php"); ?>
</body>

</html>