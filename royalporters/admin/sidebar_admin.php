<?php

session_start();

include("../db.php");

if (!isset($_SESSION['username'])) {
  header("Location:login_admin.php");
}

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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></link>
  <script src="../js/jquery.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: purple">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_admin.php">
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
        <a class="nav-link" href="<?= BASEURL ?>admin/categories.php">
          <i class="fas fa-fw fa-bullhorn"></i>
          <span>Categories</span></a>
      </li>

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
          <i class="fas fa-fw fa-chart-bar"></i>
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