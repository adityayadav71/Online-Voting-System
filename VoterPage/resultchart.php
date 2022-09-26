<?php
session_start();
require 'votersidebar.php';
include 'db_connection.php';
$sql1 = $mysqli->query("SELECT Phase from phase WHERE NO = 1;");
while($rows= $sql1->fetch_assoc())
{
  if($phase == "RESULTS"){
   $_SESSION['status'] = "WOOHOO!";
   $_SESSION['message'] = "Elections results have been announced!";
   $_SESSION['status-code'] = "info";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Statistics</title>
  <style type="text/css">
  BODY {
    width: 550PX;
  }

  #chart-container {
    width: 1000px;
    height: auto;
  }
  </style>
</head>

<body>
  <section class="home-section">
    <div class="heading" style="margin-left: 35%;">RESULTS</div><br>
    <div class="content">
      <div id="chart-container" style="display: block;margin-top: 35px;height: 500px;width: 1000px;left: 20%">
        <canvas id="graphCanvas"></canvas>
      </div>
      <script>
      $(document).ready(function() {
        showGraph();
      });


      function showGraph() {
        {
          $.post("data.php",
            function(data) {
              console.log(data);
              var name = [];
              var marks = [];

              for (var i in data) {
                name.push(data[i].Party);
                marks.push(data[i].TotalVotes);
              }

              var chartdata = {
                labels: name,
                datasets: [{
                  label: 'Total Votes',
                  backgroundColor: '#49e2ff',
                  borderColor: '#46d5f1',
                  hoverBackgroundColor: '#CCCCCC',
                  hoverBorderColor: '#666666',
                  data: marks
                }]
              };

              var graphTarget = $("#graphCanvas");

              var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata
              });
            });
        }
      }
      </script>
  </section>
  </div>
  </div>
  <?php
                          if(isset($_SESSION['status'])){
                            ?><script>
  Swal.fire({
    title: "<?php echo $_SESSION['status']?>",
    text: "<?php echo $_SESSION['message']?>",
    icon: "<?php echo $_SESSION['status-code']?>",
    button: "OK!",
  });
  </script>
  <?php
                            }
                          ?>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/Chart.min.js"></script>
</body>

</html>