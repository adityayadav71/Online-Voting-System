<?php
session_start();
include '../db_connection.php';
require 'adminsidebar.php';
$sql = $mysqli->query("SELECT * FROM phase");
if(isset($_POST['reg'])){
  $_SESSION['status']="CHANGED";
  $_SESSION['message'] ="Voters can now start registering!";
  $_SESSION['status-code'] ="success";
  $update = $mysqli->query("UPDATE phase SET Phase = 'REGISTRATION' WHERE NO = 1");
  ?>
  <script>
  setTimeout(function(){
    window.location.href = 'ChangePhaseofElection.php';
  }, 2200);
  </script>
  <?php
}
if(isset($_POST['voting'])){
  $_SESSION['status']="CHANGED";
  $_SESSION['message'] ="Voters can start voting now!";
  $_SESSION['status-code'] ="success";
  $update = $mysqli->query("UPDATE phase SET Phase = 'VOTING' WHERE NO = 1");
  ?>
  <script>
  setTimeout(function(){
    window.location.href = 'ChangePhaseofElection.php';
  }, 3000);
  </script>
  <?php
}
if(isset($_POST['res'])){
  $_SESSION['status']="CHANGED";
  $_SESSION['message'] ="Election results are live now!";
  $_SESSION['status-code'] ="success";
  $update = $mysqli->query("UPDATE phase SET Phase = 'RESULTS' WHERE NO = 1");
  ?>
  <script>
  setTimeout(function(){
    window.location.href = 'ChangePhaseofElection.php';
  }, 3000);
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<section class="home-section">
      <div class="heading"style="margin-left: 30%;">Current Phase of Election</div><br>
      <div class="content">
            <form action="" method="POST">
              <div class="user-details"style="justify-content: center;">
                <div class="input-box">
                <?php
                while($rows= $sql->fetch_assoc())
                      {
                        ?>
                        <h1 id="demo"style="font-family: 'Lato';font-size: 50px;text-align: center;"><?php echo $rows['Phase']?></h1>
                        <?php
                      }
                  ?>
                </div>
            </div>   
      <div class="button" style="display: inline;margin: 35px 50px;">
          <input type="submit"  name="reg" value="Registration Phase" style="width: 24%;height: 100px; padding: 10px 10px 10px 10px; font-size: x-large;">
      </div>
      <div class="button" style="display: inline;margin: 35px 50px;">
          <input type="submit"  name="voting" value="Voting Phase" style="width: 24%;margin: 10px -26px;height: 100px; padding: 10px 10px 10px 10px; font-size: x-large;">
      </div>
      <div class="button" style="display: inline;margin: 35px 50px;">
          <input type="submit"  name="res" value="Results Phase" style="width: 24%;height: 100px; margin: 14px 0px;padding: 10px 10px 10px 10px; font-size: x-large;">
      </div>
     </form>
  </section>
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
}unset($_SESSION['status']);
?>
</body>
</html>
