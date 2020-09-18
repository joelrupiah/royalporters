<?php

include("../db.php");
include("sidebar_admin.php"); 
include("header_admin.php"); 

?>

<div class="container-fluid">
  
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#slideraddmodal">
  ADD SLIDER
</button>
<hr>


</div>

<!--Create Category Modal -->
<div class="modal fade" id="slideraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="slider_add.php" enctype="multipart/form-data">

      <div class="modal-body">
        
          <div class="form-group">
    
              <input type="file" name="image" class="form-control" placeholder="upload image" required="">
          
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="savedataslider" class="btn btn-primary" id="sevecategory">ADD</button>
      </div>

    </form>

    </div>
  </div>
</div>
<!-- End of Category Modal -->


    <!-- CAROUSEL DETAILS-->
    <?php

    $dbpr = "SELECT * FROM carousel";
    $result2 = mysqli_query($con, $dbpr);

    ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
            <h4></h4>

    <!--START OF PRODUCT TABLE-->

    <div class="table table-responsive">

        <table id="mytable" class="display"  style="width:100%;table-layout:fixed;">
        <thead class="text-center" style="background-color: purple;color: white;">
            <tr>
                <!--<th></th>-->
                <th>ID</th>
                <th>Image</th>
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
                <td class="pt-5 text-center"><?= $rows['id']; ?></td>
                <td class="text-center"><img class="img-responsive text-center" src="<?= $rows['image_path']; ?>" style="width: 90px;height: 90px"></td>
                
                <td class="pt-5 text-center">

                  <a href="#">

                    <p data-placement="top" data-toggle="tooltip" title="Edit">

                      <button type="button" style="box-shadow:none" class="btn btn-default btn-xs editcarouselbtn" data-title="Edit">

                      <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

                    </button>

                  </p>

                </a>

                </td>

                <td class="pt-5 text-center">

                  <a href="delete_carousel.php?id=<?php echo $rows['id']; ?>">

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
        <tfoot class="text-center" style="background-color: purple;color: white;">
            <tr>
                <!--<th></th>-->
                <th>ID</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>

<!--END OF TABLE-->

  </div>

    <!--END OF PRODUCT TABLE-->

            </div>
      </div>
    </div>


    <div class="modal fade" id="editcarousel" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align">Edit Carousel</h4>
              </div>

              <form action="edit_carousel.php" method="post" enctype="multipart/form-data">

              <div class="modal-body">

                  <input type="hidden" name="update_id" id="update_id" class="form-control">

                <div class="form-group">

                  <label>Member Image</label>
                  <input type="file" name="image_path" id="image_path" class="form-control" placeholder="Select Image">

                </div>

              </div>

              <div class="modal-footer ">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="editdatacarousel" class="btn btn-success">Update</button>

          </div>

        </form>

            </div>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
        </div>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>

    $(document).ready(function() {
    $('#mytable').DataTable();
  });

    </script>

        <script>

        /*$(document).ready(function(){
    $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
    $('li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });*/

    $(document).ready(function(){
        $('.editcarouselbtn').on('click', function(){
          $('#editcarousel').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          console.log(data);

          $("#update_id").val(data[0]);
          $("#id").val(data[0]);
          $("#image_path").val(data[1]);
  
          });
    });

        </script>

    <footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>



    
