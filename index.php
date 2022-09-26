<?php
session_start();
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/mobile.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/marquee.css">
  <link rel="icon" href="images/image3.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <title>Voter Portal</title>
</head>
<style>
.background_img {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 60px;
  bottom: -20px;
}

.background_img2 {
  position: absolute;
  width: 601px;
  height: 189px;
  left: -36px;
  top: 111px;
  bottom: -20px;
}

.loginbtn {
  position: absolute;
  width: 601px;
  height: 189px;
  left: 110px;
  top: 336px;
  bottom: -20px;
}

.btn {
  font-family: "Montserrat", sans-serif;
  font-weight: 900;
  font-size: 20px;
  color: #edf0f1;
  padding: 13px 83px;
  background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 10, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
  border: none;
  z-index: -1;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.4s ease;
  text-decoration: none;
}

.btn:hover {
  background-color: linear-gradient(90deg, rgba(0, 212, 255, 1) 0%, rgba(9, 10, 121, 1) 35%, rgba(2, 0, 36, 1) 100%);
}

.btn2 {
  font-family: "Montserrat", sans-serif;
  font-weight: 900;
  font-size: 20px;
  color: #edf0f1;
  padding: 13px 67px;
  background: linear-gradient(90deg, rgba(0, 212, 255, 1) 0%, rgba(9, 10, 121, 1) 35%, rgba(2, 0, 36, 1) 100%);
  border: none;
  z-index: -1;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.4s ease;
  text-decoration: none;
}

.btn2:hover {
  background-color: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 10, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
}
</style>

<body>
  <header>
    <a class="logo" href="/"><img src="images/image1.png" style="height:36px; width:197px" alt="logo"></a>
    <nav>
      <ul class="nav__links">
        <li><a href="./AdminLogin.php">Admin</a></li>
        <li><a href="./candidates.php">Candidates</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
    <a class="cta" href="Contact.php">CONTACT</a>
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
  <?php 
        $sql = $mysqli->query("SELECT * FROM phase;"); 
        while($rows= $sql->fetch_assoc()){$phase= $rows['Phase'];}
        ?>
  <div class="rightTI li" style="Top: 60px;"><?php echo $phase." phase is Live"?></div>
  <div class="background">
    <img class="background_img"
      src="https://images.unsplash.com/photo-1600093112291-7b553e3fcb82?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
      alt="Indian Flag">.
  </div>
  <div class="background">
    <img class="background_img2" src="images/image2.png" alt="Indian Flag">.
  </div>
  <div class="loginbtn" id="loginbtn">
    <a class="btn" href="./Login.php">LOGIN</a>
  </div>
  <div class="loginbtn" style="left: 350px;">
    <a class="btn2" href="./Register.php">REGISTER</a>
  </div>
  <?php
session_unset();
session_destroy();
?>
  <div class="footer"></div>
</body>

</html>