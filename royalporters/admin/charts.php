<?php

include("../db.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../edit.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../main.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'No. of sales'],
          ['Birthday',     11],
          ['Wedding',      2],
          ['Baby Shower',  2],
          ['Funeral', 2],
          ['Birth',    7]

        ]);

        var options = {
          title: 'Best perfoming products 2019',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


      <!--Another chart-->

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      /*google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }*/
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Sales", { role: "style" } ],
        ["Birthday", 8.94, "#b87333"],
        ["Wedding", 10.49, "silver"],
        ["Baby Shower", 19.30, "gold"],
        ["Funeral", 21.45, "color: #e5e4e2"],
        ["Birth", 34.90, "color: #cd7f32 "]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Porduct Sales",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>


</head>
<body>

  <?php

    include("sidebar_admin.php");
    include("header_admin.php");

  ?>

  <div class="container" style="overflow: hidden;">

    <div class="row">
      
      <div class="col-md-6">
        
            <div id="piechart_3d" style="width: 500px; height: 500px;"></div>

      </div>

      <div class="col-md-6">
        
          <div id="columnchart_values" class="mb-5" style="width: 900px; height: 300px;"></div>

      </div>

    </div>
    
  </div>
  
    <footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>
