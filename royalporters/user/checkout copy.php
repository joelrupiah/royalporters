<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-wdidth, initial-scale=1" charset="utf-8">
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

    <?php include("header.php"); ?>

    <div class="container">

    <div class="row-fluid">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h4 class="text-center">Checkout</h4>
        <div class="table table-responsive">


          <table id="mytable" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>red
              <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sydney</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sydney</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Sakura Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>Tokyo</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Thor Walton</td>
                  <td>Developer</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Finn Camacho</td>
                  <td>Support Engineer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Serge Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>Singapore</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Zenaida Frank</td>
                  <td>Software Engineer</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jennifer Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Hermione Butler</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Lael Greer</td>
                  <td>Systems Administrator</td>
                  <td>London</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>San Francisco</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
              <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-pencil-alt" style="color:blue;font-size:20px;"></span></button></td>
                  <td><button class="btn" style="border:0px;box-shadow:none"><span class="fas fa-trash-alt" style="color:red;font-size:20px;"></span></button></td>
              </tr>
          </tbody>
          <tfoot>
              <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </tfoot>
      </table>

<!--END OF TABLE-->

    </div>

        </div>
	</div>
</div>

    <div class="container mb-5">

      <div class="row">

        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">

        <a href="index.php">
          <button class="btn btn-block" style="border-radius:0px;font-size:12.4px;height:50px;background-color:pink;color:white;">CONTINUE TO BASKET</button>
        </a>

        </div>

        <!--contact form-->

        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">

          <h2 class="h1-responsive text-center my-4">Contact us</h2>

                  <form id="checkout-form" name="checkout-form" action="send_email.php" method="post">

                              <div class="md-form">
                                <label for="name" class="">Full Name</label>
                                  <input type="text" id="name" name="name" class="form-control">
                              </div>

                              <div class="md-form">
                                <label for="email" class="">Email</label>
                                  <input type="text" id="email" name="email" class="form-control">
                              </div>

                              <div class="md-form">
                                
                                <label>Phone</label>
                                <input type="text" id="name" name="subject" rows="10" class="form-control">

                              </div>

                              <div class="md-form">
                                <label for="message">Brief Description(Please include your address)</label>
                                  <textarea type="text" id="message" name="message" rows="10" class="form-control md-textarea"></textarea>
                              </div>

                              <div class="md-form mt-4">
                                <button class="btn btn-primary btn-block" name="checkout_email" onclick="document.getElementById('Checkout-form').submit();" style="color:white;background-color:purple">DELIVERY TO THIS ADDRESS</button>
                              </div>

                              <!--<div class="md-form mt-4 float-right">
                                <button class="btn btn-block" href="payment.php" style="border-radius:0px;font-size:12.4px;height:30px;width:200px;background-color:pink;color:white;">MAKE A PAYMENT</button>
                              </div>-->

                  </form>

                  <div class="container">

                    <a href="payment.php">

                      <button class="btn btn-block float-right mt-4" style="border-radius:0px;font-size:12.4px;height:30px;width:200px;background-color:pink;color:white;">MAKE A PAYMENT</button>

                    </a>

                  </div>

                  <div class="status"></div>

        </div>

      </div>

    </div>

    <footer class="page-footer font-small lighten-3 py-4 mb-3" style="background-color:black">

      <div class="container-fluid text-center text-md-left">

        <div class="row">

          <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">ABOUT US</h5>

            <p class="text-white text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

          </div>

          <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">SUPPORT</h5>

            <ul class="list-unstyled">

              <li><p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Payment</a></p></li>
              <li><p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Shipping</a></p></li>
              <li><p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Cncellations</a></p></li>
              <li><p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">FAQ</a></p></li>

            </ul>

          </div>

          <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">GET IN TOUCH</h5>

            <ul class="list-unstyled">

              <li><p><a href="#" class="fas fa-map-marker text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; -1.28588 36.9841</a></p></li>
              <li><p><a href="#" class="fas fa-home text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; Utawala Shooters</a></p></li>
              <li><p><a href="#" class="fas fa-phone text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; 0700000000</a></p></li>
              <li><p><a href="#" class="fas fa-envelope text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; joelrupiah@gmail.com</a></p></li>

            </ul>

          </div>

          <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 text-center">

            <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">FOLLOW US</h5>

            <ul class="list-unstyled">

              <li><p><a href="#" class="fab fa-facebook-square" style="font-size:25px;color:#3b5998;text-decoration:none"></a></p></li>
              <li><p><a href="#" class="fab fa-twitter-square" style="font-size:25px;color:#55acee;text-decoration:none"></a></p></li>
              <li><p><a href="#" class="fab fa-instagram" style="font-size:25px;color:#e95950;text-decoration:none"></a></p></li>
              <li><p><a href="#" class="fab fa-google-plus-square" style="font-size:25px;color:#dd4b39;text-decoration:none"></a></p></li>

            </ul>

          </div>

        </div>

      </div>

    </footer>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>

    $(document).ready(function() {
    $('#mytable').DataTable();
    });

    </script>

    <script>


    $(document).ready(function(){
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
});

    </script>

  </body>
</html>
