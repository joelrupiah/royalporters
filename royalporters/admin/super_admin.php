          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white-50" style="background-color: #f67f93"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php
                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql =  "SELECT COUNT(product_id)
                  AS total FROM products";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="product_details.php" class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="text-decoration: none;">TOTAL PRODUCTS</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="product_details.php" class="font-weight-bold text-gray-800" style="text-decoration: none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="product_details.php" style="text-decoration: none"><i class="fas fa-shopping-cart fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php

                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql =  "SELECT COUNT(status) AS total FROM orders WHERE status='Pending'";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= BASEURL ?>admin/pending.php" class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-decoration:none">Pending</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= BASEURL ?>admin/pending.php" class="font-weight-bold text-gray-800" style="text-decoration:none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= BASEURL ?>admin/pending.php" style="text-decoration:none"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php

                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql =  "SELECT COUNT(status) AS total FROM orders WHERE status='Processing'";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= BASEURL ?>admin/processing.php" class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-decoration:none">Orders Processing</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= BASEURL ?>admin/processing.php" class="font-weight-bold text-gray-800" style="text-decoration:none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= BASEURL ?>admin/processing.php" style="text-decoration:none"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php

                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql =  "SELECT COUNT(status) AS total FROM orders WHERE status='Delivered and Paid'";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= BASEURL ?>admin/completedorders.php" class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="text-decoration:none">Orders Completed</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= BASEURL ?>admin/completedorders.php" class="font-weight-bold text-gray-800" style="text-decoration:none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= BASEURL ?>admin/completedorders.php" style="text-decoration:none"><i class="fas fa-check fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php

                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql =  "SELECT COUNT(status) AS total FROM orders WHERE status='Pending Withdrawals'";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= BASEURL ?>admin/pendingwithdrawals.php" class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="text-decoration:none">Pending Withdrawals</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= BASEURL ?>admin/pendingwithdrawals.php" class="font-weight-bold text-gray-800" style="text-decoration:none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= BASEURL ?>admin/pendingwithdrawals.php" style="text-decoration:none"><i class="fas fa-coins fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php

                  $con = new mysqli("localhost", "root", "", "royalporters");

                  $sql = "SELECT COUNT(id) AS total FROM superadminlogin";

                  $result = mysqli_query($con, $sql);
                  $values = mysqli_fetch_assoc($result);

                  $num_rows = $values['total'];
  
              ?>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= BASEURL ?>admin/add_user.php" class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-decoration:none">Administrators</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= BASEURL ?>admin/add_user.php" class="font-weight-bold text-gray-800" style="text-decoration:none"><?= $num_rows; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= BASEURL ?>admin/add_user.php" style="text-decoration:none"><i class="fas fa-user fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

          <!-- Content Row -->

          <div class="row">