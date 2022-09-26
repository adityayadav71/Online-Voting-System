<?php
session_start();
require 'votersidebar.php';
include '../db_connection.php';
$sql = "SELECT * FROM candidatedetails";
$res = $mysqli->query($sql);
$_SESSION['status'] = "LOGGED IN!";
$_SESSION['message'] = "Here is your Dashboard!";
$_SESSION['status-code'] = "success";
if($_SESSION['Voted'] == "Yes"){
$_SESSION['status'] = "WARNING!";
$_SESSION['message'] = "You have already Voted!";
$_SESSION['status-code'] = "warning";
}
  ?><script>
swal({
  title: "<?php echo $_SESSION['status']?>",
  text: "<?php echo $_SESSION['message']?>",
  icon: "<?php echo $_SESSION['status-code']?>",
  button: "OK!",
});
</script>
<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/form.css">
  <title>Cast your Vote</title>
</head>

<body>
  <section class="home-section">
    <div class="heading">Vote a Candidate</div><br>
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
        display: inline-flex;
        width: min-content;
        margin: -42px;
        margin-top: auto;
        margin-left: auto;
        flex-wrap: wrap;
      }

      .flex-container>div {
        width: min-content;
        margin: 77px;
        line-height: 0;
        text-align: center;
        font-size: 30px;
      }

      .img {
        height: fit-content;
      }

      .button {
        padding: 30px;
        object-fit: contain;
        border-radius: 50%;
        font-family: ;
        color: white;
        weight: 500;
        font-size: 20px;
        margin: 10px;
        background: linear-gradient(to right bottom, #4776E6, #8E54E9);
        border: 0px;
      }

      .button:hover {
        background: linear-gradient(to top left, #4776E6, #8E54E9);
        cursor: pointer;
      }
      </style>
      <?php  
  while($rows = mysqli_fetch_assoc($res)){?>
      <div class="flex-container">
        <div class="polaroid" id="votes">
          <?php
      if(isset($_SESSION['user'])){
        echo '<img src="../'.$rows['Image'].'"height="119px" width="130px"/>';
      }?>
          <?php
      if($_SESSION['Voted'] == "No"){
      ?>
          <form action="" method="POST" id="<?php echo $rows['Name']?>">
            <input type="submit" class="button" name="<?php echo $rows['ID']?>" id="votebtn" value="VOTE">
          </form>
          <?php
      }
      if(isset($_POST[$rows['ID']])){
        ?>
          <script>
          Swal.fire({
            <?php
                $_SESSION['status']="VOTED";
                $_SESSION['message'] ="Your Vote has successfully been submitted!";
                $_SESSION['status-code'] ="success";
                ?>
          })
          setTimeout(function() {
            window.location.href = 'index.php';
          }, 1000);
          </script>
          }
          <?php
            $sql = $mysqli->query("UPDATE candidatedetails SET Votes = Votes + 1 WHERE ID = '".$rows['ID']."'");
            if($sql){ 
              $update = $mysqli->query("UPDATE `voterdetails` set `Voted` = 'Yes' where `VID` = '".$_SESSION['VID']."';");
              $_SESSION['Voted'] = "Yes";
              $_SESSION['status'] = "VOTED!";
              $_SESSION['message'] = "You have voted!";
              $_SESSION['status-code'] = "success";?>
          <?php
            }else{
              $_SESSION['status'] = "ERROR!";
              $_SESSION['message'] = "Sorry, Please Try Again!";
              $_SESSION['status-code'] = "error";
            } 
      }
      ?><script>
          Swal.fire({
            title: "<?php echo $_SESSION['status']?>",
            text: "<?php echo $_SESSION['message']?>",
            icon: "<?php echo $_SESSION['status-code']?>",
            button: "OK!",
          });
          </script>
        </div>
      </div>
      <?php
    }
  $mysqli->close(); 
?>
  </section>
</body>

</html>