<?php
session_start();
include 'db_connection.php';
$sql = "SELECT * FROM candidatedetails ORDER BY ID ASC ";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/sidebar.css">
  <link rel="stylesheet" href="./css/table.css">
  <link rel="stylesheet" href="./css/navbar.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/image3.ico" type="image/x-icon">
  <title>Participating Candidates</title>
</head>

<body>
  <header style="position:relative;">
    <a class="logo" href="/Online-Voting-System-main"><img src="images/image1.png" style="height:36px; width:197px"
        alt="logo"></a>
    <nav>
      <ul class="nav__links">
        <li><a href="./AdminLogin.php">Admin</a></li>
        <li><a href="./candidates.php">Candidates</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
    <a class="cta" href="./Login.php">LOGIN</a>
    <p class="menu cta">Menu</p>
  </header>
  <div class="overlay">
    <a class="close">&times;</a>
    <div class="overlay__content">
      <a href="#">Services</a>
      <a href="#">Projects</a>
      <a href="#">About</a>
    </div>
  </div>
  <script type="text/javascript" src="./js/mobile.js"></script>
  <section class="home-section" style="width: 100%;margin-left: -78px;margin-top: 60px">
    <div class="heading">Candidate Details</div><br>
    <div class="container">
      <div class="table-wrapper" style="margin:90px 70px 70px">
        <table class="fl-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Age</th>
              <th>Party</th>
              <th>Slogan</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
              ?>
            <tr>
              <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
              <td><?php echo $rows['ID'];?></td>
              <td><?php echo $rows['Name'];?></td>
              <td><?php echo $rows['Age'];?></td>
              <td><?php echo $rows['Party'];?></td>
              <td><?php echo $rows['Slogan'];?></td>
              <td><?php echo '<img src="'.$rows['Image'].'" alt="Image" style="width: 100px; height: 100px;">';?></td>
            </tr>
            <?php
                }
              $mysqli->close(); 
             ?>
          <tbody>
        </table>
      </div>
  </section>
  <script type="text/javascript" src="./js/mobile.js"></script>
</body>

</html>