<?php

include("../db.php");
include("sidebar_admin.php");
include("header_admin.php"); 

?>

    <?php

    $dbpr = "SELECT * FROM team_members";
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
                <th style="width: 5%" >ID</th>
                <th style="width: 10%" >Image</th>
                <th style="width: 15%">Name</th>
                <th style="width: 20%">Email</th>
                <th style="width: 23%" >Short Desc</th>
                <th style="width: 23%" >Details</th>
                <th style="width: 7%">Edit</th>
                <th style="width: 7%" >Delete</th>
            </tr>
        </thead>

        <tbody>

          <?php

          while ($rows=mysqli_fetch_assoc($result2)) {

          ?>

            <tr>
                <!--<td><input type="hidden" name="update_id" id="update_id"></td>-->
                <td class="pt-5 text-center"><?= $rows['member_id']; ?></td>
                <td><img class="img-responsive" src="<?php echo $rows['member_image1']; ?>" style="width: 90px;height: 90px"></td>
                <td class="pt-5 text-center"><?= $rows['member_name']; ?></td>
                <td class="pt-5 text-center"><?= $rows['member_email']; ?></td>
                <!--<td style="display: hidden"><? // = $rows['facebook_link'] ?></td>-->
                <!--<td style="display: hidden"><? // = $rows['twitter_link'] ?></td>-->
                <!--<td style="display: hidden"><? // = $rows['instagram_link'] ?></td>-->
                <!--<td style="display: hidden"><? // = $rows['google_link'] ?></td>-->
                <td class="pt-4 text-center">
                	
                <div class="card card-body">
                    <?= $rows['short_description']; ?>
                </div>

                </td>


                <td style="overflow:hidden">

                <div class="card card-body">
                    <?= $rows['member_details']; ?>
                </div>
                
                </td>
               
                <td class="pt-5">

                  <a href="#">

                    <p data-placement="top" data-toggle="tooltip" title="Edit">

                      <button type="button" style="box-shadow:none" class="btn btn-default btn-xs editmemberbtn" data-title="Edit">

                      <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

                    </button>

                  </p>

                </a>

                </td>

                <td class="pt-5">

                  <a href="delete_products.php?id=<?php echo $rows['product_id']; ?>">

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
                <th style="width: 5%" >ID</th>
                <th style="width: 10%" >Image</th>
                <th style="width: 15%">Name</th>
                <th style="width: 20%">Email</th>
                <th style="width: 23%" >Short Desc</th>
                <th style="width: 23%" >Details</th>
                <th style="width: 7%">Edit</th>
                <th style="width: 7%" >Delete</th>
            </tr>
        </tfoot>
    </table>

<!--END OF TABLE-->

  </div>

    <!--END OF PRODUCT TABLE-->

            </div>
    	</div>
    </div>


    <div class="modal fade" id="editmember" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align">Edit Your Detail</h4>
              </div>

              <form action="edit_member.php" method="post" enctype="multipart/form-data">

              <div class="modal-body">

                  <input type="hidden" name="update_id" id="update_id" class="form-control">

                <div class="form-group">

                  <label>Member Name</label>
                  <input type="text" name="member_name" id="member_name" class="form-control" placeholder="Member Name">

                </div>

                <div class="form-group">

                  <label>Member Email</label>
                  <input type="text" name="member_email" id="member_email" class="form-control" placeholder="Member Email">

                </div>

                <div class="form-group">

                  <label>Short Description</label>

                  <textarea name="short_description" id="short_description" class="form-control" placeholder="Short Description"></textarea>

                </div>

                <div class="form-group">

                  <label>Member Details</label>
					
					<textarea name="member_details" id="member_details" class="form-control" placeholder="Member Details"></textarea>
                
                </div>

                <div class="form-group">

                  <label>Member Image</label>
                  <input type="file" name="member_image1" id="member_image1" class="form-control" placeholder="Select Image">

                </div>

              </div>

              <div class="modal-footer ">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="editdatamember" class="btn btn-success">Update</button>

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
        $('.editmemberbtn').on('click', function(){
          $('#editmember').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          console.log(data);

          $("#update_id").val(data[0]);
          $("#id").val(data[0]);
          $("#member_image1").val(data[1]);
          $("#member_name").val(data[2]);
          $("#member_email").val(data[3]);
          $("#short_description").val(data[4]);
          $("#member_details").val(data[5]);
        });
    });

        </script>

     <footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>