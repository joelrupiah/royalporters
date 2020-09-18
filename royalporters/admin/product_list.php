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

    <?php include("header_admin.php"); ?>
    <?php include("sidebar_admin.php"); ?>

    <table class="table table-responsive table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Details</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>Kate</td>
      <td>Moss</td>
      <td>USA</td>
      <td><a href="#"><span class="fas fa-edit"></span></a></td>
      <td><a href="#"><span class="fas fa-trash"></span></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Anna</td>
      <td>Wintour</td>
      <td>United Kingdom</td>
      <td>London</td>
      <td>Frontend Developer</td>
      <td>36</td>
    </tr>
    <tr class="table-info">
      <th scope="row">3</th>
      <td>Tom</td>
      <td>Bond</td>
      <td>Spain</td>
      <td>Madrid</td>
      <td>Photographer</td>
      <td>25</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jerry</td>
      <td>Horwitz</td>
      <td>Italy</td>
      <td>Bari</td>
      <td>Editor-in-chief</td>
      <td>41</td>
    </tr>
    <tr class="table-info">
      <th scope="row">5</th>
      <td>Janis</td>
      <td>Joplin</td>
      <td>Poland</td>
      <td>Warsaw</td>
      <td>Video Maker</td>
      <td>39</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Gary</td>
      <td>Winogrand</td>
      <td>Germany</td>
      <td>Berlin</td>
      <td>Photographer</td>
      <td>37</td>
    </tr>
    <tr class="table-info">
      <th scope="row">7</th>
      <td>Angie</td>
      <td>Smith</td>
      <td>USA</td>
      <td>San Francisco</td>
      <td>Teacher</td>
      <td>52</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>John</td>
      <td>Mattis</td>
      <td>France</td>
      <td>Paris</td>
      <td>Actor</td>
      <td>28</td>
    </tr>
    <tr class="table-info">
      <th scope="row">9</th>
      <td>Otto</td>
      <td>Morris</td>
      <td>Germany</td>
      <td>Munich</td>
      <td>Singer</td>
      <td>35</td>
    </tr>
  </tbody>
  <!--Table body-->


</table>

  </body>
</html>
