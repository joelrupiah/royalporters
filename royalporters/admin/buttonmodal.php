
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

  <div class="container">
  <div class="row">
  <div class="col-md-12">

  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>
                
                <a href="#">

                  <p data-placement="top" data-toggle="tooltip" title="Edit">

                    <button type="button" style="box-shadow:none" id="editbtn" class="btn btn-default btn-xs" data-title="Edit"
                    data-toggle="modal" data-target="#example">

                      <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

                    </button>

                </p>

              </a>

                </td>
                <td>
                
                <a href="delete_products.php?id=<?php echo $rows['product_id']; ?>">

                    <p data-placement="top" data-toggle="tooltip" title="Delete">

                      <button style="box-shadow:none" class="btn btn-default btn-xs">

                      <span class="fas fa-trash-alt" style="color:red;font-size:25px"></span>

                    </button>

                  </p>

                </a>
                
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>
                
                <a href="#">

<p data-placement="top" data-toggle="tooltip" title="Edit">

  <button type="button" style="box-shadow:none" id="editbtn" class="btn btn-default btn-xs" data-title="Edit">

    <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

  </button>

</p>

</a>
                
                </td>
                <td>
                
                <a href="delete_products.php?id=<?php echo $rows['product_id']; ?>">

<p data-placement="top" data-toggle="tooltip" title="Delete">

  <button style="box-shadow:none" class="btn btn-default btn-xs">

  <span class="fas fa-trash-alt" style="color:red;font-size:25px"></span>

</button>

</p>

</a>
                
                </td>
            </tr>
            
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>
                
                <a href="#">

<p data-placement="top" data-toggle="tooltip" title="Edit">

  <button type="button" style="box-shadow:none" id="editbtn" class="btn btn-default btn-xs" data-title="Edit">

    <span class="fas fa-edit" style="color:blue;font-size:25px"></span>

  </button>

</p>

</a>

                </td>
                <td>
                
                <a href="delete_products.php?id=<?php echo $rows['product_id']; ?>">

<p data-placement="top" data-toggle="tooltip" title="Delete">

  <button style="box-shadow:none" class="btn btn-default btn-xs">

  <span class="fas fa-trash-alt" style="color:red;font-size:25px"></span>

</button>

</p>

</a>
                
                </td>
            </tr>
      
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

    </div>

    </div>
    </div>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>      
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


</body>
</html>

