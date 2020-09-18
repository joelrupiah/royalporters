
  <?php 

        include("sidebar_admin.php");
        include("header_admin.php"); 

  ?>

  <div class="container-fluid">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#useraddmodal">
        ADD USER
    </button>
<hr>


</div>

<!--Create Category Modal -->
<div class="modal fade" id="useraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="user_add.php">

      <div class="modal-body">
        
              <div class="form-group">

                  <label>Username</label>
                    <input type="text" name="adminname" id="adminname" class="form-control" placeholder="Username">
                   

              </div>

              <div class="form-group">

                  <label>Email</label>
                    <input type="text" name="adminemail" id="adminemail" class="form-control" placeholder="Email">
                   

              </div>


              <div class="form-group">

                  <label>Password</label>
                    <input type="password" name="adminpassword" id="adminpassword" class="form-control" placeholder="Password">
                   

              </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="savedatauser" class="btn btn-primary" id="seveuser">ADD</button>
      </div>

    </form>

    </div>
  </div>
</div>
<!-- End of Category Modal -->

  </div>

<div class="container-fluid">

  <div class="card mt-3">

  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Admin list</h3>
  <div class="card-body">

      <table class="table table-bordered table-striped table-responsive-md text-center">

        <thead>

          <tr>

            <th class="text-center" style="width: 10%;">Admin ID</th>
            <th class="text-center" style="width: 40%;">Admin Username</th>
            <th class="text-center" style="width: 40%;">Admin Email</th>
            <!--<th class="text-center">Admin Password</th>-->
            <th class="text-center" style="width: 10%;">Remove</th>

          </tr>

        </thead>

        <?php

        $sql4 = "SELECT * FROM superadminlogin";

        $result4 = mysqli_query($con, $sql4);


        if (isset($_POST['delete_admin'])) {

          $dlt = "DELETE FROM superadminlogin WHERE id = $id";

          $resultdlt = mysqli_query($con, $dlt);

        }

        ?>

        <tbody>

          <?php

          while ($row=mysqli_fetch_assoc($result4)) {

          ?>

          <tr>

            <td><?= $row['id']; ?></td>
            <td><?= $row['username'];?></td>
            <td><?= $row['email'];?></td>
            <td>

              <a href="delete_admin.php?id=<?= $row['id']; ?>"><span class="table-remove"><button type="submit" name="delete_admin"
                  class="btn btn-danger btn-rounded btn-sm my-0" id="removeuser">Remove</button></span></a>

            </td>


          </tr>

          <?php

        }

          ?>

        </tbody>

      </table>

  </div>
</div>
<!-- Editable table -->

  </div>

<script>

$(document).ready(function() {

$("#removeuser").click(function(e) {
  e.preventDefault();

});

</script>

<footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>