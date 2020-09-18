
<?php 

    include("sidebar_admin.php");
    include("header_admin.php");
     
?>

<div class="container mb-5">

  <form class="w-100" action="add_products.php" method="post" enctype="multipart/form-data">
  <!-- Default input -->
    <h5 class="text-center">ADD PRODUCT</h5>

  <div class="form-group">

    <select class="custom-select">

    <option selected>Categories</option>

    <option value="1"></option>
  
  </select>

  </div>

  <div class="form-group">
    <input type="text" name="product_name" class="form-control" id="formGroupExampleInput" placeholder="Product Name">
  </div>
  <!-- Default input -->
  <div class="form-group">
    <input type="text" name="product_price" class="form-control" id="formGroupExampleInput2" placeholder="Product Price">
  </div>

  <div class="form-group">
    <textarea name="product_details" class="form-control" placeholder="Product Details"></textarea>
  </div>

  <div class="form-group">
    <input type="file" name="image1" class="form-control" id="formGroupExampleInput2" placeholder="upload image">
  </div>

  <div class="form-group">
    <input type="hidden" name="product_code" class="form-control" id="formGroupExampleInput2">
  </div>

<div class="form-group">

  <button class="btn btn-success btn-block float-right" type="submit" name="upload_product">upload</button>

</div>

</form>

    </div>

    <footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>

