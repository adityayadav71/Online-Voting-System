<?php
session_start();
include '../db_connection.php';
require 'adminsidebar.php';
$sql = "SELECT * FROM candidatedetails";
$res = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/sidebar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <section class="home-section">
    <div class="heading">Dashboard</div><br>
    <div class="content">
      <style>
      div.polaroid {
        width: 100%;
        height: auto;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      div.container {
        text-align: center;
        padding: 10px 20px;
      }

      .flex-container {
        display: -webkit-inline-box;
        width: min-content;
        margin: -42px;
        margin-top: auto;
        margin-left: auto;
        flex-wrap: wrap;
      }

      .flex-container>div {
        width: min-content;
        margin: 50px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
      }

      .img {
        height: fit-content;
      }
      </style>
      <?php  
  while($rows = mysqli_fetch_assoc($res)) {?>
      <div class="flex-container">
        <div class="polaroid">
          <?php
      // Outputting HTML and the data from the DB. Change to $row['the name of the field you want']
      echo '<img src="../'.$rows['Image'].'"height="119px" width="119px"/>'.$rows['Votes'].'';
      ?></div>
      </div><?php
  }
?>
    </div>
    </div>
    </div>
    </div>
  </section>
</body>

</html>