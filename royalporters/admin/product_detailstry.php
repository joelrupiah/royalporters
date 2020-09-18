<?php

include("./orders/getorders.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../edit.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../main.js"></script>
    
  </head>

  <body>

    <?php include("header_admin.php"); ?>
    <?php include("sidebar_admin.php"); ?>

    <?php

    $dbpr = "SELECT * FROM products";
    $result2 = mysqli_query($con, $dbpr);

    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
            <h4></h4>

    <!--START OF PRODUCT TABLE-->

    <div class="table table-responsive">

        <table id="mytable" class="display" style="width:100%;table-layout:fixed;">
        <thead style="background-color: purple;color: white">
            <tr>
                <!--<th></th>-->
                <th style="width:15%;">Customer Name</th>
                <th style="width:15%">Customer No.</th>
                <th style="width:15%">Customer Email</th>
                <th style="width:25%">Details</th>
                <th style="width:15%">Status</th>
                <th style="width:15%">Action</th>
            </tr>
        </thead>

        <tbody>

          <?php
              
              while($row = mysqli_fetch_array($result)) {
                   // var_dump($row);
          ?>

            <tr>
                <!--<td><input type="hidden" name="update_id" id="update_id"></td>-->
                <td class="pt-5"><?= $row['customer_name'] ?></td>
                <td><?= $row['customer_number'] ?></td>
                <td class="pt-5"><?= $row['customer_email'] ?></td>
                <td style="overflow:hidden">

                <div class="card card-body">
                    <?= $row['customer_address']; ?>
                </div>
                
                </td>
                <td class="pt-5"><?= $row['status'] ?></td>
                <td class="pt-5"><a href="<?= BASEURL . 'admin/orders/order_details.php?id=' . $row['order_id'] ?>">See Details</td>

            </tr>

            <?php

          }

            ?>

        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
                <th style="width:15%;">Customer Name</th>
                <th style="width:15%">Customer No.</th>
                <th style="width:15%">Customer Email</th>
                <th style="width:25%">Details</th>
                <th style="width:15%">Status</th>
                <th style="width:15%">Action</th>
            </tr>
        </tfoot>
    </table>

<!--END OF TABLE-->

  </div>

    <!--END OF PRODUCT TABLE-->

            </div>
    	</div>
    </div>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>

    $(document).ready(function() {
    $('#mytable').DataTable();
  });

    </script>

  </body>

</html>
