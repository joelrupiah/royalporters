<?php

session_start();

// include("../../db.php");

if (!isset($_SESSION['username'])) {
  header("Location:login_admin.php");
}

include("../../db.php");

$order_id = $_GET['id'];
// var_dump($order_id);die;
$sql = "SELECT * FROM orders
          INNER JOIN cart_items ON orders.cart_id = cart_items.id WHERE orders.order_id = $order_id";
$fetch_result = mysqli_query($con, $sql);
// var_dump($fetch_result);
$result = mysqli_fetch_assoc($fetch_result);
// var_dump($result);die;
$items = json_decode($result['items'], true);

// var_dump($sql);die;
?>
    
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Royal Porters Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
  <script src="../js/jquery.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: purple">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <!--<i class="fas fa-laugh-wink"></i>--><i class="fas fa-birthday-cake"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ROYAL <sup>PORTERS</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>admin/index_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Products Components:</h6>
            <a class="collapse-item" href="add_products.php">Add Products</a>
            <a class="collapse-item" href="product_details.php">Product Details</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users Utilities:</h6>
            <a class="collapse-item" href="add_user.php">Add Users</a>
            <a class="collapse-item" href="add_user.php">Delete Users</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>admin/orders.php">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Orders</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>admin/slider.php">
          <i class="fas fa-fw fa-sliders-h"></i>
          <span>Sliders</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>admin/ourteam.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Our Team</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>admin/aboutus.php">
          <i class="fas fa-fw fa-address-book"></i>
          <span>About Us</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>admin/charts.php">
          <i class="fas fa-fw fa-paper-plane"></i>
          <span>Charts</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn" type="button" style="background-color: #f67f93">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username']; ?></span>
                <!--<img class="img-profile rounded-circle" src="../../img/me4.jpg">--><span class="fas fa-user-circle"></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>


          </ul>

        </nav>
        <!-- End of Topbar -->

    </div>

        <!-- Begin Page Content -->

    <div class="container-fluid">

        <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">ORDER DETAILS</h3>
            <div class="card-body">
                <form class="form-inline" action="<?= BASEURL ?>admin/orders/updatestatus.php?id=<?= $order_id ?>" method="post">
                      <select class="browser-default custom-select" name="status" style="width:700px;border-radius: 0px;">

                        <!--<option selected>Pending</option>-->
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Cancelled">Cancelled</option>
                        <option value="Delivered & Paid">Delivered and Paid</option>
                        <option value="Pending Withdrawals">Pending Withdrawals</option>

                      </select>
                      <button type="submit" class="btn mr-3" style="border-radius:0px;background-color:purple;color: pink">submit</button>
                </form>
                <div class="row">
                    <?php
                    foreach ($items as  $item) {
                        $id = $item['id'];
                        $sql = "SELECT * FROM products WHERE product_id = $id";
                        $fetch_pro = mysqli_query($con, $sql);
                        $product = mysqli_fetch_assoc($fetch_pro);
                        // var_dump($product);
                    ?>
                        <div class="col-6 mt-3">
                            <!--
                            <img class="mb-1 mr-3" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                            <img class="mb-1 ml-3 mr-3" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                            <img class="mb-1 ml-3 mr-3" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                            <img class="mb-1 ml-3" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                            -->
                            <ul class="list-group">
                                <li class="list-group-item active" style="background-color:purple">
                                    <label for="">Product name</label>
                                    <span class="badge badge-light" style="float: right;background-color:black;color:white"><i><?= $product['product_name'] ?></i></span>
                                </li>

                                <li class="list-group-item">
                    
                                    <h6 class=" text-center">PRODUCT IMAGES</h6>
                                    <img class="mb-1 ml-2 mr-" src="<?= BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2 mr-2" src="<?= BASEURL . 'royalporters/' . $product['product_image2'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2" src="<?= BASEURL . 'royalporters/' . $product['product_image3'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2" src="<?= BASEURL . 'royalporters/' . $product['product_image4'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">

                                </li>

                                <li class="list-group-item">
                                    <label for=""><b>Quantity</b></label>
                                    <span class="badge badge-light" style="float: right"><?= $item['quantity'] ?></span>
                                </li>
                                <li class="list-group-item">
                                    <label for=""><b>Price</b></label>
                                    <span class="badge badge-light" style="float: right"><?= money($product['product_price']) ?></span>
                                </li>
                                <li class="list-group-item">
                                    <label for=""><b>Product Details</b></label>
                                    <span class="badge badge-light" style="float: right"><?= $product['product_details'] ?></span>
                                </li>
                                <!--<li class="list-group-item">
                                    <img class="mb-1 ml-2 mr-" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2 mr-2" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">
                                    <img class="mb-1 ml-2" src=" // BASEURL . 'royalporters/' . $product['product_image1'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 0px">

                                </li>-->
                            </ul>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>


<footer class="sticky-footer bg-white">

    <?php include("../footer_admin.php"); ?>
