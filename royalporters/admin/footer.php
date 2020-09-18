<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../edit.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../main.js"></script>
</head>
  <body>


  </body>
  </html>

  <script>

  $(document).ready(function(){
    $('#edit_products').on('click', function(){

      $('#editmodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#product_name').val(data[1]);
      $('#product_price').val(data[2]);
      $('#product_details').val(data[3]);
      $('#image1').val(data[4]);

    });

  )};

  </script>
