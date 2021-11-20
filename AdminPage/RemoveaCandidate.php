<?php
session_start();
include '../db_connection.php';
require 'adminsidebar.php';
$candidateID = $_POST['ID'];
if(isset($_POST['submit'])){
  $sql1 = $mysqli->query("DELETE FROM canpersonal WHERE id= $candidateID");
  $sql2 = $mysqli->query("DELETE FROM candidatedetails WHERE id= $candidateID");
  if ($sql1 === TRUE && $sql2 === TRUE) {
  $rows = $mysqli->affected_rows;
  if ($rows!=0) {
    $_SESSION['status'] = "REMOVED!";
    $_SESSION['message'] = "Candidate No. $candidateID removed successfully";
    $_SESSION['status-code'] = "success";
  } else{
    $_SESSION['status'] = "ERROR!";
    $_SESSION['message'] = "No such candidate exists";
    $_SESSION['status-code'] = "error";
  }
}
  $mysqli -> close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="bower_components/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove a Candidate</title>
   </head>
<body>
  <section class="home-section">
      <div class="heading">Remove a Candidate</div><br>
      <div class="content">
        <div style="margin = 10px 10px 10px 10px">
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
            <form action="" method='POST'>
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Candidate # ID</span>
                  <input type="text" name = "ID" placeholder="Candidate's alloted number" required>
                </div>
            </div>
            <div class="button" style="height:0%; padding:12px 20px 12px 5px">
                <input type="submit" name = "submit" value="REMOVE">
              </div>   
            </form>
  </section>
</body>
</html>
