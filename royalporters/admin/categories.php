<?php

    include("sidebar_admin.php");
    include("header_admin.php");
     
?>

<div class="container-fluid">
	
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryaddmodal">
  ADD CATEGORY
</button>
<hr>


</div>

<!--Create Category Modal -->
<div class="modal fade" id="categoryaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="category_add.php">

      <div class="modal-body">
        
              <div class="form-group">

                  <label>Category Name</label>
                    <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category Name">
                  <label id="lblcategoryname" style="color: red"></label>  

              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="savedatacategory" class="btn btn-primary" id="sevecategory">ADD</button>
      </div>

    </form>

    </div>
  </div>
</div>
<!-- End of Category Modal -->

<div class="container-fluid">

    <?php

    $dbpr = "SELECT * FROM categories";
    $result2 = mysqli_query($con, $dbpr);

    ?>

    
    
        <div class="row">

            <div class="col-md-12">
            <h4></h4>

    <!--START OF PRODUCT TABLE-->

    <div class="table table-responsive">

        <table id="mytable" class="display"  style="width:100%;">
        <thead class="text-center" style="background-color: purple;color: white;">
            <tr>
                <!--<th></th>-->
                <th>ID</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>

          <?php

          while ($rows=mysqli_fetch_assoc($result2)) {

          ?>

            <tr>
                <!--<td><input type="hidden" name="update_id" id="update_id"></td>-->
                <td class="pt-5"><?= $rows['cat_id']; ?></td>
                <td class="pt-5"><?= $rows['category_name']; ?></td>

                <td class="pt-5">

                  <a href="#">

                    <p data-placement="top" data-toggle="tooltip" title="Edit">

                      <button type="button" style="box-shadow:none" class="btn btn-default btn-xs editcategorybtn" data-title="Edit">

                      <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

                    </button>

                  </p>

                </a>

                </td>

                <td class="pt-5">

                  <a href="delete_categories.php?id=<?= $rows['cat_id']; ?>">

                    <p data-placement="top" data-toggle="tooltip" title="Delete">

                      <button style="box-shadow:none" class="btn btn-default btn-xs">

                      <span class="fas fa-trash-alt" style="color:red;font-size:25px"></span>

                    </button>

                  </p>

                </a>

                </td>
            </tr>

            <?php

          }

            ?>

        </tbody>
        <tfoot style="background-color: purple;color: white">
            <tr>
                <!--<th></th>-->
                <th>ID</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>

<!--END OF TABLE-->

  </div>

    <!--END OF CATEGORIES TABLE-->

            </div>
      </div>
    </div>

<!--EDIT CATEGORIES MODAL-->

    <div class="modal fade" id="editmodalcategory" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align">Edit Category</h4>
              </div>

              <form action="edit_categories.php" method="post">

              <div class="modal-body">

                  <input type="hidden" name="update_id" id="update_id" class="form-control">

                <div class="form-group">

                  <label>Category Name</label>
                  <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category Name">

                </div>

              </div>

              <div class="modal-footer ">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="editdata_category" class="btn btn-success">Update</button>

          </div>

        </form>

            </div>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
        </div>

        <!--END OF EDIT CATEGORIES MODAL-->

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>

    $(document).ready(function() {
    $('#mytable').DataTable();
  });


    $(document).ready(function(){
        $('.editcategorybtn').on('click', function(){
          $('#editmodalcategory').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          console.log(data);

          $("#update_id").val(data[0]);
          $("#id").val(data[0]);
          $("#category_name").val(data[1]);
        });
    });

        </script>

<footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>